
        <div class="ec-main-content">
            <!--// Main Section \\-->
            <div class="ec-main-section ec-full-service">
                <div class="container">
                    <div class="row">
                     <div class="col-md-6">
                      <h2>About us</h2>
                     </div>
<div class="col-md-12">
    <?php
         if(count($aboutslist)>0){
          foreach ($aboutslist as $row){?>
            <h2 style="text-align: center;">Who we are?</h2>
                <div class="col-md-7">
   <div class="ec-simple-title"> 
<p><?=$row->content;?></p>
</div>
</div>
<div class="col-md-5">
  <br>
<img src="<?=base_url();?>Upload/About/<?=$row->image;?>">
                  </div>
<?php }}?>
</div>
</div>
 </div>
</div>
</div>
        <!--// Main Content \\-->
<?php include('footer.php');?>