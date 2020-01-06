
        <div class="ec-mini-header">
            <span class="ec-blue-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ec-mini-title">
                            <h1>Contact Us</h1>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Banner \\-->
        <!--// Main Content \\-->
        <div class="ec-main-content">
            <!--// Main Section \\-->
            <div class="ec-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="ec-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497698.6600798865!2d77.35073573336324!3d12.954517008640542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1578126945990!5m2!1sen!2sin"  height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                               

                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="widget widget-userinfo">
                                <div class="ec-fancy-title">
                                    <h2>Head Office </h2>
                                </div>
                                <ul>
                                    <li> <i class="fa fa-bank"></i>
                                        <p>No 20, 20th main road, Ramaswamy layout, No 20, 20th main road, Ramaswamy layout,Bangalore 560078.</p>
                                    </li>
                                    <li> <i class="fa fa-phone"></i>
                                        <p>9148578813</p>
                                    </li>
                                    <li> <i class="fa fa-fax"></i>
                                        <p>00 44 303 123456</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-userinfo">
                                <div class="ec-fancy-title">
                                    <h2>Email Me</h2>
                                </div>
                                <ul>
                                    <li> <i class="fa fa-envelope"></i>
                                        <p><a href="#">info@MSSports.com</a></p>
                                    </li>
                                    <li> <i class="fa fa-envelope-o"></i>
                                        <p><a href="#">info@MSSports.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                         <div class="col-md-4">
                            <div class="widget widget-userinfo">
                             <img src="<?=base_url();?>assets/images/1.jpg" style="
    height: 338px;
">
                                
                            </div>
                         
                        </div>
                        <div class="col-md-8">
                            <!--// Comment Form //-->
                            <div class="ec-form">
                                <div class="ec-fancy-title">
                                    <h2>Contact Form</h2> </div>
                                <form action="" method="post">
                                    <p>
                                        <input type="text"  placeholder="Your Name" name="usrname" required> </p>
                                    <p>
                                        <input type="email"   placeholder="Email" name="email" required> </p>
                                       <p>
                                        <input type="text" placeholder="Contact Number"  name="mobile" required> </p>
                                      <p class="ec-comment">
                                        <textarea placeholder="Message" name="msg"></textarea>
                                    </p>
                                    <p class="ec-submit">
                                        <input type="submit" name="submit" value="Send" class="ec-bgcolor"> </p>
                                </form>
                            </div>
                            <!--// Comment Form //-->
                        </div>
                       
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
        </div>
        <!--// Main Content \\-->
<?php include('footer.php');?>