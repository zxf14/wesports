<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/27
 * Time: 下午10:12
 */
class Friends extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('friends_m');
        $this->load->helper('url');
    }
    public function moment(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $data['moments']=$this->friends_m->get_posts($u_id);
        $this->load->view('moment');
    }
    public function following(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $data['following']=$this->friends_m->get_following($u_id);
        print_r($data['following']);
        $data['head']='我的关注 - wesports';
        $data['title']=array("Friends","关注更多的好友吧");
        $data['page']='moment';
        $this->load->view('following',$data);
    }
    public function followers(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $data['following']=$this->friends_m->get_followers($u_id);
        print_r($data['following']);
        $data['head']='我的关注 - wesports';
        $data['title']=array("Friends","关注更多的好友吧");
        $data['page']='moment';
        $this->load->view('following',$data);
    }
    public function follow(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $f_id=$this->input->post('f_id');
        echo $this->friends_m->follow($u_id,$f_id);
    }
    public function cancel_follow(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $f_id=$this->input->post('f_id');
        echo $this->friends_m->cancel_follow($u_id,$f_id);
    }
    public function follow_test(){
        $data=array();
        for ($i=1;$i<4;$i++){
            $arr=array(
                'userId'=>$i,
                'followUserId'=>$i+2
            );
            array_push($data,$arr);
        }
//        print_r($data);
        $this->friends_m->follow_batch($data);
    }
}