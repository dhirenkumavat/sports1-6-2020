 <?php
include ('header.php');
?>
                <!-- =============================================== -->
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="header-icon">
                            <i class="pe-7s-note2"></i>
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
                            <h1>Change Password</h1>
                            <small></small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="<?php echo base_url();?>dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- Form controls -->
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group"> 
                                           
                                        </div>
                                    </div>
                                    <div class="panel-body">
                            <?php echo $this->session->flashdata('msg'); ?>

                                        <form class="col-sm-12" method="post" enctype="multipart/form-data">
                                             
                                            <div class="col-sm-6 form-group">
                                                <label>Old Password</label>
                                                <input type="text" class="form-control" name="old_pass " placeholder="" required>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label> New Password</label>
                                                <input type="text" class="form-control" placeholder="" name="new_pass" required>
                                            </div>
                                                <div class="col-sm-6 form-group">
                                                <label> Confirm Password</label>
                                                <input type="text" class="form-control" placeholder="" name="confirm_pass" required>
                                            </div>
                                           
                                              <div class="col-sm-12 reset-button">
                                                 <button type="submit" name="submit" class="btn btn-success" value=""><a style="color:white;">Reset</a></button>
                                             </div>
                                         </form>
                                     </div>
                                     
                                     <table class="table table-bordered table-hover">
                                         <thead>
                                                    <tr>
                                                        <th>Serial No</th>
                                                        <th>UserName</th>
                                                        <th>Password</th>
                                                        
                                                     
                                                    </tr>
                                                </thead>
                                                                <tbody>
									<?php 
								$i=1; 
								foreach($admins as $row){
	                            ?>

                                                    <tr>  
                                                     <td>
                                                         <label><?php echo $i;?></label>   
                                                     </td>
                                                     <td><?php echo $row->username;?></td>
                                                     <td><?php echo $row->password;?></td>
                                                    
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
                         
                     </section> <!-- /.content -->
                 </div> <!-- /.content-wrapper -->
                 <?php
include ('footer.php');
?>