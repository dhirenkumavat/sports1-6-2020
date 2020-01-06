<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Outdoor Sports Flooring Manufacturer & Sports Infrastructure Consultants in India | Mahira Sports</title>
<!-- Css Files -->
<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/font-awesome.css" rel="stylesheet">
<link href="<?=base_url();?>assets/style.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/color.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/dl-menu.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/flexslider.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/prettyphoto.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/responsive.css" rel="stylesheet">
<!-- Css Files -->
</head>
<body>
<!--// Main Wrapper \\-->
<div class="ec-main-wrapper">

<div class="ec-loading-section"><div class="ball-scale-multiple"><div></div><div></div><div></div></div></div>
<!--// Main Header \\-->
<header id="ec-header">
<!--// TopSection \\-->
<div class="ec-top-strip">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="ec-strip-info">
<li><i class="fa fa-phone"></i> +9148578813</li>

<li><i class="fa fa-envelope-o"></i> <a href="#">info@example.com</a></li>
</ul>
<div class="ec-login-section">
<?php
if(count($sociallist)>0){
$type=array();
$links=array();
$status=array();
foreach ($sociallist as $row) {
$type[]=$row->type;
$links[]=$row->links;
$status[]=$row->status;
}
?>

<?php if($type[0]=='FACEBOOK' && $status[0]=='0'){

}elseif($type[0]=='FACEBOOK'){ ?>
<a href="<?=$links[0];?>" class="fa fa-facebook" target="_blank"></a>
<?php } ?>
<?php if($type[1]=='TWITTER' && $status[1]=='0'){
}elseif($type[1]=='TWITTER'){ ?>
<a href="<?=$links[1];?>" class="fa fa-twitter" target="_blank"></a>
<?php } ?>
<?php if($type[2]=='LINKEDIN' && $status[2]=='0'){
}elseif($type[2]=='LINKEDIN'){ ?>
<a href="<?=$links[2];?>" class="fa fa-linkedin" target="_blank"></a>
<?php }?>
<?php if($type[3]=='GMAIL' && $status[3]=='0'){
}elseif($type[3]=='GMAIL'){ ?>
<a href="<?=$links[3];?>" class="fa fa-google" target="_blank"></a>
<?php } ?>
<?php if($type[4]=='INSTAGRAM' && $status[4]=='0'){
}elseif($type[4]=='INSTAGRAM'){ ?>
<a href="<?=$links[4];?>" class="fa fa-instagram" target="_blank"></a>
<?php } ?>
<?php if($type[5]=='YOUTUBE' && $status[5]=='0'){
}elseif($type[5]=='YOUTUBE'){ ?>
<a href="<?=$links[5];?>" class="fa fa-youtube-play" target="_blank"></a>
<?php } ?>
<?php if($type[6]=='PINTEREST' && $status[6]=='0'){
}elseif($type[6]=='PINTEREST'){ ?>
<a href="<?=$links[6];?>" class="fa fa-pinterest" target="_blank"></a>
<?php } ?>

<?php  } ?>




</div>
</div>
</div>
</div>
</div>
<!--// TopSection \\-->
<!--// Main Header \\-->
<div class="ec-main-navsection">
<div class="container">
<a href="<?=base_url();?>" class="ec-logo"><img src="<?=base_url();?>assets/images/logo-1.png" alt="mspoints" style="width: 50%;"></a>
<div class="ec-right-section">
<nav class="ec-navigation">
<ul>
<li class="<?=(current_url()==base_url('')) ? 'active':''?>"><a href="<?=base_url();?>">Home</a></li>
<li class="<?=(current_url()==base_url('about-us')) ? 'active':''?>"><a href="<?=base_url();?>about-us">about us</a></li>

<li><a href="#">FEATURE PRODUCTS</a>
<ul class="as-dropdown">
     <?php
if(count($featuredproducts)>0){

foreach ($featuredproducts as $row) {?>
<li><a href="<?php echo base_url();?>featured_products/<?=$row->id;?>"><?=$row->name?></a></li>
<?php }}?>
</ul>
</li>
<li><a href="#"> PRODUCTS</a>
<ul class="as-dropdown">
		<?php
