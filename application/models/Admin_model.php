<?php

class Admin_model extends CI_Model {



 function __construct()

    {

        // Call the Model constructor

        parent::__construct();

        $this->load->database();

        $this->load->library('email');



    }
public function update_course_status($course_id,$status){
  $data['status'] = $status;
  $this->db->where('id', $course_id);
  $this->db->update('tbl_sociallink',$data);
}

public function update_slider_status($course_id,$status){
  $data['status'] = $status;
  $this->db->where('id', $course_id);
  $this->db->update('tbl_slider',$data);
}
public function update_categoty_status($id,$status){
  $data['status'] = $status;
  $this->db->where('id',$id);
  $this->db->update('tbl_category',$data);
}
public function update_subcategoty_status($subid,$status){
  $data['status'] = $status;
  $this->db->where('subid',$subid);
  $this->db->update('tbl_subcategory',$data);
}
public function update_Feature_product_status($id,$status){
  $data['status'] = $status;
  $this->db->where('id',$id);
  $this->db->update('tbl_featured_products',$data);
}
public function update_Maitnenances_status($id,$status){
  $data['status'] = $status;
  $this->db->where('id',$id);
  $this->db->update('tbl_slider',$data);
}

public function update_type_status($id,$status){
  $data['status'] = $status;
  $this->db->where('typeid',$id);
  $this->db->update('tbl_type',$data);
}
public function update_subtype_status($id,$status){
  $data['status'] = $status;
  $this->db->where('subtypeid',$id);
  $this->db->update('tbl_subtype',$data);
}
public function update_gallery_status($id,$status){
  $data['status'] = $status;
  $this->db->where('id',$id);
  $this->db->update('tbl_gallery',$data);
}
public function update_careers_status($id,$status){
  $data['status'] = $status;
  $this->db->where('id',$id);
  $this->db->update('tbl_careers',$data);
}
public function update_careers_maintenancelist($id,$status){
  $data['status'] = $status;
  $this->db->where('id',$id);
  $this->db->update('tbl_maintenance',$data);
}
public function update_careers_aboutus($id,$status){
  $data['status'] = $status;
  $this->db->where('id',$id);
  $this->db->update('tbl_aboutus',$data);
}

    public function get_all_data($tbl_name)

    {
        $query = $this->db->get($tbl_name);

        return $query->result();

    }


    public function get_data($tbl_name, $cond){
       $query = $this->db->get_where($tbl_name, $cond);
        return $query->result_array();

    }
    
    
     public function get_datall($tbl_name, $cond)

    {

        $query = $this->db->get_where($tbl_name, $cond);
        return $query->result();

    }

    public function get_like_data($tbl_name, $cond, $like_key)

    {

        $this->db->where($cond);

        $this->db->like($like_key);

        $query = $this->db->get($tbl_name);

        return $query->result();

    }
  
  
    public function get_or_where($tbl_name, $cond, $or_cond)

    {

        //print_r($cond);

        //print_r($or_cond);die();

        $this->db->where($cond);

        $this->db->or_where($or_cond);

        $query = $this->db->get($tbl_name);

        //print_r($query->result()); die();

        return $query->result();

    }

    public function get_limited_data($tbl_name, $cond, $limit, $start)

    {

        $this->db->where($cond);

        $this->db->limit($limit, $start);

        $query = $this->db->get($tbl_name);

        return $query->result();

    }

    public function get_limited_data_like_where($tbl_name, $cond, $like_key, $limit, $start)

    {

        //print_r($like_key);die();

        $this->db->where($cond);

        $this->db->like($like_key);

        $this->db->limit($limit, $start);

        $query = $this->db->get($tbl_name);

        return $query->result();

    }

    public function get_data_with_order_and_limit($tbl_name, $cond, $field, $method, $limit, $start)

    {

        $this->db->where($cond);

        $this->db->limit($limit, $start);

        $this->db->order_by("$field", "$method");

        $query = $this->db->get($tbl_name);

        return $query->result();

    }
    public function get_data_with_order($tbl_name, $cond, $field, $method)

    {

        $this->db->where($cond);

        $this->db->order_by("$field", "$method");

        $query = $this->db->get($tbl_name);

        return $query->result();

    }

    public function get_one_row($tbl_name, $cond)

    {

        $query = $this->db->get_where($tbl_name, $cond);

        return $query->row();

    }

    public function delete_data($tbl_name, $cond)

    {

        $this->db->delete($tbl_name, $cond);

    }

