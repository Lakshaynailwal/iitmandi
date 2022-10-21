<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH."libraries/lib/config_paytm.php");
require_once(APPPATH."libraries/lib/encdec_paytm.php");

class Student extends CI_Controller {
    public function __construct() {
        @parent::__construct();
        $this->load->library('pagination');
        $this->load->library('image_lib');
        $this->load->helper('cookie');
        $this->load->library('email');
        date_default_timezone_set('Asia/Calcutta');
        session_start();
        if($this->session->userdata('uid') == ''){
            redirect(base_url().'student/');
        }
    }

    public function index() {
		$data['page_title'] = "Student Login";
		$data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
		$this->load->view('student/home',$data);
	}

    public function login() {
        if($this->session->userdata('uid') == '-1'){
            redirect(base_url('student/dashboard'));
         }
         if($this->input->post()) {
             $sql="`email` ='".$this->input->post('email')."' AND (`user_type`=1)";
             $result=$this->common_model->get_data(ADMIN,$sql);
             if(md5($this->input->post('password')) == $result[0]['password']) {
                 $this->session->set_userdata('uid',$result[0]['user_id']);
                 redirect(base_url()."student/dashboard");
             } else {
                 $this->utilitylib->setMsg('<i class="fa fa-exclamation-circle" aria-hidden="true"></i> Wrong email or password!','ERROR');
                 redirect(base_url()."student/");
             }
         }
         $data['page_title'] = "Login";
         $data['logo']=$this->common_model->get_data_array(SETTINGS,array('id'=>1),'','','','','','');
         $data['header_scripts'] = $this->load->view('admin/includes/admin_header_scripts','',true);
         $data['footer_scripts'] = $this->load->view('admin/includes/admin_footer_scripts','',true);
         $this->load->view('admin/login',$data);
    }

    public function logout() {
        $this->session->unset_userdata('uid');
        session_unset();  
        redirect(base_url()."admin");
    }
}