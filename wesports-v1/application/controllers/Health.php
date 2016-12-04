<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/12
 * Time: 下午2:54
 */
class Health extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('health_m');
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->library('form_validation');
    }
    public function index($type='sports',$page_num=1){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        if ($type==='health'){
            $this->load->view('health');
        }
        else{
            $page_size=10;
            $num=$this->health_m->get_amount($u_id);
            $data['page_amount']=ceil($num/$page_size);
            if($page_num>$data['page_amount'])
                $data['page_num']=$data['page_amount'];
            else
                $data['page_num']=$page_num;
            $data['sports']=$this->health_m->get($u_id,$data['page_num'],$page_size);
            $data['head']='运动记录 - wesports';
            $data['title']=array("SPORTS","看看我的运动情况");
            $data['page']='health';
            $data['url']=base_url('health/index/sports/');
            $this->load->view('sports_record',$data);
        }
    }
    public function add(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        for ($i=0; $i<=100; $i++)
        {
            $data = $this->_rand_data(7);
            $data['createdAt']=strtotime("-{$i} days");
            $this->health_m->add ($data);
        }
        print_r($data);
    }
    private function _rand_data($u_id){
        $num=rand(1, 50);
        $distance=rand(10,50)/4;
        return array(
            'userId' =>$u_id,
            'distance'=>$distance,
            'duration'=>$distance*rand(11,13)/3,
            'type'=>rand(1,2)
        );
    }
    public function json_data($page_num=1,$page_size=10){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $num=$this->health_m->get_amount($u_id);
        $amount=ceil($num/$page_size);
        if($page_num>$amount)
            $page_num=$amount;
        echo json_encode($this->health_m->get_speed($u_id,$page_num,$page_size));
        
    }
    

}