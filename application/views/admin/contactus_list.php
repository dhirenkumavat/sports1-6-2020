<?php
include ('header.php');
?>

<!-- =============================================== -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="header-icon">
<i class="fa fa-phone"></i>
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
<h1> Contact</h1>
<small> Contact list</small>
<ol class="breadcrumb hidden-xs">
<li><a href="<?php echo base_url();?>dashboard"><i class="pe-7s-home"></i> Home</a></li>
<li class="active">Contact</li>
</ol>
</div>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-bd lobidrag">
<div class="panel-heading">
<div class="btn-group"> 

</div>        
</div>
<div class="panel-body">
<div class="table-responsive">
<table id="example" class="table table-bordered table-hover">
<thead>
 <tr>
     <th> No</th>
     <th> Name </th>
     <th>Email </th>
   <th>Mobile No. </th>
    <th>Message</th>
      <th>Action</th>
   </tr>
</thead>
<tbody>
<?php 
$i=1; 
foreach($contactlist as $row){
?>

 <tr>  
  <td>
      <label><?php echo $i;?></label>   
  </td>
 <td><?php echo $row->name;?></td>
<td><?php echo $row->email;?></td>
<td><?php echo $row->mobile_no;?></td>
<td><?php echo $row->msg;?></td>
 <td><a href="<?php echo site_url('admin/delete_contact/'.$row->id);?>"  class="btn btn-danger btn-xs"  data-target="#ordine"><i class="fa fa-trash-o"></i></a>
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
