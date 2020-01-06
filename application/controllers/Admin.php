<?php
/****************************************
Project for: Metch
Design & Developed By: Natrajinfotech.in
Start Date: 08,Feb,2018
Company Name: Natrajinfotech.in, Indore(M.P.)

****************************************/
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
  //constructer of controller
  public function __construct(){
      parent:: __construct();
    $this->load->helper(array('url','cookie', 'form','file'));
    $this->load->model('Common');
    $this->load->model('Admin_model');
      $this->load->library(array('form_validation', 'session','upload','image_lib','pagination', 'email'));

  }
  
  public function flashdata($id,$msg){
      $this->session->set_flashdata($id,$msg);
  }
// Get data for Admin index
  public function index(){
     $data['message_status'] = 0; 
     $userid = $this->session->userdata('userid');
     if(isset($_POST['submit'])){
        $username = $_POST["username"];
        $password = $_POST["password"]; 
        $tab_name = "admin";
       $tab_sel = "id,username";
     $tab_where = "username ='".$username."' AND password ='". $password ."'AND status = 1";
        // Get data for users tables
      $result = $this->Common->select_single_row($tab_name, $tab_sel, $tab_where);
      if (count($result) > 0) {
          $sessionData = array(
             'userid' => $result[0]['id'],
             'username' => $result[0]['username'],
           );
              $userid = $result[0]['id'];
            $this->session->set_userdata($sessionData);
              redirect('admin/dashboard');
         }else{
            // if count result is less than 0
$data['error'] = "Invalid Username or Password";
            $this->session->set_userdata($data);
            redirect('admin/index');
                }
            }
          $this->load->view('admin/index',$data);
  }
  
// Get data for Admin Dashboard
 public function dashboard() {
 $this->load->view('admin/dashboard');
	}  
  
// logout
    public function logout(){
	$this->session->unset_userdata('userid');
	$this->session->sess_destroy();
         redirect('admin/index');
}
   
// add Slider
public function add_slider() {
       if(isset($_POST['submit'])){
        $image = $this->input->post('image');
        $title = $this->input->post('title');
        $links = $this->input->post('link');
        $description = $this->input->post('description');
       $config['upload_path']   = 'Upload/Slider/thumb';
            $config['file_name']     = time();
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '4096';
            $config['max_height']    = '5000';
            $config['width']         = '3000';
        
        //initialize Config 
        $this->upload->initialize($config);
        /*  Code For User Image  Upload  */  
        if (!$this->upload->do_upload('image')) { 
                 $data['error'] = $this->upload->display_errors();
         $this->session->set_userdata($data);   
              }else{
          $user_image            = $this->upload->data();
          $file_name               = $user_image['file_name'];
          $file_path               = $file_name;
          $config['image_library'] = 'gd2';
          $config['source_image']  = $user_image['full_path'];
          $config['new_image']     = 'Upload/Slider/' . $file_name;
          $config['width']         = 1920;
          $config['height']        = 700;
          $this->image_lib->initialize($config);
          if (!$this->image_lib->resize()) {
          $this->image_lib->display_errors();
         
          } else {
          $table_data['image'] = $file_name;
          }
          $table_name="tbl_slider";
          $table_data['link'] = $links;          
          $table_data['title'] = $title;          
          $table_data['description'] = $description;          
           $usermessage=$this->Admin_model->insert_entries($table_name,$table_data); 
           if($usermessage){
$this->session->set_flashdata('success_msg', 'Data have been added successfully.');
}else{
$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
}
 }
  }
$this->load->view('admin/add_slider');
  }
 // Slider List
  public function slider_list() {
      $data=array();
      $cond=array('type'=>'Hero');
      $data['Sliderlist'] = $this->Admin_model->get_datall('tbl_slider',$cond);
      $this->load->view('admin/slider_list',$data);
      }

       // delete Slider list
  public function delete_slider($id){
 $cond=array('id'=>$id);
$branchlist=$this->Admin_model->get_datall('tbl_slider',$cond); 
foreach ($branchlist as $row) {
     $images=$row->image;
    }
unlink("Upload/Slider/".$images);
unlink("Upload/Slider/thumb/".$images);
   $array = array('id'=>$id);
$this->Admin_model->delete_data('tbl_slider',$array);
    $this->session->set_flashdata('success_msg', 'Data have been Delete successfully.');
    redirect('admin/slider_list');
   }

// edit slider
 public function edit_slider($id){
   $cond = array('id'=>$id);
  $result = $this->Admin_model->get_one_row('tbl_slider', $cond);
  $data['listslider'] = $result;
if(isset($_POST['update'])){
    $title = $this->input->post('title');
    $link = $this->input->post('link');
    $description  = $this->input->post('description');
   //profile pic
  if($_FILES['image']['name']!=""){
    $config['upload_path']   = './Upload/Slider/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('image')){
    }else { 
      $uploadData = $this->upload->data();
      $array['image'] = $uploadData['file_name'];
    }
    }else{
    $cond1=array('id'=>$id);
    $branchlist=$this->Admin_model->get_datall('tbl_slider',$cond1); 
    foreach ($branchlist as $row) {
    $image=$row->image;
      }
    $array['image']=$image;
    }

$datas3['non_xss']=array('image'=>$array['image'],'title'=>$title,'link'=>$link,'description'=>$description);
    $array3 = $this->security->xss_clean($datas3['non_xss']);
    $cond = array('id'=>$id);
   $this->Common->update_tbl('tbl_slider',$cond,$array3);
   $this->session->set_flashdata('success_msg', 'Data have been updated successfully.');
   redirect('admin/edit_slider/'.$id.'');
   }
   $this->load->view('admin/edit_slider',$data);
  }

