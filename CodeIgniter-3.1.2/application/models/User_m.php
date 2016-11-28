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
    public function get_user($email=FALSE){
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
    public function login($data){
        $user=$this->get_user($data['email']);

        if ($user && password_verify($data['password'],$user['password'])){
            $userdata = array(
                'userName'  => $user['userName'],
                'email'     => $user['email'],
                'userId'     => $user['userId'],
                'age'     => $user['age'],
                'gender'     => $user['gender'],
                'location'     => $user['location'],
                'level'     => $user['level'],
                'photoUri'     => $user['photoUri'],
                'phone'     => $user['phone'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($userdata);
            return true;
        }
        return false;
    }
}