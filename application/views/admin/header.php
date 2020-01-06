<?php
ob_start();
 if(!$user_id = $this->session->userdata('userid')){
   redirect('admin/index');
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Outdoor Sports Flooring Manufacturer & Sports Infrastructure Consultants in India | Mahira Sports</title>

    
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>assets1/images/favicon.png"/>

  
   <link href="<?php echo base_url();?>assets1/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
   <!-- Bootstrap -->
   <link href="<?php echo base_url();?>assets1/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  
   <link href="<?php echo base_url();?>assets1/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
   <!-- Pace css -->
   <link href="<?php echo base_url();?>assets1/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
   <!-- Font Awesome -->
   <link href="<?php echo base_url();?>assets1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <!-- Pe-icon -->
   <link href="<?php echo base_url();?>assets1/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
   <!-- Themify icons -->
   <link href="<?php echo base_url();?>assets1/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
       
        <link href="<?php echo base_url();?>assets1/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
        <!-- Monthly css -->
        <link href="<?php echo base_url();?>assets1/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
      
        <link href="<?php echo base_url();?>assets1/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
      
    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <a href="<?=base_url();?>admin/dashboard" class="logo"> <!-- Logo -->
                    
                    <span class="logo-lg">
                       <img src="<?=base_url();?>assets/images/logo-1.png">
                      
                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top ">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="fa fa-tasks" style="color: black;"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">


                            <!-- user -->
                            <li class="dropdown dropdown-user admin-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                <div class="user-image">
                                <img src="<?php echo base_url();?>assets1/dist/img/avatar4.png" class="img-circle" height="40" width="40" alt="User Image">
                                </div>
                                </a>
                                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url();?>admin/change_password"><i class="fa fa-sign-out"></i>Change Password</a></li>

                                    <li><a href="<?php echo base_url();?>admin/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
          <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                  <br>
                    <!-- sidebar menu -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
                            </a>
                        </li>

                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-list-alt"></i><span>Manage Category</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                           <li><a href="<?php echo base_url();?>admin/category_list"> Category List</a></li>
                           <li><a href="<?php echo base_url();?>admin/subcategory_list">SubCategory List</a></li>
                             </ul>
                        </li>
                        
 <li class="treeview">
                            <a href="#">
                                <i class="fa fa-product-hunt"></i><span>Manage Product</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/Feature_product_list">Feature Product List</a></li>

                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-file-image-o"></i><span>Manage Gallery</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                 <li><a href="<?php echo base_url();?>admin/type_list">Type list</a></li>
                                  <li><a href="<?php echo base_url();?>admin/subtype_list">Sub-Type list</a></li>
                            <li><a href="<?php echo base_url();?>admin/Gallery_list">Gallery list</a></li>
                            </ul>
                        </li>
                    
                        
					<li class="treeview">
                            <a href="#">
                                <i class="fa fa-sliders"></i><span>Manage Slider</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/slider_list"> Slider List</a></li>
                                 <li><a href="<?php echo base_url();?>admin/Maitnenanceslider_list"> Maitnenance Slider List</a></li>
                                
                            </ul>
                        </li>
                        
						<li class="treeview">
                            <a href="#">
                                <i class="fa fa-user-md"></i><span>Manage Page</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
				     <li><a href="<?php echo base_url();?>admin/aboutus_list">About Page</a></li>
				     <li><a href="<?php echo base_url();?>admin/careers_list">Career Page</a></li>
                      <li><a href="<?php echo base_url();?>admin/maintenance_list">Maitnenance Page</a></li>

                                
                            </ul>
                        </li>
                       <li class="treeview">
                            <a href="#">
                                <i class="fa fa-envelope"></i><span>Manage Enquiry</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                       <li><a href="<?php echo base_url();?>admin/enquiry_list">Enquiry List</a></li>
                      </ul>
                        </li>
					   <li class="treeview">
                            <a href="#">
                                <i class="fa fa-envelope"></i><span>Manage Contact </span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                       <li><a href="<?php echo base_url();?>admin/contactus_list">Contact List</a></li>
                      </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-building-o"></i><span>Manage Social</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                       <li><a href="<?php echo base_url();?>admin/social_list">Social List</a></li>
                      </ul>
                        </li>
                        
                       <!--  
                       <li class="treeview">
                            <a href="#">
                                <span class="pull-right-container">
                                </span>
                            </a>
                            <ul class="treeview-menu">

                                
                            </ul>
                        </li> -->
                    
            </ul>
        </div> <!-- /.sidebar -->
    </aside>
     
          