// contactus_list Detail
public function contactus_list() {
      $data['contactlist'] = $this->Admin_model->get_all_data('tbl_contact');
      $this->load->view('admin/contactus_list',$data);
    }
// delete contact
  public function delete_contact($id){
  $array = array('id' => $id);
  $this->Admin_model->delete_data('tbl_contact', $array);
  redirect('admin/contactus_list');
 }
// social_list List
      public function social_list() {
        $data=array();

      $data['sociallist'] = $this->Admin_model->get_all_data('tbl_sociallink');
      if(isset($_POST['submit'])){
        $type=strtoupper($this->input->post('type'));
        $link=$this->input->post('link');
          $datas['non_xss']=array('links'=>$link,'type'=>$type);
 $data = $this->security->xss_clean($datas['non_xss']);
$res =  $this->Common->insert_data('tbl_sociallink',$data);
if($res){
$this->session->set_flashdata('success_msg', 'Data have been added successfully.');
redirect('admin/social_list');
}else{
$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
redirect('admin/social_list');
}
}
$this->load->view('admin/social_list',$data);
          }
// delete social
  public function delete_social($id){
  $array = array('id' => $id);
  $this->Admin_model->delete_data('tbl_sociallink', $array);
  redirect('admin/social_list');
 }

// edit Social
  public function edit_social($id){
  $cond = array('id'=>$id);
  $result = $this->Admin_model->get_one_row('tbl_sociallink', $cond);
  $data['social_link'] = $result;
   if(isset($_POST['update'])){
   $type = strtoupper($this->input->post('type'));
 $links= $this->input->post('links');
  $datas3['non_xss']=array('type'=>$type,'links'=>$links);
 $array3 = $this->security->xss_clean($datas3['non_xss']);
  $cond = array('id'=>$id);
  $this->Common->update_tbl('tbl_sociallink',$cond,$array3);
  $this->session->set_flashdata('success_msg', 'Data have been updated successfully.');
  redirect('admin/edit_social/'.$id.'');
  }
   $this->load->view('admin/edit_social',$data);
  }
















//update Staus
public function update_status(){

    $status = $this->input->post('status');
    $course_id = $this->input->post('id');
    $this->Admin_model->update_course_status($course_id,$status);
}
public function update_status_slider(){
   $status = $this->input->post('status');
    $course_id = $this->input->post('id');
    $this->Admin_model->update_slider_status($course_id,$status);
}
//add  Category 
  public function add_category() {
    if (isset($_POST['submit'])){
  $catename=$this->input->post('catename');
    $message=$this->input->post('message');
 if(!empty($_FILES['image']['name'])){
  $config['upload_path']   = './Upload/Category/'; 
  $config['allowed_types'] = '*'; 
 $config['file_name']=time().rand(111111,999999);
 $this->load->library('upload');
 $this->upload->initialize($config);
if ( ! $this->upload->do_upload('image')){
  $data['error'] = $this->upload->display_errors();
    }else { 
      $uploadData = $this->upload->data();
      $file_name1 = $uploadData['file_name'];
    }
    }else{

      $file_name1='';
    }
if(!empty($_FILES['cateimage']['name'])){
  $config['upload_path']   = './Upload/Category/'; 
  $config['allowed_types'] = '*'; 
 $config['file_name']=time().rand(111111,999999);
 $this->load->library('upload');
 $this->upload->initialize($config);
if ( ! $this->upload->do_upload('cateimage')){
  $data['error'] = $this->upload->display_errors();
    }else { 
      $uploadData = $this->upload->data();
      $file_name2 = $uploadData['file_name'];
    }
    }else{

      $file_name2='';
    }
$datas['non_xss']=array('catename'=>$catename,'image'=>$file_name1,'message'=>$message,'cateimage'=>$file_name2);
 $data = $this->security->xss_clean($datas['non_xss']);
$res =  $this->Common->insert_data('tbl_category',$data);
if($res){
$this->session->set_flashdata('success_msg', 'Data have been added successfully.');
}else{
$this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
}
 redirect('admin/add_category');
     }
    $this->load->view('admin/add_category');
  }
