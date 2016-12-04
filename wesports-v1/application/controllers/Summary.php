<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/12
 * Time: 下午2:54
 */
class Summary extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('health_m');
        $this->load->helper('url');
        $this->load->helper('date');
    }
    public function index(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $data['steps']=$this->health_m->get($u_id,1,7,'steps');
        $data['page']='index';
        $data['distance']=$this->health_m->get_run_distance($u_id);
        $data['time']=$this->health_m->get_run_time($u_id);
        $data['calories']=$this->health_m->get_calories($u_id);
        $data['speed']=$this->health_m->get_avgrun_speed($u_id);
        $data['minute']=$this->health_m->get_avg_min($u_id);
        $data['rank']=$this->health_m->get_rank_step($u_id);
        $this->load->view('home',$data);
        
    }
    public function add(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        for ($i=0; $i<=50; $i++)
        {
            $data = $this->_rand_data(7);
            $data['createdAt']=strtotime("-{$i} days");
            $this->health_m->add_step($data);
        }
        print_r($data);
    }
    private function _rand_data($u_id){
        return array(
            'userId' =>$u_id,
            'steps'=>rand(40,23000)
        );
    }
    public function json_step($month=1){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        echo json_encode($this->health_m->get_step($u_id,$month));  
    }
    public function json_run(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        echo json_encode($this->health_m->get_run($u_id));  
    }
    public function test(){
        $i=date('d',now());
        echo unix_to_human(strtotime("-{$i} days"));
    }

}