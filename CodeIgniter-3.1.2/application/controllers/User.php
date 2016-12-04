<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/7
 * Time: 下午7:47
 */
class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    public function index(){
        // $data['users']=$this->user_m->get_user('1048043763@qq.com');
        if (empty($data['users'])){
            show_404();
        }
        print_r ($data['users']);
    }
    public function register(){
        $this->load->helper('date');
        $this->form_validation->set_rules('email', '邮箱', 'required|callback_email_check');
        $this->form_validation->set_rules('password', '密码', 'required');
        $this->form_validation->set_rules('confirmPassword', '确认密码', 'required');
        if($_POST && $this->form_validation->run() === TRUE) {
            $password = $this->input->post('password',true);
            $data = array(
                'userName' => $this->input->post('username',TRUE),
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'email' => $this->input->post('email',TRUE),
                'age' => $this->input->post('age',TRUE),
                'createdAt' => now('Asia/Shanghai'),
                'gender'=>$this->input->post('inputGender',TRUE),
                'profile'=>$this->input->post('profile',TRUE),
                'photoUri'=>$this->input->post('inputUserImg',TRUE),
                'location'=>$this->input->post('province',TRUE).';'.$this->input->post('city',TRUE),
            );
            if($this->user_m->add_user($data)){
                $newdata=array('email'=>$data['email'],'password'=>$password);
                $this->user_m->login($newdata);
            }
            redirect();
        }
        else{
            $this->load->view('register');
        }
    }
    public function login(){
        $uid=$this->session->userdata('userId');
        if($uid){
            $this->logout();
            redirect(base_url('user/login'));
        }
        $this->load->helper('date');
        $this->load->helper('form');
        $this->form_validation->set_rules('email', '邮箱', 'required');
        $this->form_validation->set_rules('password', '密码', 'required');
        if($_POST && $this->form_validation->run() === TRUE) {
            $data=array(
                'password' => $this->input->post('password',TRUE),
                'email' => $this->input->post('email',TRUE)
            );
            if ($this->user_m->login($data)){
                $uid=$this->session->userdata('userId');
                if($uid==4){
                    redirect('admin/index');
                }
                redirect(base_url('summary/index'));
            }
            else{
                echo '<script>alert("登录失败");</script>';
                $this->load->view('login');
            }
        }
        else{
            $this->load->view('login');
        }
    }
    public function logout ()
    {
        $this->session->sess_destroy();
        
        $this->load->helper('cookie');
        delete_cookie('uid');
        delete_cookie('email');
        redirect('user/login');
    }
    public function edit(){
        $uid=$this->session->userdata('userId');
        if(!$uid){
            redirect(base_url('user/login'));
        }
        $this->form_validation->set_rules('username', '用户名', 'required');
        if($_POST && $this->form_validation->run() === TRUE) {
            $data = array(
                'userId' => $uid,
                'userName' => $this->input->post('username',TRUE),
                'age' => $this->input->post('age',TRUE),
                'gender'=>$this->input->post('inputGender',TRUE),
                'profile'=>$this->input->post('profile',TRUE),
                'photoUri'=>$this->input->post('inputUserImg',TRUE),
                'location'=>$this->input->post('province',TRUE).';'.$this->input->post('city',TRUE),
            );
            if($this->user_m->mod_user($data)){
                redirect(base_url('user/edit'));
            }
            else
                echo '<script>alert("用户名不能为空");</script>';

        }
        else{
            $data['user']=$this->user_m->get_user($uid);
            $data['url']=base_url('user/edit');
            $data['head']='修改账号信息 - wesports';
            $data['title']=array("Account","修改账号信息");
            $data['page']='user';
            $this->load->view('account_info',$data);
        }
    }
    public function get_user($email){
        return $this->user_m->get_user_email($email);

    }
    public function email_check($email){
        if ($this->user_m->get_user_email($email)){
            echo '<script>alert("email invalid");</script>';
            return false;
        }
        else{
            return true;
        }
    }
    public function test_email(){
        $email=$this->input->post('email',TRUE);
        if ($email===''){
            echo '请填写邮箱';
        }
        elseif ($this->user_m->get_user_email($email)){
            echo '邮箱已注册,请重新填写';
        }
        else{
            echo "邮箱有效";
        }
    }

}