// category List
  public function category_list() {
      $data['categorys'] = $this->Admin_model->get_all_data('tbl_category');
      $this->load->view('admin/category_list',$data);
    }

            // delete category
  public function delete_category($id){
     $array = array('id' => $id);
     $cond1=array('id'=>$id);
     $branchlist=$this->Admin_model->get_datall('tbl_category',$cond1); 
     foreach ($branchlist as $row) {
     $image=$row->image;
     $cateimage=$row->cateimage;
     }
    unlink("Upload/Category/".$image);
    unlink("Upload/Category/".$cateimage);
    $this->Admin_model->delete_data('tbl_category', $array);
    redirect('admin/category_list');
 }

    // edit Category
 public function edit_category($id){
$cond = array('id'=>$id);
$result = $this->Common->get_one_row('tbl_category',$cond);
$data['updatecate'] = $result;

if(isset($_POST['update'])){
$catename= $this->input->post('catename'); 
$message= $this->input->post('message');
//profile pic
 if($_FILES['image']['name']!=""){
  $config['upload_path']   = './Upload/Category/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('image')){
    }else { 
      $uploadData = $this->upload->data();
      $array['image'] = $uploadData['file_name'];
    }
    }else{
    $cond1=array('id'=>$id);
    $branchlist=$this->Admin_model->get_datall('tbl_category',$cond1); 
    foreach ($branchlist as $row) {
    $image=$row->image;
      }
    $array['image']=$image;
    }
//id Proff
    if($_FILES['cateimage']['name']!=""){
    $config['upload_path']   = './Upload/Category/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('cateimage')){
    }else { 
      $uploadData = $this->upload->data();
      $array['cateimage'] = $uploadData['file_name'];
    }
      }else{
      $cond1=array('id'=>$id);
      $branchlist=$this->Admin_model->get_datall('tbl_category',$cond1); 
      foreach ($branchlist as $row) {
      $cateimage=$row->cateimage;
      }
      $array['cateimage']=$cateimage;
      }
$datas3['non_xss']=array('catename'=>$catename,'image'=>$array['image'],'cateimage'=>$array['cateimage'],'message'=>$message);
$array3 = $this->security->xss_clean($datas3['non_xss']);
$cond = array('id'=>$id);
$this->Common->update_tbl('tbl_category',$cond,$array3);
$this->session->set_flashdata('success_msg', 'Data have been updated successfully.');
redirect('admin/edit_category/'.$id.'');
}
$this->load->view('admin/edit_category',$data);
}
 //update status Category 
public function update_status_category(){
   $status = $this->input->post('status');
    $id = $this->input->post('id');
    $this->Admin_model->update_categoty_status($id,$status);
}

 //add Course subCategory 
  public function add_subcategory() {
     $cond=array('status'=>1);
     $data['catelist'] =$this->Admin_model->get_all_data('tbl_category',$cond);
      if(isset($_POST['submit'])){
      $cateid=$this->input->post('cateid');
      $subcatename=$this->input->post('subcatename');
      $content=$this->input->post('content');
      //images
      if(!empty($_FILES['Images']['name'])){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
    if ( ! $this->upload->do_upload('Images')){
    $data['error'] = $this->upload->display_errors();
      }else { 
        $uploadData = $this->upload->data();
        $file_name1 = $uploadData['file_name'];
      }
      }else{
       $file_name1='';
      }
      //Colors Image
    if(!empty($_FILES['Colors']['name'])){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
    if ( ! $this->upload->do_upload('Colors')){
    $data['error'] = $this->upload->display_errors();
      }else { 
        $uploadData = $this->upload->data();
        $Colors = $uploadData['file_name'];
      }
      }else{
        $Colors='';
      }
     //International certification
    if(!empty($_FILES['certificates']['name'])){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
    if ( ! $this->upload->do_upload('certificates')){
    $data['error'] = $this->upload->display_errors();
      }else { 
        $uploadData = $this->upload->data();
        $certificates = $uploadData['file_name'];
      }
      }else{
        $certificates='';
      }
  //Technical specification
    if(!empty($_FILES['specification']['name'])){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
    if ( ! $this->upload->do_upload('specification')){
    $data['error'] = $this->upload->display_errors();
      }else { 
        $uploadData = $this->upload->data();
        $specification = $uploadData['file_name'];
      }
      }else{
        $specification='';
      }

       //Technical construction
    if(!empty($_FILES['construction']['name'])){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
    if ( ! $this->upload->do_upload('construction')){
    $data['error'] = $this->upload->display_errors();
      }else { 
        $uploadData = $this->upload->data();
        $construction = $uploadData['file_name'];
      }
      }else{
        $construction='';
      }
    $datas['non_xss']=array('cateid'=>$cateid,'subcatename'=>$subcatename,'Images'=>$file_name1,'Colors'=>$Colors,'certificates'=>$certificates,'specification'=>$specification,'construction'=>$construction,'content'=>$content);
    $data = $this->security->xss_clean($datas['non_xss']);
    $res =  $this->Common->insert_data('tbl_subcategory',$data);
    if($res){
    $this->session->set_flashdata('success_msg', 'Data have been added successfully.');
    }else{
    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
    }
    redirect('admin/add_subcategory');
     }
   $this->load->view('admin/add_subcategory',$data);

    }
 // subcategory List
  public function subcategory_list() {
   $sql="SELECT tbl_subcategory .*,tbl_category.catename FROM `tbl_subcategory` INNER JOIN `tbl_category` ON `tbl_category`.`id`= `tbl_subcategory`.`cateid`";
        $data['subcategorys']=$this->Admin_model->custom_query($sql);
        $this->load->view('admin/subcategory_list',$data);
     }
// delete subcategory
  public function delete_subcategory($subid){
    $array = array('subid'=>$subid);
    $cond1=array('subid'=>$subid);
     $branchlist=$this->Admin_model->get_datall('tbl_subcategory',$cond1); 
     foreach ($branchlist as $row) {
     $Images=$row->Images;
     $Colors=$row->Colors;
     $certificates=$row->certificates;
     $specification=$row->specification;
     $construction=$row->construction;
     }
     unlink("Upload/Subcategory/".$Images);
     unlink("Upload/Subcategory/".$Colors);
     unlink("Upload/Subcategory/".$certificates);
     unlink("Upload/Subcategory/".$specification);
     unlink("Upload/Subcategory/".$construction);
$this->Admin_model->delete_data('tbl_subcategory',$array);
    redirect('admin/subcategory_list',$data);
   }

