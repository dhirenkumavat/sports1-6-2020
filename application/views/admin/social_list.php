<?php
include ('header.php');
?>


<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="header-icon">
<i class="fa fa-sliders"></i>
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
<h1>Social </h1>
<small>Social list</small>
<ol class="breadcrumb hidden-xs">
<li><a href="<?php echo base_url();?>dashboard"><i class="pe-7s-home"></i> Home</a></li>
<li class="active">Social List</li>
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
<!-- <div class="panel-body">
<form class="col-sm-12" method="post" enctype="multipart/form-data">

<div class="col-sm-6 form-group">
<label> Social Type (facebook,twitter,linkedin) </label>
<input type="text" class="form-control" id name="type" placeholder=" " required>
</div>
<div class="col-sm-6 form-group">
<label> Link</label>
<input type="Url" class="form-control" placeholder="" name="link" required>
</div>


<div class="col-sm-12 reset-button">
<button type="submit" name="submit" class="btn btn-success" value=""><a style="color:white;">Add</a></button>
</div>
</form>
</div> -->
<div class="panel-body">

<div class="table-responsive">
<table id="example" class="table table-bordered table-hover">
<thead>
<tr>
  <th> No</th>
 <th>Type </th>
  <th>Link </th>
   <th>Status </th>
 <th>Action</th>
</tr>
</thead>
<tbody>
<?php 
$i=1; 
foreach($sociallist as $row){
?>
<tr>  
<td>
  <label><?php echo $i;?></label>   
</td>
<td><?php echo $row->type;?></td>
<td><?php echo $row->links;?></td>
<td><i data="<?php echo $row->id;?>" class="status_checks btn
  <?php echo ($row->status)?
  'btn-success': 'btn-danger'?>"><?php echo ($row->status)? 'Active' : 'Inactive'?>
 </i></td>
<td>
<a href="<?php echo site_url('admin/edit_social/'.$row->id);?>"  class="btn btn-info btn-xs"  data-target="#ordine"><i class="fa fa-pencil"></i></a>
<a href="<?php echo site_url('admin/delete_social/'.$row->id);?>"  class="btn btn-danger btn-xs"  data-target="#ordine" onClick="return confirm('Are you sure you want to delete this Data ?');"><i class="fa fa-trash-o"></i></a>


</td>
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
        url = "<?=base_url();?>admin/update_status";
        $.ajax({
          type:"POST",
          url: url,
          data: {id:$(current_element).attr('data'),status:status},
          success: function(data)
          {   
            location.reload();
          }
        });
      }      
    });
</script>