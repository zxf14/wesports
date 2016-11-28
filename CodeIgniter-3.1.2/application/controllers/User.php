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
        $data['users']=$this->user_m->get_user('1048043763@qq.com');
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
        $this->form_validation->set_rules('password', '用户名', 'required');
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
            $this->index();
        }
        else{
            $this->load->view('register');
        }
    }
    public function login(){
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
                redirect('activity/add');
            }
            else{
                show_error('用户名或密码错误!');
            }
        }
        else{
            $this->load->view('login');
        }
    }
    public function get_user($email){
        return $this->user_m->get_user($email);

    }
    public function email_check($email){
        if ($this->get_user($email)){
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
        elseif ($this->get_user($email)){
            echo '邮箱已注册,请重新填写';
        }
        else{
            echo "邮箱有效";
        }
    }

}