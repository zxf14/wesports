<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/7
 * Time: 下午7:59
 */
class User_m extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_user($user_id=FALSE){
        if($user_id===FALSE){
            $query=$this->db->get('user');
            return $query->result_array();
        }
        $query=$this->db->get_where('user',array('userId'=>$user_id));
        return $query->row_array();
    }
    public function get_user_email($email=FALSE){
        if($email===FALSE){
            $query=$this->db->get('user');
            return $query->result_array();
        }
        $query=$this->db->get_where('user',array('email'=>$email));
        return $query->row_array();
    }
    public function add_user($data)
    {
        return $this->db->insert('user',$data);
    }
    public function mod_user($data)
    {
        $this->db->where('userId', 4);
        return $this->db->update('user', $data);
    }
    public function login($data){
        $user=$this->get_user_email($data['email']);

        if ($user && password_verify($data['password'],$user['password'])){
            $userdata = array(
                'email'     => $user['email'],
                'userId'     => $user['userId']
            );
            $this->session->set_userdata($userdata);
            return true;
        }
        return false;
    }
}