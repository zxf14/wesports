<?php
/**
 * Created by PhpStorm.
 * User: zhouxiaofan
 * Date: 2016/11/5
 * Time: 下午11:13
 */
class News_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_news($name=FALSE){
        if($name===false){
            $query=$this->db->get('COMPANY');
            return $query->result_array();
        }
        $query=$this->db->get_where('COMPANY',array('NAME'=>$name));
        return $query->row_array();
    }
    public function set_news(){
        $this->load->helper('url');
        $data=array(
            'NAME'=>$this->input->post('name'),
            'ADDRESS'=>$this->input->post('address'),
            'AGE'=>15,
            'SALARY'=>2000.0
        );
        return $this->db->insert('COMPANY',$data);
    }
}