    public function update_tbl($tbl_name, $cond,$data)

    {

        $this->db->where($cond);

        $this->db->update($tbl_name,$data);

    }


    public function send_mail($to, $subject, $body, $from)

    {

        $headers='';

        $headers .= "Reply-To:".$from."\r\n"; 

        $headers .= "Return-Path:".$from."\r\n"; 

        $headers .= "From:Harmony System<".$from.">\r\n";

        $headers .= "Organization: Sender Organization\r\n";

        $headers .= "MIME-Version: 1.0\r\n";

        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        $headers .= "X-Priority: 3\r\n";

        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

        return mail($to, $subject, $body, $headers);

    }

    public function insert_data($tbl_name,$data)

    {

        $this->db->insert($tbl_name, $data);

        $insert_id = $this->db->insert_id();



        return  $insert_id;

    }
    
    public function add($data)
    {
        return $this->db->insert('Recent_post', $data);
    }


    public function select_max_id($tbl_name, $field)

    {

        $this->db->select_max("$field");

        $query = $this->db->get($tbl_name);

        

        return $result = $query->row();

    }

    public function select_min_id($tbl_name, $field)

    {

        $this->db->select_min("$field");

        $query = $this->db->get($tbl_name);

        

        return $result = $query->row();

    }

    public function get_data_using_join_two($main_tbl, $sec_tbl, $select_from_first, $select_from_second ,$join_on)

    {

       $this->db->select("$select_from_first, $select_from_second");

       $this->db->from("$main_tbl");

       $this->db->join("$sec_tbl", "$sec_tbl.$join_on = $main_tbl.$join_on", "LEFT");

       $query = $this->db->get();

       return $query->result();

    }

    function insert_entries($table_name,$table_data)
  {
    $this->db->insert($table_name,$table_data);

    return $this->db->insert_id();
    
  }
  
  
  
    public function get_data_using_join_two_with_where($main_tbl, $sec_tbl, $select_from_first, $cond , $select_from_second ,$join_on, $limit)

    {

       $this->db->select("$select_from_first, $select_from_second");

       $this->db->from("$main_tbl");

       $this->db->join("$sec_tbl", "$sec_tbl.$join_on = $main_tbl.$join_on", "LEFT");

       $this->db->where($cond);

       $query = $this->db->get();

       if ($limit == 'row') 
       {

           return $query->row();

       }

       if($limit == 'data')

       {

            return $query->result();

        }

    }

function custom_query_select($query)
    {
        $query = $this->db->query($query);
        //print_r($this->db->last_query());exit();
        $data = array();
if($query !== FALSE && $query->num_rows() > 0){
    foreach ($query->result_array() as $row) {
        $data[] = $row;
    }
}

return $data;
    }




function getcity(){
  $this->db->select("tbl_city.id,tbl_city.State_id,tbl_city.City_Name,tbl_city.Status,tbl_city.Create_Date,tbl_state.State");
  $this->db->from('tbl_city');
  $this->db->join('tbl_state','tbl_state.id = tbl_city.State_id');
  $query = $this->db->get();
  return $query->result();
 }


 function getsubcategory(){
  $this->db->select("tbl_subcategories.id,tbl_subcategories.cate_id,tbl_subcategories.SubCategoryName,tbl_subcategories.Status,tbl_subcategories.Create_Date,tbl_categories.CategoryName");
  $this->db->from('tbl_subcategories');
  $this->db->join('tbl_categories','tbl_categories.id = tbl_subcategories.cate_id');
  $query = $this->db->get();
  return $query->result();
 }
 function getsecondsubcategory(){
  $this->db->select("tbl_subsubcategory.id,tbl_subsubcategory.cate_id,tbl_subsubcategory.subcate_id,tbl_subsubcategory.subsubcategoryname,tbl_subsubcategory.Status,tbl_subsubcategory.Create_Date,tbl_subcategories.SubCategoryName,tbl_categories.CategoryName");
  $this->db->from('tbl_subsubcategory');
   $this->db->join('tbl_categories','tbl_categories.id = tbl_subsubcategory.cate_id');
  $this->db->join('tbl_subcategories','tbl_subcategories.id = tbl_subsubcategory.subcate_id');
  $query = $this->db->get();
  return $query->result();
 }
 
