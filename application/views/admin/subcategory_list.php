<?php
include ('header.php');
?>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="header-icon">
<i class="fa fa-list-alt"></i>
</div>
<div class="header-title">
<form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
<div class="input-group">
<input type="text" name="q" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
</span>
</div>
</form>   
<h1>SubCategory </h1>
<small>SubCategory list</small>
<ol class="breadcrumb hidden-xs">
<li><a href="<?php echo base_url();?>dashboard"><i class="pe-7s-home"></i> Home</a></li>
<li class="active">SubCategory List</li>
</ol>
</div>
</section>
<?php if($this->session->flashdata('success_msg')){ ?>
<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Success!</strong> <?php echo $this->session->flashdata('success_msg');?>
</div>

<?php }else if($this->session->flashdata('error_msg')) {?>
<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert">&times;</a>
<strong>Error!</strong> <?php echo $this->session->flashdata('error_msg');?>
</div>
<?php }?>  
<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="btn-group"> 
<a class="btn btn-success" href="<?php echo base_url();?>admin/add_subcategory"> <i class="fa fa-plus"></i> Add SubCategory
</a>  
</div>        
</div>
<div class="panel-body">
<div class="table-responsive">
<table id="example" class="table table-bordered table-hover">
<thead>
<tr>
<th> No</th>
<th>Status/Action</th>
<th>Image/Name</th>
<th>Info</th>
<th>Description</th>


</tr>
</thead>
<tbody>
<?php 
$i=1; 
foreach($subcategorys as $row){
?>
<tr>  
<td>
<label><?php echo $i;?></label>   
</td>
<td><i data="<?php echo $row->subid;?>" class="status_checks btn
<?php echo ($row->status)?
'btn-success': 'btn-danger'?>"><?php echo ($row->status)? 'Active' : 'Inactive'?>
</i>
<br><br>

<a href="<?php echo site_url('admin/edit_subcategory/'.$row->subid);?>"  class="btn btn-info btn-xs"  data-target="#ordine"><i class="fa fa-pencil"></i></a>
<a href="<?php echo site_url('admin/delete_subcategory/'.$row->subid);?>"  class="btn btn-danger btn-xs"  data-target="#ordine" onClick="return confirm('Are you sure you want to delete this Data ?');"><i class="fa fa-trash-o"></i></a>
</td>
<td><img src="<?php echo base_url();?>Upload/Subcategory/<?php echo $row->Images;?>" width="50px;"><br>
Category Name: <strong><?php echo $row->catename;?></strong>
<br>Sub Category Name: <strong><?php echo $row->subcatename;?></strong>
</td>
<td>


  <strong>Colors Image:</strong>&nbsp;<a href="<?=base_url();?>Upload/Subcategory/<?=$row->Colors;?>" download>Download</a>
 <br><strong>International Certification  :</strong>&nbsp;<a href="<?=base_url();?>Upload/Subcategory/<?=$row->certificates;?>" download>Download</a>
 <br><strong>Technical Specification :</strong>&nbsp; <a href="<?=base_url();?>Upload/Subcategory/<?=$row->specification;?>" download>Download</a>
 <br><strong>Technical Construction :</strong>&nbsp;<a href="<?=base_url();?>Upload/Subcategory/<?=$row->construction;?>" download>Download</a>
</td>
<td><?php echo $row->content;?></td>
</tr>

<?php
$i++;
}
?>
</tbody>
</table>
</div>

</div>
</div>

</div>

</div>
</section> <!-- /.content -->

</div> <!-- /.content-wrapper -->
<?php
include ('footer.php');
?>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

<script>
$(document).ready(function() {
$('#example').DataTable( {
dom: 'Bfrtip',
buttons: [
'copyHtml5',
'excelHtml5',
'csvHtml5',
'pdfHtml5'
]
} );
} );
</script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
var status = ($(this).hasClass("btn-success")) ? '0' : '1';
var msg = (status=='0')? 'Deactivate' : 'Activate';
if(confirm("Are you sure to "+ msg)){
var current_element = $(this);
url = "<?=base_url();?>admin/update_status_Subcategory";
$.ajax({
type:"POST",
url: url,
data: {subid:$(current_element).attr('data'),status:status},
success: function(data)
{   
location.reload();
}
});
}      
});
</script>