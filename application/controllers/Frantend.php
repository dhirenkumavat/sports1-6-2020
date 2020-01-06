<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frantend extends CI_Controller {
 function __construct() {
  parent::__construct();
  $this->load->helper(array('url','cookie', 'form','file'));
  $this->load->model('Common');
  $this->load->model('Admin_model');
  $this->load->library(array('form_validation','session','upload','image_lib','pagination','email'));
         
       $data=array();
       $cond=array('status'=>1);
       $data['typelist']=$this->Admin_model->get_datall('tbl_type',$cond);
       $data['sociallist'] = $this->Admin_model->get_all_data('tbl_sociallink');
       $cond=array('status'=>1);
       $data['featuredproducts']=$this->Admin_model->get_datall('tbl_featured_products',$cond);
       $cond=array('status'=>1);
       $data['categorylist']=$this->Admin_model->get_datall('tbl_category',$cond);
      $this->load->view('header', $data);

}

	
	public function index(){
         $cond=array('status'=>1,'type'=>'Hero');
          $data['sldd']=$this->Admin_model->get_datall('tbl_slider',$cond);
           $cond=array('status'=>1);
       $data['aboutslist']=$this->Admin_model->get_datall('tbl_aboutus',$cond);

		     $this->load->view('index',$data);
	 }
	
    public function about_us(){
    	 $cond=array('status'=>1);
       $data['aboutslist']=$this->Admin_model->get_datall('tbl_aboutus',$cond);
		$this->load->view('about_us',$data);
	}
	 public function contactus(){
	 	if(isset($_POST['submit'])){
        $usrname=$this->input->post('usrname');
        $email=$this->input->post('email');
        $mobile=$this->input->post('mobile');
        $msg=$this->input->post('msg');
// $config = array(
//     'protocol'  => 'smtp',
//     'smtp_host' => 'ssl://smtp.example.com',
//     'smtp_port' => 465,
//     'smtp_user' => 'email@example.com',
//     'smtp_pass' => 'email_password',
//     'mailtype'  => 'html',
//     'charset'   => 'utf-8'
// );
// $this->email->initialize($config);
// $this->email->set_mailtype("html");
// $this->email->set_newline("\r\n");

// //Email content
// $htmlContent = '<h1>Sending email via SMTP server</h1>';
// $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

// $this->email->to('recipient@example.com');
// $this->email->from('sender@example.com','MyWebsite');
// $this->email->subject('How to send email via SMTP server in CodeIgniter');
// $this->email->message($htmlContent);
// //Send email
// $this->email->send();
  $datas['non_xss']=array('name'=>$usrname,'email'=>$email,'mobile_no'=>$mobile,'msg'=>$msg);
   $data = $this->security->xss_clean($datas['non_xss']);

$res = $this->Common->insert_data('tbl_contact',$data);
if($res){
$this->session->set_flashdata('success_msg', 'Data have been Send successfully.');
redirect('contactus');
}else{
$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
redirect('contactus');
}
}

		$this->load->view('contactus');
	}
	 public function careers(){
	      $cond=array('status'=>1);
          $data['careerslist']=$this->Admin_model->get_datall('tbl_careers',$cond);
		$this->load->view('careers',$data);
	}
	 public function Maintenance(){
	 $cond=array('status'=>1);
          $data['maintenancelist']=$this->Admin_model->get_datall('tbl_maintenance',$cond);
          $cond=array('status'=>1,'type'=>'Maitnenance');
          $data['sldds']=$this->Admin_model->get_datall('tbl_slider',$cond);
		$this->load->view('Maintenance',$data);
	}
 public function gallery($typeid = NULL){
   
   $cond=array('type_id'=>$typeid,'status'=>1);
    $data['sublist']=$this->Admin_model->get_datall('tbl_subtype',$cond);
    $this->load->view('gallery',$data);
  }
public function featured_products($id = NULL){
   
   $cond=array('id'=>$id,'status'=>1);
    $data['featuredproductslist']=$this->Admin_model->get_datall('tbl_featured_products',$cond);
if(isset($_POST['submit'])){
        $usrname=$this->input->post('dname');
        $email=$this->input->post('email');
        $mobile=$this->input->post('phone');
         $city=$this->input->post('city');
        $msg=$this->input->post('message');
  $datas['non_xss']=array('name'=>$usrname,'city'=>$city,'email'=>$email,'mobile'=>$mobile,'message'=>$msg);
   $data = $this->security->xss_clean($datas['non_xss']);

$res = $this->Common->insert_data('tbl_enquiry',$data);
if($res){
$this->session->set_flashdata('success_msg', 'Data have been Send successfully.');
redirect('featured_products/'.$id.'');
}else{
$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
redirect('featured_products/'.$id.'');
}
}
$this->load->view('featured_products',$data);
  }
public function category($id = NULL){
 $cond=array('id'=>$id,'status'=>1);
    $data['categorylist']=$this->Admin_model->get_datall('tbl_category',$cond);
   $this->load->view('category',$data);
}
public function products_category($subid = NULL){
 $cond=array('subid'=>$subid,'status'=>1);
    $data['subcategorylist']=$this->Admin_model->get_datall('tbl_subcategory',$cond);
   $this->load->view('products_category',$data);
}

}

