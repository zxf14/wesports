<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/12
 * Time: 下午2:54
 */
class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('activity_m');
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->library('form_validation');
    }
    public function index($type='all',$page_num=0){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        if ($type==='myjoin'){
            $page_size=3;
            $num=$this->activity_m->get_amount();
            $data['page_num']=$page_num;
            $data['page_amount']=ceil($num/$page_size);
            $data['activities']=$this->activity_m->get_mine_join($u_id,$page_num,$page_size);
            $data['head']='我的参与 - wesports';
            $data['title']=array("ACTIVITIES","参与到更多的活动中去吧");
            $data['page']='act';
            $data['url']=base_url('activity/index/myjoin/');
            // print_r($data);
            $this->load->view('act_hot',$data);
        }
        elseif ($type==='mycreate'){
            $page_size=3;
            $num=$this->activity_m->get_amount();
            $data['page_num']=$page_num;
            $data['page_amount']=ceil($num/$page_size);
            $data['activities']=$this->activity_m->get_mine_create($u_id,$page_num,$page_size);
            $data['head']='我创建的 - wesports';
            $data['title']=array("ACTIVITIES","参与到更多的活动中去吧");
            $data['page']='act';
            $data['url']=base_url('activity/index/mycreate/');
            // print_r($data);
            $this->load->view('act_hot',$data);
        }
        else{
            $page_size=3;
            $num=$this->activity_m->get_amount();
            $data['page_num']=$page_num;
            $data['page_amount']=ceil($num/$page_size);
            $data['activities']=$this->activity_m->get($page_num,$page_size);
            $data['head']='活动管理 - wesports';
            $data['title']=array("ACTIVITIES","参与到更多的活动中去吧");
            $data['page']='act';
            $data['url']=base_url('admin/index/all/');
            // print_r($data);
            $this->load->view('admin_act',$data);
        }
    }
//    测试数据
    public function add(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $this->form_validation->set_rules('title', '标题', 'required');
        $this->form_validation->set_rules('content', '内容', 'required');
        $this->form_validation->set_rules('start', '开始时间', 'required');
        $this->form_validation->set_rules('end', '结束时间', 'required');
//        $this->form_validation->set_rules('tel', '联系电话', 'required');
        if($_POST && $this->form_validation->run() === TRUE) {
            $data=$this->_form_data();
            $this->activity_m->add($data);
            redirect('activity/index');
        }
        else{
            $data['url']=base_url('activity/add');
            $data['head']='创建活动 - wesports';
            $data['title']=array("ACTIVITIES","创建新的活动");
            $data['page']='act';
            $this->load->view('act_new',$data);
        }
    }

    public function join(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $act_id=$this->input->post('act_id');
        $data=array(
            'createdAt'=>now(),
            'activityId'=>$act_id,
            'participatorId'=>$u_id
        );
        if($this->activity_m->join($data))
            echo "1";
        else
            echo "0";
    }
    public function cancel_join(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $act_id=$this->input->post('act_id');

        if($this->activity_m->cancel_join($act_id,$u_id))
            echo "1";
        else
            echo "0";
    }
    public function info($act=false){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        if(!$act){
            show_404();
        }
        $data['act_info']=$this->activity_m->get_info($act);
        $data['join']=$this->activity_m->is_join($act,$u_id);
        if($u_id===$data['act_info']['creatorId'])
            $data['edit_enable']=true;
        else
            $data['edit_enable']=false;
        $data['head']='活动详情 - wesports';
        $data['title']=array("ACTIVITIES","参与更多活动");
        $data['page']='act';
        $this->load->view('act_info',$data);
    }
    public function delete(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $aid=$this->input->post('aid');
        $result=$this->activity_m->delete($aid);
        if ($result){
            redirect(base_url('activity/index'));
        }
        else{
            echo '<script>alert("删除失败");</script>';
        }

    }
    public function edit(){
        $u_id=$this->session->userdata('userId');
        if(!$u_id){
            redirect(base_url('user/login'));
        }
        $aid=$this->input->post('aid');
        $this->form_validation->set_rules('title', '标题', 'required');
        $this->form_validation->set_rules('content', '内容', 'required');
        $this->form_validation->set_rules('start', '开始时间', 'required');
        $this->form_validation->set_rules('end', '结束时间', 'required');
//        $this->form_validation->set_rules('tel', '联系电话', 'required');
        if($_POST && $this->form_validation->run() === TRUE) {
            $data=$this->_form_data();
            $data['act_id']=$this->input->post('actId');
            $this->activity_m->update($data);
            redirect("activity/info/{$data['act_id']}");
        }
        else{
            $data['url']=base_url('activity/edit');
            $data['act']=$this->activity_m->get_info($aid);
            $data['head']='修改活动 - wesports';
            $data['title']=array("ACTIVITIES","修改活动信息");
            $data['page']='act';
            $this->load->view('act_new',$data);
        }
    }
    private function _form_data(){
        if ($this->input->post('online')[0]){
            $isOnline=1;
        }else
            $isOnline=0;
        if ($this->input->post('online')[1]){
            $isOffline=1;
        }else
            $isOffline=0;
        $data = array(
            'creatorId' =>$this->session->userdata('userId'),
            'createdAt' => now(),
            'title'=>$this->input->post('title'),
            'content'=>$this->input->post('content'),
            'location'=>$this->input->post('province',TRUE).';'.$this->input->post('city',TRUE),
            'isOnline'=>$isOnline,
            'isOffline'=>$isOffline,
            'startTime'=>substr($this->input->post('start'),0,10),
            'endTime'=>substr($this->input->post('end'),0,10),
            'sportType'=>$this->input->post('type'),
            'photoUri'=>$this->input->post('img',TRUE),
        );
        return $data;
    }
}