if(count($categorylist)>0){

foreach ($categorylist as $row) {?>
<li class="<?=(current_url()==base_url('')) ? 'active':''?>"><a href="<?php echo base_url();?>category/<?=$row->id;?>"><?=$row->catename;?> </a>
<ul class="as-dropdown">
<?php

$sql ="SELECT * FROM `tbl_subcategory` WHERE `cateid`='$row->id'";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
  foreach ($query->result() as $row) {?>

<li><a href="<?php echo base_url();?>products_category/<?=$row->subid;?>"><?=$row->subcatename;?></a></li>
<?php
}
}
?>
</ul>
</li>
<?php }}?>
</ul>
</li>
<li class="<?=(current_url()==base_url('Gallery')) ? 'active':''?>"><a href="">Gallery</a>

<ul class="as-dropdown">
    <?php
if(count($typelist)>0){

foreach ($typelist as $row) {?>
<li class="<?=(current_url()==base_url('')) ? 'active':''?>"><a href="<?php echo base_url();?>gallery/<?=$row->typeid;?>"><?=$row->type_name;?></a>
    

<?php }}?>
</ul>
</li>
<li class="<?=(current_url()==base_url('careers')) ? 'active':''?>"><a href="<?=base_url();?>careers">Careers</a></li>
<li class="<?=(current_url()==base_url('Maintenance')) ? 'active':''?>"><a href="<?=base_url();?>Maintenance">Maintenance</a></li>
<li class="<?=(current_url()==base_url('contactus')) ? 'active':''?>"><a href="<?=base_url();?>contactus">contact us</a></li>
</ul>
</nav>





<!--// Responsive Menu //-->
<div id="as-menu" class="as-menuwrapper">
<button class="as-trigger">Open Menu</button>
<ul class="as-menu">
<li class="<?=(current_url()==base_url('')) ? 'active':''?>"><a href="<?=base_url();?>">Home</a></li>
<li class="<?=(current_url()==base_url('about-us')) ? 'active':''?>"><a href="<?=base_url();?>about-us">about us</a></li>
<li><a href="#">FEATURE PRODUCTS</a>
<ul class="as-submenu">
 <?php
if(count($featuredproducts)>0){

foreach ($featuredproducts as $row) {?>
<li><a href="#"><?=$row->name?></a></li>
<?php }}?>
</ul>
</li>
<li><a href="#"> PRODUCTS</a>
<ul class="as-submenu">
		<?php
if(count($categorylist)>0){
foreach ($categorylist as $row) {?>
<li><a href="<?php echo base_url();?>category/<?=$row->id;?>"><?=$row->catename;?> </a>
<ul class="as-submenu">
<?php

$sql ="SELECT * FROM `tbl_subcategory` WHERE `cateid`='$row->id'";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
  foreach ($query->result() as $row) {?>

<li><a href="<?php echo base_url();?>products_category/<?=$row->subid;?>"><?=$row->subcatename;?></a></li>
<?php
}
}
?>
</ul>
</li>
<?php }}?>
</ul>
</li>
<li><a href="">Gallery</a>
<ul class="as-submenu">
   <?php
if(count($typelist)>0){
foreach ($typelist as $row) {?>
<li><a href="<?php echo base_url();?>gallery/<?=$row->typeid;?>"><?=$row->type_name;?></a>
   <?php }}?>
</ul>
</li>
<li class="<?=(current_url()==base_url('careers')) ? 'active':''?>"><a href="<?=base_url();?>careers">Careers</a></li>
<li class="<?=(current_url()==base_url('Maintenance')) ? 'active':''?>"><a href="<?=base_url();?>Maintenance">Maintenance</a></li>
<li class="<?=(current_url()==base_url('contactus')) ? 'active':''?>"><a href="<?=base_url();?>contactus">contact us</a></li>
</ul>
</div>
<!--// Responsive Menu //-->
<!--  <ul class="ec-user-section">
<li><a href="#" class="ec-search-popup-btn"><i class="fa fa-search"></i></a>
<form class="ec-search-popup">
<input type="text" value="Search Key Word" onblur="if(this.value == '') { this.value ='Search Key Word'; }" onfocus="if(this.value =='Search Key Word') { this.value = ''; }">
<input type="submit" value="">
<i class="fa fa-search"></i>
</form>
</li>

</ul> -->
</div>
</div>
</div>
<!--// Main Header \\-->
</header>