<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/12
 * Time: 下午3:09
 */
class Health_m extends CI_Model{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('date');
    }
    public function get($uid,$page_num=1,$page_size=10,$condition='sports'){
        $offset=($page_num-1)*$page_size;
        if ($condition==='sports'){
            $query = $this->db->query('SELECT *
FROM sport_record 
WHERE userId='.$uid.'
ORDER BY createdAt DESC 
LIMIT '.$page_size.' OFFSET '.$offset);
        }
        elseif ($condition==='steps') {
            $query = $this->db->query('SELECT *
FROM step_record 
WHERE userId='.$uid.'
ORDER BY createdAt DESC 
LIMIT '.$page_size.' OFFSET '.$offset);
        }
        $list=$query->result_array();
        return $list;
    }
    public function get_speed($uid,$page_num=1,$page_size=2){
        $offset=($page_num-1)*$page_size;

        $query = $this->db->query('SELECT createdAt,distance/duration as speed
FROM sport_record 
WHERE userId='.$uid.'
ORDER BY createdAt DESC 
LIMIT '.$page_size.' OFFSET '.$offset);
        $list=$query->result_array();
        $data= array();
        $speed=array();
        foreach ($list as $i) {
            array_push($data,substr(unix_to_human($i['createdAt']),5,5));
            array_push($speed,ceil($i['speed']*100)/100);
        }
        $result=array();
        array_push($result,$data);
        array_push($result,$speed);
        return $result;
    }
    public function get_step($uid,$month=1){
        $i=date('d',now());
        $date=strtotime("-30 days");
        $query = $this->db->query('SELECT createdAt,steps
FROM step_record 
WHERE createdAt>'.$date.' and userId='.$uid.'
ORDER BY createdAt');
        $list=$query->result_array();
        $result= array();
        $j=0;
        $d=0;
        $r=array(
            'month'=>date('m',now())
            );
        if (date('m',$list[0]['createdAt'])!=date('m',now())) {
            array_shift($list);
        }
        if(date('w',$list[0]['createdAt'])=='1')
            $d=1;
        elseif(date('w',$list[0]['createdAt'])=='2')
            $d=2;
        elseif (date('w',$list[0]['createdAt'])=='3') {
            $d=3;
        }elseif (date('w',$list[0]['createdAt'])=='4') {
            $d=4;
        }elseif (date('w',$list[0]['createdAt'])=='5') {
            $d=5;
        }elseif (date('w',$list[0]['createdAt'])=='6') {
            $d=6;
        }
        foreach ($list as $i) {
            $a=array($j,$d,$i['steps']);
            array_push($result,$a);
            $d=($d+1)%7;
            if(date('w',$i['createdAt'])=='6')
                $j++;
        }
        $r['step']=$result;
        return $r;

    }
    public function get_run($uid){
         $query = $this->db->query('SELECT createdAt,distance
FROM sport_record 
WHERE userId='.$uid.'
ORDER BY createdAt');
        $list=$query->result_array();
        $result=array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach ($list as $d) {
            for($i=1;$i<=12;$i++){
                if (date('m',$d['createdAt'])==''.$i) {
                    $result[$i]+=$d['distance'];
                    break;
                }
            }
        }
        return $result;
    }
    public function get_run_time($uid){
         $query = $this->db->query('SELECT sum(duration) as time
FROM sport_record 
WHERE userId='.$uid);
        return number_format($query->row_array()['time'],2);
    }
    public function get_run_distance($uid){
         $query = $this->db->query('SELECT sum(distance) as dis
FROM sport_record 
WHERE userId='.$uid);
        return number_format($query->row_array()['dis'],2);
    }
    public function get_avgrun_speed($uid){
        $d= $this->get_run_distance($uid);
        $t=$this->get_run_time($uid);
        if($t==0)
            return 0;
        return number_format($d/$t*60,2);
    }
    public function get_calories($uid){
        $c=$this->get_avgrun_speed($uid);
        return $c*1600;
    }
    public function get_avg_min($uid){
        $d= $this->get_run_distance($uid);
        $t=$this->get_run_time($uid);
        if($d==0)
            return 0;
        return number_format($t/$d*1000,2);
    }
    public function get_amount($uid){
        $query_all = $this->db->query('SELECT COUNT(*) as num FROM sport_record WHERE userId='.$uid);
        return $query_all->row_array()['num'];

    }
    public function add($data=null){
        $this->db->insert('sport_record',$data);
    }
    public function add_step($data=null){
        $this->db->insert('step_record',$data);
    }
    public function get_rank_run($uid=4,$size=3){
        $date1=now();
        $query = $this->db->query('SELECT S.userId,S.steps,user.userName,user.photoUri
FROM user,friendship LEFT OUTER JOIN (SELECT userId,steps from step_record WHERE userId='.$uid.' ORDER BY createdAt LIMIT 1) AS S
ON friendship.followUserId=S.userId
WHERE friendship.followUserId=user.userId or user.userId=friendship.userId 
ORDER BY steps 
LIMIT '.$size);
        return $query->result_array();
    }
    public function get_rank_step($uid,$size=3){
        $date1=now();
        $query = $this->db->query('SELECT user.userId,S.steps,user.userName,user.photoUri
FROM user,friendship LEFT OUTER JOIN (SELECT userId,steps from step_record WHERE userId='.$uid.' ORDER BY createdAt LIMIT 1) AS S
ON friendship.followUserId=S.userId
WHERE (friendship.followUserId=user.userId) and friendship.userId='.$uid.'
 ORDER BY steps 
LIMIT '.$size);
        $list= $query->result_array();
        $user=$this->get_day_step($uid);
        $result=array();
        $insert=false;
        foreach ($list as $l) {
            if($l['steps']==null){
                    $l['steps']=0; 
            }
            if ((!$insert)&&$l['steps']<=$user['steps']){
                array_push($result, $user);
                $insert=true; 
            }
            array_push($result, $l);
        }
        return $result;
    }
    public function get_day_step($uid){
        $query=$this->db->query('SELECT user.userId,S.steps,user.userName,user.photoUri
FROM user ,(SELECT userId,steps from step_record WHERE userId='.$uid. ' ORDER BY createdAt LIMIT 1) AS S
WHERE S.userId=user.userId and S.userId='.$uid.'
 ORDER BY steps');
        $user=$query->row_array();
        return $user;
    }
}