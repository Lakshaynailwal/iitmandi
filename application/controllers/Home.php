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
}