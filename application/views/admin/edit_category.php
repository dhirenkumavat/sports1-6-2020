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
                            <h1>Update Category</h1>
                            <small>Category list</small>
                            <ol class="breadcrumb hidden-xs">
                                <li><a href="<?php echo base_url();?>dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                <li class="active">Update Category</li>
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
                                            <a class="btn btn-primary" href="<?php echo base_url();?>category_list"> <i class="fa fa-list"></i>  Category List </a>  
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form class="col-sm-12" method="post" enctype="multipart/form-data">
                                             
                                            <div class="col-sm-4 form-group">
                                                <label> Category Name </label>
                                                <input type="text" value="<?php echo set_value('catename', $updatecate->catename); ?>" class="form-control" name="catename" placeholder=" " >
                                            </div>
                                           
                                            <div class="col-sm-4 form-group">
                                                <label> Category Image 1</label>
                                                <input type="file" class="form-control" placeholder="" name="image" value="<?php echo set_value('image', $updatecate->image); ?>">
                                                      <img src="<?php echo base_url();?>Upload/Category/<?php echo  $updatecate->image; ?>" style="height: 20px;">

						</div>
                                          <div class="col-sm-4 form-group">
                                                <label> Category Image 2</label>
                                                <input type="file" class="form-control" placeholder="" name="cateimage" value="<?php echo set_value('cateimage', $updatecate->cateimage); ?>">
                                                      <img src="<?php echo base_url();?>Upload/Category/<?php echo  $updatecate->cateimage; ?>" style="height: 20px;">

                                          </div>
                                            <div class="col-sm-12 form-group">
                                                <label>Description</label>
                                                <textarea rows="10" id="editor1"  class="form-control" placeholder="" name="message"><?php echo set_value('message', $updatecate->message); ?></textarea>
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
                <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

<script>
CKEDITOR.replace( 'editor1' );
 </script>

        <?php include ('footer.php');?>