//update status SubCategory 
public function update_status_Subcategory(){
   $status = $this->input->post('status');
    $subid = $this->input->post('subid');
    $this->Admin_model->update_subcategoty_status($subid,$status);
}
// edit SubCategory
 public function edit_subcategory($subid){
   $cond=array('status'=>1);
   $data['catelist'] =$this->Admin_model->get_all_data('tbl_category',$cond);
   $cond = array('subid'=>$subid);
   $result = $this->Common->get_one_row('tbl_subcategory',$cond);
   $data['updatesubcate'] = $result;
if(isset($_POST['update'])){
   $cateid= $this->input->post('cateid'); 
   $subcatename= $this->input->post('subcatename');
   $content= $this->input->post('content');
   //profile pic
  if($_FILES['Images']['name']!=""){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('Images')){
    }else { 
      $uploadData = $this->upload->data();
      $array['Images'] = $uploadData['file_name'];
    }
    }else{
    $cond1=array('subid'=>$subid);
    $branchlist=$this->Admin_model->get_datall('tbl_subcategory',$cond1); 
    foreach ($branchlist as $row) {
    $Images=$row->Images;
      }
    $array['Images']=$Images;
    }
//Colors 
    if($_FILES['Colors']['name']!=""){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('Colors')){
    }else { 
      $uploadData = $this->upload->data();
      $array['Colors'] = $uploadData['file_name'];
    }
      }else{
     $cond1=array('subid'=>$subid);
      $branchlist=$this->Admin_model->get_datall('tbl_subcategory',$cond1); 
      foreach ($branchlist as $row) {
      $Colors=$row->Colors;
      }
      $array['Colors']=$Colors;
      }
//certificates 
    if($_FILES['certificates']['name']!=""){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('certificates')){
    }else { 
      $uploadData = $this->upload->data();
      $array['certificates'] = $uploadData['file_name'];
    }
      }else{
      $cond1=array('subid'=>$subid);
      $branchlist=$this->Admin_model->get_datall('tbl_subcategory',$cond1); 
      foreach ($branchlist as $row) {
      $certificates=$row->certificates;
      }
      $array['certificates']=$certificates;
      }
//specification 
    if($_FILES['specification']['name']!=""){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('specification')){
    }else { 
      $uploadData = $this->upload->data();
      $array['specification'] = $uploadData['file_name'];
    }
      }else{
      $cond1=array('subid'=>$subid);
      $branchlist=$this->Admin_model->get_datall('tbl_subcategory',$cond1); 
      foreach ($branchlist as $row) {
      $specification=$row->specification;
      }
      $array['specification']=$specification;
      }
//specification 
    if($_FILES['construction']['name']!=""){
    $config['upload_path']   = './Upload/Subcategory/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('construction')){
    }else { 
      $uploadData = $this->upload->data();
      $array['construction'] = $uploadData['file_name'];
    }
      }else{
      $cond1=array('subid'=>$subid);
      $branchlist=$this->Admin_model->get_datall('tbl_subcategory',$cond1); 
      foreach ($branchlist as $row) {
      $construction=$row->construction;
      }
      $array['construction']=$construction;
      }
$datas3['non_xss']=array('cateid'=>$cateid,'subcatename'=>$subcatename,'Images'=>$array['Images'],'Colors'=>$array['Colors'],'certificates'=>$array['certificates'],'specification'=>$array['specification'],'construction'=>$array['construction'],'content'=>$content);
    $array3 = $this->security->xss_clean($datas3['non_xss']);
    $cond = array('subid'=>$subid);
   $this->Common->update_tbl('tbl_subcategory',$cond,$array3);
   $this->session->set_flashdata('success_msg', 'Data have been updated successfully.');
   redirect('admin/edit_subcategory/'.$subid.'');
   }
   $this->load->view('admin/edit_subcategory',$data);
  }

//add Product Detail
	 public function add_Feature_product() {
	   if (isset($_POST['submit'])){
     $productname=$this->input->post('productname');
     $heading=$this->input->post('heading');
     $content=$this->input->post('content');
     if(!empty($_FILES['image']['name'])){
     $config['upload_path']   = './Upload/Featured_Products/'; 
     $config['allowed_types'] = '*'; 
     $config['file_name']=time().rand(111111,999999);
     $this->load->library('upload');
     $this->upload->initialize($config);
     if( ! $this->upload->do_upload('image')){
     $data['error'] = $this->upload->display_errors();
     }else { 
      $uploadData = $this->upload->data();
      $file_name1 = $uploadData['file_name'];
    }
    }else{
    $file_name1='';
    }
  $datas['non_xss']=array('name'=>$productname,'image'=>$file_name1,'content'=>$content,'heading'=>$heading);
     $data = $this->security->xss_clean($datas['non_xss']);
     $res =  $this->Common->insert_data('tbl_featured_products',$data);
    if($res){
    $this->session->set_flashdata('success_msg', 'Data have been added successfully.');
    }else{
    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
      }
      redirect('admin/add_Feature_product');
     }
     $this->load->view('admin/add_Feature_product');
}
///Feature Product list
public function Feature_product_list() {
	  $data['featuredproducts'] = $this->Admin_model->get_all_data('tbl_featured_products');
    $this->load->view('admin/Feature_product_list',$data);
    }
