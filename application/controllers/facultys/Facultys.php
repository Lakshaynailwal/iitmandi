<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH."libraries/lib/config_paytm.php");
require_once(APPPATH."libraries/lib/encdec_paytm.php");

class Facultys extends CI_Controller {
    public function __construct() {
        @parent::__construct();
        $this->load->library('pagination');
        $this->load->library('image_lib');
        $this->load->helper('cookie');
        $this->load->library('email');
        date_default_timezone_set('Asia/Calcutta');
        session_start();
    }

    public function index() {
		$data['page_title'] = "Faculty Login";
		$data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
		$this->load->view('faculty/home',$data);
	}

    public function login() {
		if($this->session->userdata('user_id') != ''){
            redirect(base_url('faculty/dashboard'));
		}
		if($this->input->post()) {
			$sql="`email` ='".$this->input->post('email')."' AND (`position`=1)";
			$result=$this->common_model->get_data(TEAM,$sql);
			if(md5($this->input->post('password')) == $result[0]['password']) {
			$this->session->set_userdata('user_id',$result[0]['id']);
			redirect(base_url()."faculty/dashboard");
			} else {
				$this->utilitylib->setMsg('<i class="fa fa-exclamation-circle" aria-hidden="true"></i> Wrong email or password!','ERROR');
				redirect(base_url()."faculty/");
			}
		}
		$data['page_title'] = "Login";
		$data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
		$this->load->view('faculty/home',$data);
    }

    public function dashboard() {
		if($this->session->userdata('user_id') != ''){
			$data['page_title'] = "Dashboard";
			$data['header']=$this->load->view('includes/header','',true);
			$data['footer']=$this->load->view('includes/footer','',true);
			$this->load->view('faculty/dashboard',$data);
		} else {
			redirect(base_url()."faculty/");
		}
    }

	public function research() {
		if($this->session->userdata('user_id') != ''){
			$data['page_title'] = "Research";
			$data['header']=$this->load->view('includes/header','',true);
			$data['footer']=$this->load->view('includes/footer','',true);
			$this->load->view('faculty/research',$data);
		} else {
			redirect(base_url()."faculty/");
		}
    }

	public function publication() {
		if($this->session->userdata('user_id') != ''){
			$data['page_title'] = "Publication";
			$data['header']=$this->load->view('includes/header','',true);
			$data['footer']=$this->load->view('includes/footer','',true);
			$this->load->view('faculty/publication',$data);
		} else {
			redirect(base_url()."faculty/");
		}
    }

	public function projects() {
		if($this->session->userdata('user_id') != ''){
			$data['page_title'] = "Projects";
			$data['header']=$this->load->view('includes/header','',true);
			$data['footer']=$this->load->view('includes/footer','',true);
			$this->load->view('faculty/projects',$data);
		} else {
			redirect(base_url()."faculty/");
		}
    }

	public function lab_members() {
		if($this->session->userdata('user_id') != ''){
			$data['page_title'] = "Lab Members";
			$data['header']=$this->load->view('includes/header','',true);
			$data['footer']=$this->load->view('includes/footer','',true);
			$this->load->view('faculty/lab_members',$data);
		} else {
			redirect(base_url()."faculty/");
		}
    }

	public function current_opening() {
		if($this->session->userdata('user_id') != ''){
			$data['page_title'] = "Current Opening";
			$data['header']=$this->load->view('includes/header','',true);
			$data['footer']=$this->load->view('includes/footer','',true);
			$this->load->view('faculty/current_opening',$data);
		} else {
			redirect(base_url()."faculty/");
		}
    }

	public function miscellaneous() {
		if($this->session->userdata('user_id') != ''){
			$data['page_title'] = "Miscellaneous";
			$data['header']=$this->load->view('includes/header','',true);
			$data['footer']=$this->load->view('includes/footer','',true);
			$this->load->view('faculty/miscellaneous',$data);
		} else {
			redirect(base_url()."faculty/");
		}
    }
}