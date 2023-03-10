<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH."libraries/lib/config_paytm.php");
require_once(APPPATH."libraries/lib/encdec_paytm.php");

class Home extends CI_Controller {
    public function __construct(){
        @parent::__construct();
        $this->load->library('pagination');
        $this->load->library('image_lib');
        $this->load->helper('cookie');
        $this->load->library('email');
        date_default_timezone_set('Asia/Calcutta');
    }

    public function index() { 
        $data['banner'] = $this->common_model->get_data_array(BANNER,array('status' =>1,'is_delete' =>1),'','','','','',BANNER.".id ASC");
        $data['home_about'] = $this->common_model->get_data(HOMEABOUT,array('id'=>1));
        $data['home_message']=$this->common_model->get_data(HOMEMESSAGE,array('id'=>1));
        $data['news']=$this->common_model->get_data_array(STORAGES,array('status' =>1,'is_delete' =>1),'','','','','',STORAGES.".add_date DESC",'','','');
        $data['events']=$this->common_model->get_data_array(EVENTS,array('status' =>1,'is_delete' =>1),'','','','','',EVENTS.".event_date DESC",'','','');
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Home';
        $this->load->view('home',$data);
    }

    public function login() { 
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Login Page';
        $this->load->view('login',$data);
    }

    public function payment(){
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $this->load->view('payment',$data);
    }

    public function contactus() {
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title'] = "Contact Us";
        $this->load->view('contact',$data);
    }

    public function contactviamail(){
        $this->load->library('phpmailer_lib');
        $mail = $this->phpmailer_lib->load();
        $to = $this->input->post('email');
        $toname = $this->input->post('name');
        $mail->setFrom($to,$toname);
        $mail->addAddress('mlzsmaheshtala@sainischools.net', 'Saini School Maheshtala');
        $mail->Subject = 'Contact Us Email';
        $mail->isHTML(true);
        $mailContent = '<strong>Dear Admin,</strong><br><p>'.$this->input->post('name').' want to contact with you.<br><strong>Email</strong>: '.$this->input->post('email').'<br><strong>Phone Number</strong>: '.$this->input->post('phone').'<br><strong>Message</strong>:<br> '.nl2br($this->input->post('message')).'</p>';
        $mail->Body = $mailContent;
        echo $mail->send();
    }