//update status Feature Product 
   public function update_status_Feature_product(){
      $status = $this->input->post('status');
      $id = $this->input->post('id');
      $this->Admin_model->update_Feature_product_status($id,$status);
   }
    // delete Feature Product list
  public function delete_Feature_Product($id){
     $array = array('id' =>$id);
     $cond1=array('id'=>$id);
     $branchlist=$this->Admin_model->get_datall('tbl_featured_products',$cond1); 
     foreach ($branchlist as $row) {
     $image=$row->image;
     }
     unlink("Upload/Featured_Products/".$image);
    $this->Admin_model->delete_data('tbl_featured_products', $array);
    redirect('admin/Feature_product_list');
   }
 // edit Feature Product list
  public function edit_Feature_Product($id){
     $cond = array('id'=>$id);
   $result = $this->Common->get_one_row('tbl_featured_products',$cond);
   $data['featuredproducts'] = $result;
   if(isset($_POST['update'])){
$productname= $this->input->post('productname'); 
$heading= $this->input->post('heading');
$content= $this->input->post('content');
//profile pic
 if($_FILES['image']['name']!=""){
  $config['upload_path']   = './Upload/Featured_Products/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('image')){
    }else { 
      $uploadData = $this->upload->data();
      $array['image'] = $uploadData['file_name'];
    }
    }else{
    $cond1=array('id'=>$id);
    $branchlist=$this->Admin_model->get_datall('tbl_featured_products',$cond1); 
    foreach ($branchlist as $row) {
    $image=$row->image;
      }
    $array['image']=$image;
    }
$datas3['non_xss']=array('name'=>$productname,'image'=>$array['image'],'content'=>$content,'heading'=>$heading);
$array3 = $this->security->xss_clean($datas3['non_xss']);
$cond = array('id'=>$id);
$this->Common->update_tbl('tbl_featured_products',$cond,$array3);
$this->session->set_flashdata('success_msg', 'Data have been updated successfully.');
redirect('admin/edit_Feature_Product/'.$id.'');
}
  $this->load->view('admin/edit_Feature_Product',$data);
  }
// Slider List
  public function Maitnenanceslider_list() {
     $data=array();
     $cond=array('type'=>'Maitnenance');
      $data['Sliderlist'] = $this->Admin_model->get_datall('tbl_slider',$cond);
       if (isset($_POST['submit'])){
     if(!empty($_FILES['image']['name'])){
     $config['upload_path']   = './Upload/Maintenance/'; 
     $config['allowed_types'] = '*'; 
     $config['file_name']=time().rand(111111,999999);
     $this->load->library('upload');
     $this->upload->initialize($config);
     if( ! $this->upload->do_upload('image')){
     $data['error'] = $this->upload->display_errors();
     }else { 
      $uploadData = $this->upload->data();
      $file_name1 = $uploadData['file_name'];
    }
    }else{
    $file_name1='';
    }
$type='Maitnenance';
  $datas['non_xss']=array('type'=>$type,'image'=>$file_name1);
     $data = $this->security->xss_clean($datas['non_xss']);
     $res =  $this->Common->insert_data('tbl_slider',$data);
    if($res){
    $this->session->set_flashdata('success_msg', 'Data have been added successfully.');
    redirect('admin/Maitnenanceslider_list');
    }else{
    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
    redirect('admin/Maitnenanceslider_list');
      }
       }
$this->load->view('admin/Maitnenanceslider_list',$data);
      }

// delete Slider list
  public function delete_maintenance($id){
    $cond=array('id'=>$id);
      $branchlist=$this->Admin_model->get_datall('tbl_slider',$cond); 
      foreach ($branchlist as $row) {
     $images=$row->image;
    }
     unlink("Upload/Maintenance/".$images);
   $array = array('id'=>$id);
   $this->Admin_model->delete_data('tbl_slider',$array);
    $this->session->set_flashdata('success_msg', 'Data have been Delete successfully.');
    redirect('admin/Maitnenanceslider_list');
   }
//update status Maitnenanceslider
   public function update_status_Maitnenanceslider(){
      $status = $this->input->post('status');
      $id = $this->input->post('id');
      $this->Admin_model->update_Maitnenances_status($id,$status);
   }
// Change password
  	public function change_password() {
  	   if (isset($_POST['submit'])){
  	       $old_pass = $this->input->post('old_pass');
            $new_pass = $this->input->post('new_pass');
            $confirm_pass = $this->input->post('confirm_pass');
$sql=$this->db->query("select * from admin where id='1'");
foreach($sql->result() as $row){
    $pass=$row->password;
}
if($new_pass==$confirm_pass){
 $cond=array('id'=>'1');
    $data['password']=$new_pass;
    $updat_q=$this->Admin_model->update_tbl('admin',$cond,$data);
     $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your Password Update Successfully</div>');
}
else{
$this->session->set_flashdata('msg','<div class="alert alert-danger text-center"> Your new and Retype Password is not match !!!</div>');
}

}
$data['admins'] = $this->Admin_model->get_all_data('admin');
$this->load->view('admin/change_password',$data);
   }

