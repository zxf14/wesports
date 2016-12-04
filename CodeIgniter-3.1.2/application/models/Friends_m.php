<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/27
 * Time: 下午10:19
 */
class Friends_m extends CI_Model{
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('date');
    }
    public function get_following_num($uid){
        $query_all = $this->db->query('SELECT COUNT(*) as num FROM friendship WHERE userId='.$uid);
        return $query_all->row_array()['num'];
    }
    public function get_following($uid){
        $query_all = $this->db->query('SELECT friendship.followUserId,userName,age,gender,location,email,profile,photoUri,level FROM friendship,`user` WHERE friendship.userId='.$uid.' and friendship.followUserId=`user`.userId');
        return $query_all->result_array();

    }
    public function follow($uid,$fid){
        $data=array(
            'userId'=>$uid,
            'followUserId'=>$fid
            );
        return $this->db->insert('friendship',$data);
    }
    public function follow_batch($data){
        return $this->db->insert_batch('friendship',$data);
    }
    public function cancel_follow($uid,$fid){
        $this->db->where('userId', $uid);
        $this->db->where('followUserId', $fid);
        return $this->db->delete('friendship');
    }
    public function is_follow($uid,$fid){
        $query = $this->db->query('SELECT * from friendship WHERE userId='.$uid.' and followUserId='.$fid);
        return $query->row_array()!==null;
    }
    public function get_followers($uid){
 $query_all = $this->db->query('SELECT friendship.userId as followUserId,userName,age,gender,location,email,profile,photoUri,level FROM friendship,`user` WHERE friendship.followUserId='.$uid.' and friendship.userId=`user`.userId');
        return $query_all->result_array();
    }
    public function get_followers_num($uid){
        $query_all = $this->db->query('SELECT COUNT(*) as num FROM friendship WHERE followUserId='.$uid);
        return $query_all->row_array()['num'];
    }
    public function get_posts($uid){

    }
}