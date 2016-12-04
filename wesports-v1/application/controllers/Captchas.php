<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/7
 * Time: 上午10:32
 */
class Captchas extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $params = array('width' => 100, 'height' => 50,'codeNum'=>4);
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        $this->load->library('captcha',$params);
        $this->load->library('session');
    }
    public function getcode(){
        $code = $this->captcha->getCaptcha();
        $this->session->set_userdata('code', $code);
        $this->captcha->showImg();

    }
    public function get_code2(){
        $img_src=site_url().'/captchas/getcode';
        $data=array('title'=>"captcha",'img_src'=>$img_src);
        $this->load->view('templates/header',$data);
        $this->load->view('templates/captchaImg',$data);
        $this->load->view('templates/footer');

    }
}