// Slider List
  public function Gallery_list() {
      $data=array();
     

 $sql="SELECT tbl_gallery .*,tbl_type.type_name,tbl_subtype.subtype FROM `tbl_gallery` INNER JOIN `tbl_type` ON `tbl_type`.`typeid`= `tbl_gallery`.`type_id` INNER JOIN `tbl_subtype` ON `tbl_subtype`.`subtypeid`= `tbl_gallery`.`subtype_id`";
        $data['gallrylist']=$this->Admin_model->custom_query($sql);

       $cond=array('status'=>1);
       $data['typlist']=$this->Admin_model->get_datall('tbl_type',$cond); 
         if (isset($_POST['submit'])){
        $type_id = $this->input->post('type_id');
        $subtype = $this->input->post('subtype');
       
     if(!empty($_FILES['image']['name'])){
        $config['upload_path']   = './Upload/Gallery/'; 
        $config['allowed_types'] = '*'; 
        $config['file_name']=time().rand(111111,999999);
          $this->load->library('upload');
          $this->upload->initialize($config);
          if( ! $this->upload->do_upload('image')){
          $data['error'] = $this->upload->display_errors();
         }else { 
            $uploadData = $this->upload->data();
             $file_name1 = $uploadData['file_name'];
          }
       }else{
          $file_name1='';
         }

       $datas['non_xss']=array('type_id'=>$type_id,'subtype_id'=>$subtype,'image'=>$file_name1);
     $data = $this->security->xss_clean($datas['non_xss']);
     $res =  $this->Common->insert_data('tbl_gallery',$data);
    if($res){
    $this->session->set_flashdata('success_msg', 'Data have been added successfully.');
    redirect('admin/Gallery_list');
    }else{
    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
    redirect('admin/Gallery_list');
      }
       }  

$this->load->view('admin/Gallery_list',$data);
      }
 // type List
  public function type_list() {
        $data['typlist'] = $this->Admin_model->get_all_data('tbl_type');
       if (isset($_POST['submit'])){
       $type_name = $this->input->post('type_name');
       $datas['non_xss']=array('type_name'=>$type_name);
     $data = $this->security->xss_clean($datas['non_xss']);
     $res =  $this->Common->insert_data('tbl_type',$data);
    if($res){
    $this->session->set_flashdata('success_msg', 'Data have been added successfully.');
    redirect('admin/type_list');
    }else{
    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
    redirect('admin/type_list');
      }
       }
$this->load->view('admin/type_list',$data);
      }

//update status type
   public function update_status_type(){
      $status = $this->input->post('status');
      $id = $this->input->post('typeid');
      $this->Admin_model->update_type_status($id,$status);
   }
// delete type list
  public function delete_type($typeid){
    $array = array('typeid'=>$typeid);
     $this->Admin_model->delete_data('tbl_type',$array);
    $this->session->set_flashdata('success_msg', 'Data have been Delete successfully.');
    redirect('admin/type_list');
   }

// sub type List
  public function subtype_list() {
       $cond=array('status'=>1);
       $data['typlist']=$this->Admin_model->get_datall('tbl_type',$cond); 
      $sql="SELECT tbl_subtype .*,tbl_type.type_name FROM `tbl_subtype` INNER JOIN `tbl_type` ON `tbl_type`.`typeid`= `tbl_subtype`.`type_id`";
        $data['sublist']=$this->Admin_model->custom_query($sql);
       
if (isset($_POST['submit'])){
        $type_id = $this->input->post('type_id');
        $subtype = $this->input->post('subtype');
       $datas['non_xss']=array('type_id'=>$type_id,'subtype'=>$subtype);
     $data = $this->security->xss_clean($datas['non_xss']);
     $res =  $this->Common->insert_data('tbl_subtype',$data);
    if($res){
    $this->session->set_flashdata('success_msg', 'Data have been added successfully.');
    redirect('admin/subtype_list');
    }else{
    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
    redirect('admin/subtype_list');
      }
       }
$this->load->view('admin/subtype_list',$data);
      }

//update status sub  type
   public function update_status_subtype(){
      $status = $this->input->post('status');
      $id = $this->input->post('subtypeid');
      $this->Admin_model->update_subtype_status($id,$status);
   }
// delete sub type list
  public function delete_subtype($subtypeid){
    $array = array('subtypeid'=>$subtypeid);
     $this->Admin_model->delete_data('tbl_subtype',$array);
    $this->session->set_flashdata('success_msg', 'Data have been Delete successfully.');
    redirect('admin/subtype_list');
   }


// Get data for Type get In ajax
public function get_subtype(){
  $typeid=$_POST['typeid'];
  echo "SELECT * FROM tbl_subtype  WHERE type_id='$typeid' AND status='1'";
  $query =$this->db->query("SELECT * FROM tbl_subtype  WHERE type_id='$typeid' AND status='1'");
  if(count($query)>0){
   echo '<option value="">Select SubType</option>';
  foreach($query->result() as $row)
  {
  echo  '<option value="'.$row->subtypeid.'">'.$row->subtype.'</option>';
  }
  }else{
 echo '<option value="">SubType  Not Available</option>';
  }
 }



// delete Gallery list
  public function delete_gallery($id){
    $cond=array('id'=>$id);
      $branchlist=$this->Admin_model->get_datall('tbl_gallery',$cond); 
      foreach ($branchlist as $row) {
     $image=$row->image;
    }
     unlink("Upload/Gallery/".$image);
   $array = array('id'=>$id);
   $this->Admin_model->delete_data('tbl_gallery',$array);
    $this->session->set_flashdata('success_msg', 'Data have been Delete successfully.');
    redirect('admin/Gallery_list');
   }

