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
        // if($this->session->userdata('uid') == ''){
        //     redirect(base_url().'student/');
        // }
    }

    public function index() {
		$data['page_title'] = "Student Login";
		$data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
		$this->load->view('student/home',$data);
	}

    public function login() {
        if($this->session->userdata('user_id') != ''){
            redirect(base_url('student/dashboard'));
		}
		if($this->input->post()) {
			$sql="`email` ='".$this->input->post('email')."' AND (`position`=2)";
			$result=$this->common_model->get_data(TEAM,$sql);
			if(md5($this->input->post('password')) == $result[0]['password']) {
			$this->session->set_userdata('user_id',$result[0]['id']);
			redirect(base_url()."student/dashboard");
			} else {
				$this->utilitylib->setMsg('<i class="fa fa-exclamation-circle" aria-hidden="true"></i> Wrong email or password!','ERROR');
				redirect(base_url()."student/");
			}
		}
		$data['page_title'] = "Login";
		$data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
		$this->load->view('student/home',$data);
    }

    public function dashboard() {
		if($this->session->userdata('user_id') != ''){
			$data['page_title'] = "Dashboard";
			$data['header']=$this->load->view('includes/header','',true);
			$data['footer']=$this->load->view('includes/footer','',true);
			$this->load->view('student/dashboard',$data);
		} else {
			redirect(base_url()."student/");
		}
    }

    public function save_aboutme() {
		//print_r($this->input->post()); die();
		if($this->input->post()) {
			$insArr=array();
			$insArr['fname']=$this->input->post('fname');
			$insArr['email']=$this->input->post('email');
			$insArr['enrollno']=$this->input->post('enrollno');
			$insArr['admissionyear']=$this->input->post('admissionyear');
			$insArr['research_interest']=$this->input->post('research_interest');
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
		//print_r($this->input->post()); die();
		if($this->input->post()) {
			$insArr=array();
			$insArr['user_id'] = $this->input->post('uid');
			$insArr['degree']=$this->input->post('degree');
			$insArr['university']=$this->input->post('university');
			$insArr['year']=$this->input->post('year');
			$insArr['status']=$this->input->post('status');
			if(!empty($record_id)) {
				$this->common_model->tbl_update(EDUCATION,array('id'=>$record_id),$insArr);
			} else {
				$banner_record_id=$this->common_model->tbl_insert(EDUCATION,$insArr);
			}
			if(!empty($record_id)) {
				echo "Sucessfully Updated";
			} else {
				echo "Something went wrong. Please try again later!";
			}
		}
	}

	public function save_experience() {
		//print_r($this->input->post()); die();
		if($this->input->post()) {
			$insArr=array();
			$insArr['user_id'] = $this->input->post('uid');
			$insArr['position']=$this->input->post('position');
			$insArr['year']=$this->input->post('year');
			$insArr['status']=$this->input->post('status');
			if(!empty($record_id)) {
				$this->common_model->tbl_update(EXPERIENCE,array('id'=>$record_id),$insArr);
			} else {
				$banner_record_id=$this->common_model->tbl_insert(EXPERIENCE,$insArr);
			}
			if(!empty($record_id)) {
				echo "Sucessfully Updated";
			} else {
				echo "Something went wrong. Please try again later!";
			}
		}
	}

	public function save_publication() {
		//print_r($this->input->post()); die();
		if($this->input->post()) {
			$insArr=array();
			$insArr['user_id'] = $this->input->post('uid');
			$insArr['publication_type']=$this->input->post('publication_type');
			$insArr['attachment']=$this->input->post('attachment');
			$insArr['author_name']=$this->input->post('author_name');
			$insArr['paper_title'] = $this->input->post('paper_title');
			$insArr['journal_name']=$this->input->post('journal_name');
			$insArr['conference_name']=$this->input->post('conference_name');
			$insArr['book_name']=$this->input->post('book_name');
			$insArr['publish_date']=$this->input->post('publish_date');
			$insArr['patient_number']=$this->input->post('patient_number');
			$insArr['publisher']=$this->input->post('publisher');
			$insArr['location']=$this->input->post('location');
			$insArr['external_Link']=$this->input->post('external_Link');
			$insArr['editors']=$this->input->post('editors');
			$insArr['page_number']=$this->input->post('page_number');
			$insArr['highlight']=$this->input->post('highlight');
			$insArr['short_summery']=$this->input->post('short_summery');
			$insArr['key_points']=$this->input->post('key_points');
			$insArr['status']=$this->input->post('status');
			if(!empty($record_id)) {
				$this->common_model->tbl_update(PUBLICATION,array('id'=>$record_id),$insArr);
			} else {
				$banner_record_id=$this->common_model->tbl_insert(PUBLICATION,$insArr);
			}
			if(!empty($record_id)) {
				echo "Sucessfully Updated";
			} else {
				echo "Something went wrong. Please try again later!";
			}
		}
	}

    public function logout() {
        $this->session->unset_userdata('uid');
        session_unset();  
        redirect(base_url()."student/");
    }
}