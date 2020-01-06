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
<div style="padding: 20px;background: white; border: 6px solid #033858;">
<h4>All fields marked with * are manadatory</h4>
 <form name="contactusform" id="contactusform" role="form" action="" method="post">
        <input type="hidden" name="product" id="product" value="sports flooring ">
                     <div class="form-group">
<label style="text-align: -webkit-left;font-weight: bolder;">Your Name *</label>
<input type="text" name="dname" id="name" placeholder="Enter Your Name" class="form-control" required=""> 

            </div>
             
          
            <div class="form-group">

              <label style="text-align: -webkit-left;font-weight: bolder;">Your Email *</label>

              <input type="text" name="email" id="email" placeholder="Enter Your Email Address" class="form-control" required="">
  </div>
           

            <div class="form-group">

              <label style="text-align: -webkit-left;font-weight: bolder;">Contact Number * </label>

              <input type="text" name="phone" id="phone" placeholder="Enter Your Contact Number" class="form-control" required="">
 
            </div>
       
             <div class="form-group">

              <label style="text-align: -webkit-left;font-weight: bolder;">City * </label>

              <input type="text" name="city" id="city" placeholder="Enter Your City Name" class="form-control" required="">
 
            </div>

            <div class="form-group">

              <label style="text-align: -webkit-left;font-weight: bolder;">Your  Message * </label>

              <textarea name="message" id="message" placeholder="Enter Your Message" class="form-control" required=""></textarea>

            </div>

            <input type="submit" name="submit" value="Submit" id="submitbutton" class="btn btn-default btn-contact">

          </form>
        </div>