//update status Gallery
   public function update_status_gallry(){
      $status = $this->input->post('status');
      $id = $this->input->post('id');
      $this->Admin_model->update_gallery_status($id,$status);
   }

// careers list
  public function careers_list() {
     $data['careerslist'] = $this->Admin_model->get_all_data('tbl_careers');
     $this->load->view('admin/careers_list',$data);
      }

// delete Gallery list
  public function delete_careers($id){
    $cond=array('id'=>$id);
      $branchlist=$this->Admin_model->get_datall('tbl_careers',$cond); 
      foreach ($branchlist as $row) {
     $image=$row->image;
    }
     unlink("Upload/careers/".$image);
   $array = array('id'=>$id);
   $this->Admin_model->delete_data('tbl_careers',$array);
    $this->session->set_flashdata('success_msg', 'Data have been Delete successfully.');
    redirect('admin/careers_list');
   }
//update status Gallery
   public function update_status_careers(){
      $status = $this->input->post('status');
      $id = $this->input->post('id');
      $this->Admin_model->update_careers_status($id,$status);
   }

//add_careers

public function add_careers(){
 if (isset($_POST['submit'])){
        $content = $this->input->post('content');
       
 if(!empty($_FILES['image']['name'])){
        $config['upload_path']   = './Upload/careers/'; 
        $config['allowed_types'] = '*'; 
        $config['file_name']=time().rand(111111,999999);
          $this->load->library('upload');
          $this->upload->initialize($config);
          if( ! $this->upload->do_upload('image')){
          $data['error'] = $this->upload->display_errors();
         }else { 
            $uploadData = $this->upload->data();
             $file_name1 = $uploadData['file_name'];
          }
       }else{
          $file_name1='';
         }

       $datas['non_xss']=array('image'=>$file_name1,'content'=>$content);
     $data = $this->security->xss_clean($datas['non_xss']);
     $res =  $this->Common->insert_data('tbl_careers',$data);
    if($res){
    $this->session->set_flashdata('success_msg', 'Data have been added successfully.');
    redirect('admin/add_careers');
    }else{
    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
    redirect('admin/add_careers');
      }
       }
 $this->load->view('admin/add_careers');

}
 // edit careers list
  public function edit_careers($id){
    $cond = array('id'=>$id);
   $result = $this->Common->get_one_row('tbl_careers',$cond);
   $data['careerslist'] = $result;
   if(isset($_POST['update'])){
$content= $this->input->post('content');
//profile pic
 if($_FILES['image']['name']!=""){
  $config['upload_path']   = './Upload/careers/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('image')){
    }else { 
      $uploadData = $this->upload->data();
      $array['image'] = $uploadData['file_name'];
    }
    }else{
    $cond1=array('id'=>$id);
    $branchlist=$this->Admin_model->get_datall('tbl_careers',$cond1); 
    foreach ($branchlist as $row) {
    $image=$row->image;
      }
    $array['image']=$image;
    }
$datas3['non_xss']=array('image'=>$array['image'],'content'=>$content);
$array3 = $this->security->xss_clean($datas3['non_xss']);
$cond = array('id'=>$id);
$this->Common->update_tbl('tbl_careers',$cond,$array3);
$this->session->set_flashdata('success_msg', 'Data have been updated successfully.');
redirect('admin/edit_careers/'.$id.'');
}
  $this->load->view('admin/edit_careers',$data);
  }

// Maintenance list
  public function maintenance_list() {
     $data['maintenancelist'] = $this->Admin_model->get_all_data('tbl_maintenance');
     $this->load->view('admin/maintenance_list',$data);
      }

// delete Maintenance list
  public function delete_maintenancelist($id){
    $cond=array('id'=>$id);
      $branchlist=$this->Admin_model->get_datall('tbl_maintenance',$cond); 
      foreach ($branchlist as $row) {
     $image=$row->image;
    }
     unlink("Upload/Maintenance/".$image);
   $array = array('id'=>$id);
   $this->Admin_model->delete_data('tbl_maintenance',$array);
    $this->session->set_flashdata('success_msg', 'Data have been Delete successfully.');
    redirect('admin/maintenance_list');
   }

//update status Maintenance
   public function update_status_maintenancelist(){
      $status = $this->input->post('status');
      $id = $this->input->post('id');
      $this->Admin_model->update_careers_maintenancelist($id,$status);
   }

//Maintenance ADD

public function add_maintenance(){
 if (isset($_POST['submit'])){
        $content = $this->input->post('content');
       
 if(!empty($_FILES['image']['name'])){
        $config['upload_path']   = './Upload/Maintenance/'; 
        $config['allowed_types'] = '*'; 
        $config['file_name']=time().rand(111111,999999);
          $this->load->library('upload');
          $this->upload->initialize($config);
          if( ! $this->upload->do_upload('image')){
          $data['error'] = $this->upload->display_errors();
         }else { 
            $uploadData = $this->upload->data();
             $file_name1 = $uploadData['file_name'];
          }
       }else{
          $file_name1='';
         }

       $datas['non_xss']=array('image'=>$file_name1,'content'=>$content);
     $data = $this->security->xss_clean($datas['non_xss']);
     $res =  $this->Common->insert_data('tbl_maintenance',$data);
    if($res){
    $this->session->set_flashdata('success_msg', 'Data have been added successfully.');
    redirect('admin/add_maintenance');
    }else{
    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
    redirect('admin/add_maintenance');
      }
       }
 $this->load->view('admin/add_maintenance');

}