    public function committees() { 
        $data['committees']=$this->common_model->get_data_array(COMMITTEES,'','','','','','','',array('status' =>1,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='House & Committees';
        $this->load->view('committees',$data);
    }

    public function research() { 
        //$data['funding_agency']=$this->common_model->get_data_array(PROJECT,'','','','','','funding_agency','',array('is_delete' =>1));
        //$data['starting_year']=$this->common_model->get_data_array(PROJECT,'','','','','','','starting_year',array('is_delete' =>1));
        $data['team']=$this->common_model->get_data_array(TEAM,'','','','','','','',array('position'=>[1,2],'status' =>1,'is_delete' =>1));
        $data['research']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>1,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Research';
        $this->load->view('research',$data);
    }

    public function consultancy() { 
        //$data['funding_agency']=$this->common_model->get_data_array(PROJECT,'','','','','','funding_agency','',array('is_delete' =>1));
        //$data['starting_year']=$this->common_model->get_data_array(PROJECT,'','','','','','','starting_year',array('is_delete' =>1));
        $data['team']=$this->common_model->get_data_array(TEAM,'','','','','','','',array('position'=>[1,2],'status' =>1,'is_delete' =>1));
        $data['consultancy']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>2,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Consultancy';
        $this->load->view('consultancy',$data);
    }

    public function filterByFundingAgency() { 
        $fa_id = $this->input->post('fa_id');
        $pt_id = $this->input->post('pt_id');
        $filter_data = $this->common_model->get_data_array(PROJECT,array('funding_agency' => $fa_id, 'project_type' =>$pt_id, 'is_delete' =>1),'','','','','','');
        if(!empty($filter_data)) {
            $html='<tr>';
            if(!empty($filter_data)) {
                $i=1;
                foreach($filter_data as $row){
                    $html .='<td>'.$i.'</td><td>'.$row['project_title'].'</td><td>'.$row['status'].'</td><td><button type="button" class="btn btn-primary myLargeModalLabel" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="project_details('.$row['id'].')">View More</button></td></tr>';
                $i++;}
            }
        } else {
            $html='<p>No Data found for the current selection.</p>';	
        }
        echo $html;
    }

    public function filterByStartingYear() { 
        $sy_id = $this->input->post('sy_id');
        $pt_id = $this->input->post('pt_id');
        $filter_data = $this->common_model->get_data_array(PROJECT,array('starting_year' => $sy_id, 'project_type' =>$pt_id, 'is_delete' =>1),'','','','','','');
        if(!empty($filter_data)) {
            $html='<tr>';
            if(!empty($filter_data)) {
                $i=1;
                foreach($filter_data as $row){
                    $html .='<td>'.$i.'</td><td>'.$row['project_title'].'</td><td>'.$row['status'].'</td><td><button type="button" class="btn btn-primary myLargeModalLabel" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="project_details('.$row['id'].')">View More</button></td></tr>';
                $i++;}
            }
        } else {
            $html='<p>No Data found for the current selection.</p>';	
        }
        echo $html;
    }

    public function filterByfacultyMember() { 
        $fm_id = $this->input->post('fm_id');
        $pt_id = $this->input->post('pt_id');
        $filter_data = $this->common_model->get_data_array(PROJECT,array('project_incharge' => $fm_id, 'project_type' =>$pt_id, 'is_delete' =>1),'','','','','','');
        if(!empty($filter_data)) {
            $html='<tr>';
            if(!empty($filter_data)) {
                $i=1;
                foreach($filter_data as $row){
                    $html .='<td>'.$i.'</td><td>'.$row['project_title'].'</td><td>'.$row['status'].'</td><td><button type="button" class="btn btn-primary myLargeModalLabel" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="project_details('.$row['id'].')">View More</button></td></tr>';
                $i++;}
            }
        } else {
            $html='<p>No Data found for the current selection.</p>';	
        }
        echo $html;
    }

    public function filterBystatus() { 
        $st_id = $this->input->post('st_id');
        $pt_id = $this->input->post('pt_id');
        $filter_data = $this->common_model->get_data_array(PROJECT,array('status' => $st_id, 'project_type' =>$pt_id, 'is_delete' =>1),'','','','','','');
        if(!empty($filter_data)) {
            $html='<tr>';
            if(!empty($filter_data)) {
                $i=1;
                foreach($filter_data as $row){
                    $html .='<td>'.$i.'</td><td>'.$row['project_title'].'</td><td>'.$row['status'].'</td><td><button type="button" class="btn btn-primary myLargeModalLabel" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="project_details('.$row['id'].')">View More</button></td></tr>';
                $i++;}
            }
        } else {
            $html='<p>No Data found for the current selection.</p>';	
        }
        echo $html;
    }

    public function project_details() { 
        $p_id = $this->input->post('p_id');
        $pt_id = $this->input->post('pt_id');
        //$project_data = $this->common_model->get_data_array(PROJECT,array('id' => $p_id, 'project_type' =>$pt_id, 'is_delete' =>1),'','','','','','');
        $project_data = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.fname FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.project_incharge WHERE iitmandi_project.id = $p_id AND iitmandi_project.project_type = $pt_id AND iitmandi_project.is_delete = 1");
        $project_data1 = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.fname as 'stuffname' FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.projectstuff_id WHERE iitmandi_project.id = $p_id AND iitmandi_project.project_type = $pt_id AND iitmandi_project.is_delete = 1");
        $project_data2 = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.fname as 'copi' FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.coproject_incharge WHERE iitmandi_project.id = $p_id AND iitmandi_project.project_type = $pt_id AND iitmandi_project.is_delete = 1");
        $project_data = $project_data->result_array();
        $project_data1 = $project_data1->result_array();
        $project_data2 = $project_data2->result_array();
        if (!empty($project_data1) and !empty($project_data2)) {
            $result = array_merge($project_data[0],$project_data1[0],$project_data2[0]);
            echo json_encode($result);
        } else {
            echo json_encode($project_data[0]);
        }
    }

    public function project_fdetails() { 
        $p_id = $this->input->post('p_id');
        $project_data = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.fname FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.project_incharge WHERE iitmandi_project.id = $p_id AND iitmandi_project.is_delete = 1");
        $project_data1 = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.fname as 'stuffname' FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.projectstuff_id WHERE iitmandi_project.id = $p_id AND iitmandi_project.is_delete = 1");
        $project_data2 = $this->db->query("SELECT iitmandi_project.id, iitmandi_project.project_title, iitmandi_project.funding_agency, iitmandi_project.funding_amount,iitmandi_project.starting_year, iitmandi_project.project_duration, iitmandi_project.reference_number, iitmandi_team.fname as 'copi' FROM iitmandi_project JOIN iitmandi_team ON iitmandi_team.id = iitmandi_project.coproject_incharge WHERE iitmandi_project.id = $p_id AND iitmandi_project.is_delete = 1");
        $project_data = $project_data->result_array();
        $project_data1 = $project_data1->result_array();
        $project_data2 = $project_data2->result_array();
        if (!empty($project_data1) and !empty($project_data2)) {
            $result = array_merge($project_data[0],$project_data1[0],$project_data2[0]);
            echo json_encode($result);
        } else {
            echo json_encode($project_data[0]);
        }
    }

    public function publications() { 
        $data['publications']=$this->common_model->get_data_array(PUBLICATION,'','','','','','',PUBLICATION.".id DESC",array('status'=>1,'is_delete'=>1));
        $data['consultancy']=$this->common_model->get_data_array(PROJECT,'','','','','','','',array('project_type' =>2,'is_delete' =>1));
        $data['header']=$this->load->view('includes/header','',true);
        $data['footer']=$this->load->view('includes/footer','',true);
        $data['title']='Publications';
        $this->load->view('publication',$data);
    }
}