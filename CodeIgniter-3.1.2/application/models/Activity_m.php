<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/12
 * Time: 下午3:09
 */
class Activity_m extends CI_Model{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('date');
    }
    public function get($page_num=1,$page_size=2,$condition='hot'){
        $offset=($page_num-1)*$page_size;
        if ($condition==='hot'){
            $query = $this->db->query('SELECT "activity".activityId,title, isOnline, isOffLine, startTime, sportType,amount,photoUri
FROM activity LEFT OUTER JOIN (SELECT activityId,count(*) as amount from activity_joiner GROUP BY activityId) AS act_count
ON activity.activityId=act_count.activityId
WHERE startTime>'.now().'
ORDER BY startTime,amount DESC 
LIMIT '.$page_size.' OFFSET '.$offset);
            }
        elseif ($condition==='online'){

        }
        elseif ($condition==='offline'){

        }
        elseif ($condition==='ride'){
            $query = $this->db->query('SELECT "activity".activityId,title, isOnline, isOffLine, startTime, sportType,amount,photoUri
FROM activity LEFT OUTER JOIN (SELECT activityId,count(*) as amount from activity_joiner GROUP BY activityId) AS act_count
ON activity.activityId=act_count.activityId
WHERE startTime>'.now().' and sportType=2
ORDER BY startTime,amount DESC 
LIMIT 10');
        }
        $act_list=$query->result_array();
        return $act_list;

    }
    public function get_amount(){
        $query_all = $this->db->query('SELECT COUNT(*) as num FROM activity WHERE startTime>'.now());
        return $query_all->row_array()['num'];

    }
    public function add($data=null){

        $this->db->insert('activity',$data);
    }
    public function join($data=null){
        return $this->db->insert('activity_joiner',$data);
    }
    public function get_info($aid){
        $query = $this->db->query('SELECT * from activity WHERE activityId='.$aid);
        return $query->row_array();
    }
    public function is_join($aid,$uid){
        $query = $this->db->query('SELECT * from activity_joiner WHERE activityId='.$aid.' and participatorId='.$uid);
        return $query->row_array()!==null;
    }
    public function cancel_join($aid,$uid){
        $this->db->where('activityId', $aid);
        $this->db->where('participatorId', $uid);
        return $this->db->delete('activity_joiner');
    }
    public function delete($aid){
        $this->db->where('activityId',$aid);
        return $this->db->delete('activity');
    }
    public function update($data){
        $this->db->set('title',$data['title']);
        $this->db->where('activityId',$data['act_id']);
        $this->db->update('activity');
    }
}