// edit Maintenance list
  public function edit_maintenancelist($id){
    $cond = array('id'=>$id);
   $result = $this->Common->get_one_row('tbl_maintenance',$cond);
   $data['maintenancelist'] = $result;
   if(isset($_POST['update'])){
$content= $this->input->post('content');
//profile pic
 if($_FILES['image']['name']!=""){
  $config['upload_path']   = './Upload/Maintenance/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('image')){
    }else { 
      $uploadData = $this->upload->data();
      $array['image'] = $uploadData['file_name'];
    }
    }else{
    $cond1=array('id'=>$id);
    $branchlist=$this->Admin_model->get_datall('tbl_maintenance',$cond1); 
    foreach ($branchlist as $row) {
    $image=$row->image;
      }
    $array['image']=$image;
    }
$datas3['non_xss']=array('image'=>$array['image'],'content'=>$content);
$array3 = $this->security->xss_clean($datas3['non_xss']);
$cond = array('id'=>$id);
$this->Common->update_tbl('tbl_maintenance',$cond,$array3);
$this->session->set_flashdata('success_msg', 'Data have been updated successfully.');
redirect('admin/edit_maintenancelist/'.$id.'');
}
  $this->load->view('admin/edit_maintenancelist',$data);
  }


// Maintenance list
  public function aboutus_list() {
     $data['aboutuslist'] = $this->Admin_model->get_all_data('tbl_aboutus');
     $this->load->view('admin/aboutus_list',$data);
      }

// delete Maintenance list
  public function delete_aboutus($id){
    $cond=array('id'=>$id);
      $branchlist=$this->Admin_model->get_datall('tbl_aboutus',$cond); 
      foreach ($branchlist as $row) {
     $image=$row->image;
    }
     unlink("Upload/About/".$image);
   $array = array('id'=>$id);
   $this->Admin_model->delete_data('tbl_aboutus',$array);
    $this->session->set_flashdata('success_msg', 'Data have been Delete successfully.');
    redirect('admin/aboutus_list');
   }

//update status About
   public function update_status_aboutus(){
      $status = $this->input->post('status');
      $id = $this->input->post('id');
      $this->Admin_model->update_careers_aboutus($id,$status);
   }

//Maintenance ADD

public function add_aboutus(){
 if (isset($_POST['submit'])){
        $content = $this->input->post('content');
       
 if(!empty($_FILES['image']['name'])){
        $config['upload_path']   = './Upload/About/'; 
        $config['allowed_types'] = '*'; 
        $config['file_name']=time().rand(111111,999999);
          $this->load->library('upload');
          $this->upload->initialize($config);
          if( ! $this->upload->do_upload('image')){
          $data['error'] = $this->upload->display_errors();
         }else { 
            $uploadData = $this->upload->data();
             $file_name1 = $uploadData['file_name'];
          }
       }else{
          $file_name1='';
         }

       $datas['non_xss']=array('image'=>$file_name1,'content'=>$content);
     $data = $this->security->xss_clean($datas['non_xss']);
     $res =  $this->Common->insert_data('tbl_aboutus',$data);
    if($res){
    $this->session->set_flashdata('success_msg', 'Data have been added successfully.');
    redirect('admin/add_aboutus');
    }else{
    $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
    redirect('admin/add_aboutus');
      }
       }
 $this->load->view('admin/add_aboutus');

}


// edit Maintenance list
  public function edit_aboutus($id){
    $cond = array('id'=>$id);
   $result = $this->Common->get_one_row('tbl_aboutus',$cond);
   $data['aboutlist'] = $result;
   if(isset($_POST['update'])){
$content= $this->input->post('content');
//profile pic
 if($_FILES['image']['name']!=""){
  $config['upload_path']   = './Upload/Maintenance/'; 
    $config['allowed_types'] = '*'; 
    $config['file_name']=time().rand(111111,999999);
    $this->load->library('upload');
    $this->upload->initialize($config);
  if ( ! $this->upload->do_upload('image')){
    }else { 
      $uploadData = $this->upload->data();
      $array['image'] = $uploadData['file_name'];
    }
    }else{
    $cond1=array('id'=>$id);
    $branchlist=$this->Admin_model->get_datall('tbl_aboutus',$cond1); 
    foreach ($branchlist as $row) {
    $image=$row->image;
      }
    $array['image']=$image;
    }
$datas3['non_xss']=array('image'=>$array['image'],'content'=>$content);
$array3 = $this->security->xss_clean($datas3['non_xss']);
$cond = array('id'=>$id);
$this->Common->update_tbl('tbl_aboutus',$cond,$array3);
$this->session->set_flashdata('success_msg', 'Data have been updated successfully.');
redirect('admin/edit_aboutus/'.$id.'');
}
  $this->load->view('admin/edit_aboutus',$data);
  }


// enquiry Detail
public function enquiry_list() {
      $data['enquirylist'] = $this->Admin_model->get_all_data('tbl_enquiry');
      $this->load->view('admin/enquiry_list',$data);
    }


// delete contact
  public function delete_enquiry($id){
  $array = array('id' => $id);
  $this->Admin_model->delete_data('tbl_enquiry', $array);
  redirect('admin/enquiry_list');
 }

}

