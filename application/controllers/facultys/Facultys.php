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
			if(base64_encode($this->input->post('password')) == $result[0]['password']) {
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
			$data['education']=$this->common_model->get_data_array(EDUCATION,'','','','','','',EDUCATION.".id DESC",array('user_id'=>$this->session->userdata('user_id'),'status'=>1,'is_delete'=>1));
			$data['experience']=$this->common_model->get_data_array(EXPERIENCE,'','','','','','',EXPERIENCE.".id DESC",array('user_id'=>$this->session->userdata('user_id'),'status'=>1,'is_delete'=>1));
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

	public function save_aboutme() {
		//print_r($this->input->post()); die();
		if($this->input->post()) {
			$insArr=array();
			$insArr['aboutme']=$this->input->post('aboutme');
			$id = $this->input->post('uid');
			if(!empty($id)){
				$this->common_model->tbl_update(TEAM,array('id'=>$id),$insArr);
			}
			if($_FILES['team_image']['name'] != '') {
				$data['result']=$this->common_model->get_data(TEAM,array('id'=>$id));
				if(@$data['result'][0]['team_image']) {	
					unlink('./uploads/our_team/'.$data['result'][0]['team_image']);	
					unlink('./uploads/our_team/thumb/'.$data['result'][0]['team_image']);	
				}
				$config1=array();
				$config1['upload_path']='./uploads/our_team/thumb';
				$config1['upload_path']='./uploads/our_team/';
				$random_number = substr(number_format(time() * rand(),0,'',''),0,6);
				$config1['file_name']=time().$random_number;
				$config1['allowed_types']='jpg|JPG|jpeg|JPEG|png|PNG|gif|GIF|mp4|MPEG-4';
				/*$config1['max_width'] = '2000';
				$config1['max_height'] = '1125';*/
				$config1['overwrite']=TRUE;
				$this->load->library('upload',$config1);
				$this->upload->initialize($config1);
				if(!$this->upload->do_upload('team_image')){
					$err_upload=$this->upload->display_errors();
					$this->utilitylib->setMsg($err_upload,'ERROR');
					print_r($err_upload);
					redirect(base_url('admin/ourteam/add_team'));
				} else {
					$suc_upload2=array();
					$suc_upload2=$this->upload->data();
					$config1['image_library']='gd2';
					$config1['source_image']='uploads/our_team/'.$suc_upload2['file_name'];
					$config1['new_image']='uploads/our_team/thumb/'.$suc_upload2['file_name'];
					$config1['maintain_ratio']=TRUE;
					$config1['width']=150;
					$config1['height']=97;
					$this->image_lib->initialize($config1);
					$this->image_lib->resize();
					$insArr['team_image']=$suc_upload2['file_name'];
					if(!empty($id)) {
						$this->common_model->tbl_update(TEAM,array('id'=>$id),$insArr);
						$banner_id=$id;
					} else {
						$banner_id=$this->common_model->tbl_insert(TEAM,$insArr);
					}
					$this->common_model->tbl_update(TEAM,array('id'=>$banner_id),$insArr);
				}
			}
			if(!empty($id)) {
				echo "Sucessfully Updated";
			} else {
				echo "Something went wrong. Please try again later!";
			}
		}
	}

	public function save_educate() {
		$record_id = $this->input->post('acaid');
		if($record_id != '') {
			$insArr=array();
			$insArr['user_id'] = $this->input->post('uid');
			$insArr['degree']=$this->input->post('degree');
			$insArr['university']=$this->input->post('university');
			$insArr['year']=$this->input->post('year');
			$insArr['status']=$this->input->post('status');
			$this->common_model->tbl_update(EDUCATION,array('id'=>$record_id),$insArr);
			echo "Sucessfully Updated";
		} else {
			$insArr=array();
			$insArr['user_id'] = $this->input->post('uid');
			$insArr['degree']=$this->input->post('degree');
			$insArr['university']=$this->input->post('university');
			$insArr['year']=$this->input->post('year');
			$insArr['status']=$this->input->post('status');
			$banner_record_id=$this->common_model->tbl_insert(EDUCATION,$insArr);
			echo "Sucessfully Added";
		}
	}

	public function edit_educate() {
		$id = $this->input->post('id');
		$edication=$this->common_model->get_data_row(EDUCATION,array('id'=>$id));
		echo json_encode($edication);
	}

	public function dlt_educate() {
		$id = $this->input->post('id');
		$edication=$this->common_model->get_data(EDUCATION,array('id'=>$id));
		if($edication[0]['is_delete']==1) {
			$status = array('is_delete'=>2);
		} else {
			$status = array('is_delete'=>1);
		}
		$this->common_model->tbl_update(EDUCATION,array('id'=>$id),$status);
	}

	public function save_experience() {
		$record_id = $this->input->post('expid');
		if($record_id != '') {
			$insArr=array();
			$insArr['user_id'] = $this->input->post('uid');
			$insArr['organization']=$this->input->post('organization');
			$insArr['position']=$this->input->post('position');
			$insArr['year']=$this->input->post('exp_year');
			$insArr['status']=$this->input->post('status');
			$this->common_model->tbl_update(EXPERIENCE,array('id'=>$record_id),$insArr);
			echo "Sucessfully Updated";
		} else {
			$insArr=array();
			$insArr['user_id'] = $this->input->post('uid');
			$insArr['organization']=$this->input->post('organization');
			$insArr['position']=$this->input->post('position');
			$insArr['year']=$this->input->post('exp_year');
			$insArr['status']=$this->input->post('status');
			$banner_record_id=$this->common_model->tbl_insert(EXPERIENCE,$insArr);
			echo "Sucessfully Added";
		}
	}

	public function edit_experience() {
		$id = $this->input->post('id');
		$experience=$this->common_model->get_data_row(EXPERIENCE,array('id'=>$id));
		echo json_encode($experience);
	}

	public function dlt_experience() {
		$id = $this->input->post('id');
		$experience=$this->common_model->get_data(EXPERIENCE,array('id'=>$id));
		if($experience[0]['is_delete']==1) {
			$status = array('is_delete'=>2);
		} else {
			$status = array('is_delete'=>1);
		}
		$this->common_model->tbl_update(EXPERIENCE,array('id'=>$id),$status);
	}

	public function logout() {
        $this->session->unset_userdata('uid');
        session_unset();  
        redirect(base_url()."faculty/");
    }
}