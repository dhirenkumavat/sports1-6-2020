<?php
include ('header.php');
?>
<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
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
<h1>Add SubCategory</h1>
<small>SubCategory</small>
<ol class="breadcrumb hidden-xs">
<li><a href="<?php echo base_url();?>dashboard"><i class="pe-7s-home"></i> Home</a></li>
<li class="active">Add SubCategory</li>
</ol>
</div>
</section>
<!-- Main content -->
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
<section class="content">
<div class="row">
<!-- Form controls -->
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="btn-group"> 
<a class="btn btn-primary" href="<?php echo base_url();?>admin/subcategory_list"> <i class="fa fa-sliders"></i>  SubCategory List </a>  
</div>
</div>
<div class="panel-body">
<form class="col-sm-12" method="post" enctype="multipart/form-data">
<div class="col-sm-4 form-group">
<label> Category Name </label>
<select class="form-control" name="cateid" required>
	<option value="">Please Select Category</option>
	<?php foreach ($catelist as $row) {?>
<option value="<?=$row->id ?>"><?=$row->catename ?></option>
	<?php }?>
</select>
</div>
<div class="col-sm-4 form-group">
<label> SubCategory Name </label>
<input type="text" class="form-control" name="subcatename" placeholder=" " required>
</div>
<div class="col-sm-4 form-group">
<label> Image </label>
<input type="file" class="form-control" placeholder="" name="Images" >
</div>

<div class="col-sm-3 form-group">
<label> Colors Image </label>
<input type="file" class="form-control" placeholder="" name="Colors" >
</div>
<div class="col-sm-3 form-group">
<label> International certification</label>
<input type="file" class="form-control" placeholder="" name="certificates" >
</div>
<div class="col-sm-3 form-group">
<label> Technical specification
 </label>
<input type="file" class="form-control" placeholder="" name="specification" >
</div>
<div class="col-sm-3 form-group">
<label> Technical construction</label>
<input type="file" class="form-control" placeholder="" name="construction" >
</div>

<div class="col-sm-12 form-group">
<label>Content</label>
<textarea class="form-control"  rows="10" placeholder="" id="editor1"  name="content"></textarea>
</div>
<div class="col-sm-12 reset-button">
<button type="submit" name="submit" class="btn btn-success" value=""><a style="color:white;">Add</a></button>
</div>
</form>
</div>
</div>
</div>
</div>

</section> <!-- /.content -->
</div> <!-- /.content-wrapper -->

<?php
include ('footer.php');
?>