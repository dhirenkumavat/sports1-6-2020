<div class="ec-main-section ec-full-service">
                <?php
                  if(count($featuredproductslist)>0){

                    foreach ($featuredproductslist as $row) {?>
<div class="col-md-12" style="
    position: relative;
    min-height: 625px;
    height: 100%;
    width: 100%;
    background: url(<?=base_url();?>Upload/Featured_Products/<?=$row->image;?>);
    background-size: cover;
">
<div class="col-md-4" style="padding-top: 50px;">
   <h2 style="font-weight: bold;color: white;"><?php echo $row->name;?></h2>
    <?php include 'from.php';?>
    </div>
  </div>
    <div class="ec-main-content">
            <!--// Main Section \\-->
            <div class="ec-main-section ec-full-service">
                  <div class="container">
                    <div class="row">
                     <div class="col-md-12">
                            <div class="ec-simple-title">
                                <h2><?php echo $row->heading;?></h2>
                                <p><?php echo $row->content;?></p>
</div>
                        </div>
                        </div>
</div>   
                                
</div></div></div>
</div>
</div>

<?php } }?>

     <?php include('footer.php');?>