 function getthirdsubcategory(){
  $this->db->select("tbl_thirdsubcategory.id,tbl_thirdsubcategory.cate_id,tbl_thirdsubcategory.subcate_id,tbl_thirdsubcategory.secandsub_id ,tbl_thirdsubcategory.thirdsubcategoryname,tbl_thirdsubcategory.Status,tbl_thirdsubcategory.Create_Date,tbl_subcategories.SubCategoryName,tbl_categories.CategoryName,tbl_subsubcategory.subsubcategoryname");
  $this->db->from('tbl_thirdsubcategory');
   $this->db->join('tbl_categories','tbl_categories.id = tbl_thirdsubcategory.cate_id');
  $this->db->join('tbl_subcategories','tbl_subcategories.id = tbl_thirdsubcategory.subcate_id');
  $this->db->join('tbl_subsubcategory','tbl_subsubcategory.id = tbl_thirdsubcategory.secandsub_id');
  $query = $this->db->get();
  return $query->result();
 }

 function getmedicines(){
  $this->db->select("master_medicines.id,master_medicines.medicinesCategoryid,master_medicines.MedicinesName,master_medicines.Status,master_medicines.Create_Date,master_medicinescategory.medicinesCategoryName");
  $this->db->from('master_medicines');
  $this->db->join('master_medicinescategory','master_medicinescategory.id = master_medicines.medicinesCategoryid');
  $query = $this->db->get();
  return $query->result();
 }
 
 function getaccessories(){
  
  $this->db->select("tbl_accessories.id,tbl_accessories.product_id,tbl_accessories.accessories_name,tbl_accessories.image,tbl_accessories.Status,tbl_accessories.Create_Date,tbl_product.Titile");
  $this->db->from('tbl_accessories');
  $this->db->join('tbl_product','tbl_product.id = tbl_accessories.product_id');
 
  $query = $this->db->get();
 return $query->result();
  
   }
    function getusers(){
  $this->db->select("tbl_users.id,tbl_users.name,tbl_users.gst,tbl_users.email,tbl_users.company_name,tbl_users.company_type,tbl_users.address,tbl_users.mobile,
  tbl_users.State_id,tbl_users.City_Name,tbl_users.company_website,
  tbl_users.remark,tbl_users.status,tbl_users.Create_date,tbl_state.State,tbl_city.City_Name");
  $this->db->from('tbl_users');
  $this->db->join('tbl_state','tbl_state.id = tbl_users.State_id');
  $this->db->join('tbl_city','tbl_city.id = tbl_users.City_Name');
  $query = $this->db->get();
  return $query->result();
 }
 
function getproducts(){
$this->db->select("tbl_product.id,tbl_product.Titile,tbl_product.Sub_title,tbl_product.Price,tbl_product.Cate_id,tbl_product.Subcate_id,tbl_product.Secsubcate_id,tbl_product.thirdsubcate_id,tbl_product.Image,tbl_product.pro_image1,tbl_product.pro_image2 ,tbl_product.pro_image3,tbl_product.pro_image4,tbl_product.Product_Details,tbl_product.Specifications,tbl_product.Status,tbl_product.Create_Date");
  $this->db->from('tbl_product');
  
     
  $query = $this->db->get();

 
  return $query->result();
}


 

  public function get_all_images(){
  $this->db->select("tbl_newproduct.id,tbl_newproduct.pro_id,tbl_newproduct.Status,tbl_newproduct.Create_Date,tbl_product.Image");
  $this->db->from('tbl_newproduct');
  $this->db->join('tbl_product','tbl_product.id = tbl_newproduct.pro_id');

$query = $this->db->get();
  return $query->result();
}

public function get_all_pdf(){
  $this->db->select("tbl_pdf.id,tbl_pdf.product_id,tbl_pdf.catename,tbl_pdf.name,tbl_pdf.pdf,tbl_pdf.Status,tbl_pdf.Create_Date,tbl_product.Titile");
  $this->db->from('tbl_pdf');
  $this->db->join('tbl_product','tbl_product.id = tbl_pdf.product_id');

$query = $this->db->get();
  return $query->result();
}

function fetch_state($countryid)
 {
  $this->db->where('countryid', $countryid);
  
  $query = $this->db->get('state');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->state_id.'">'.$row->state_name.'</option>';
  }
  return $output;
 }
 
 
 
  // new function
         function custom_query($data){

            $query = $this->db->query($data);

            return $query->result();



        }
		// alax code
			 public function get_data1($catid)

    {
  $query = $this->db->query("select subcategory.*, category.category_name  from subcategory 
                             inner join category on category.id = subcategory.cat_id  where subcategory.cat_id = '".$catid."'
");
        return $query->result_array();

    }



}
?>