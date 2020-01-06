 <?php
include ('header.php');
?>
                <!-- =============================================== -->
                <!-- Content Wrapper. Contains page content -->
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
                            <h1>Update Slider</h1>
                            <small>Slider list</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="<?php echo base_url();?>dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">update Slider</li>
                            </ol>
                        </div>
                    </section>
                    <!-- Main content -->
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
                                            <a class="btn btn-primary" href="<?php echo base_url();?>slider_list"> <i class="fa fa-list"></i>  Slider List </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form class="col-sm-12" method="post" enctype="multipart/form-data">
                                             
                                            <div class="col-sm-6 form-group">
                                                <label> Title </label>
                                                <input type="text" value="<?php echo set_value('title', $listslider->title); ?>" class="form-control" name="title" placeholder=" " >
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label> Link</label>
                                                <input type="url" class="form-control" placeholder="" name="link" value="<?php echo set_value('link', $listslider->link); ?>">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label> Image</label>
                                                <input type="file" class="form-control" placeholder="" name="image" value="<?php echo set_value('image', $listslider->image); ?>">
                                                      <img src="<?php echo base_url();?>Upload/Slider/thumb/<?php echo  $listslider->image; ?>" style="height: 20px;">

										  </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Description</label>
                                                <textarea class="form-control" id="editor1"  placeholder="" name="description"><?php echo set_value('description', $listslider->description); ?></textarea>
                                            </div>

                                           

                                          

                                              <div class="col-sm-12 reset-button">
                                                 <button type="submit" name="update" class="btn btn-success" value=""><a style="color:white;">Update</a></button>
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