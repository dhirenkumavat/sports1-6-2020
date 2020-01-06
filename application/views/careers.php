<div class="ec-main-content">
          <div class="ec-main-section ec-full-service">
                <div class="container">
                    <div class="row">
                     <div class="col-md-6">
                      <h2>Careers </h2>
                     </div>
                      <div class="col-md-12">
                     <?php
                     if(count($careerslist)>0){
                      foreach ($careerslist as $row) {?>
                        <div class="col-md-12">
                            <div class="ec-simple-title">
                             <p><?php 
echo $small = substr($row->content, 0,670);
?>
</div>
</div>
<div class="col-md-3">
<img src="<?=base_url();?>assets/images/interviewtips.jpg ">
</div>
  <div class="col-md-9">
<div class="ec-simple-title">
<p><?php echo $small = substr($row->content, 670,1500);?>
</div>
</div>                             
<?php }}?>
</div>
</div>
 </div>
</div>
</div>
        <!--// Main Content \\-->
     <?php include('footer.php');?>