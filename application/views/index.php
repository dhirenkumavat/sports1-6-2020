<div class="ec-mainbanner">
            <div class="flexslider">
                <ul class="slides">
<?php
if(count($sldd)>0){
    foreach ($sldd as $row) {?>
<li>
<img src="<?=base_url();?>Upload/Slider/<?=$row->image;?>" alt="<?=$row->image;?>">
                        <span class="ec-transparent-color"></span>
                        <div class="ec-caption">
                            <div class="container">
                                <div class="caption-inner-wrap">
                                    <div class="clearfix"></div>
                                    <h1><?=$row->title;?></h1>
                                    <p><?=$row->description;?></p>
                                    <a href="<?=$row->link;?>" class="ec-bgcolor">Read More</a>
                                </div>
                            </div>
                        </div>
                    </li>
<?php }
}?>
 </ul>
</div>
        </div>
       <br>
       <br>
            <div class="ec-main-section">
                <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                            <h2 style="padding-top: 23px;text-align: center;">About us</h2>
                            <div class="ec-blog ec-blog-grid">
                              <?php
                                if(count($aboutslist)>0){
                                    foreach ($aboutslist as $row){?>
                                    <p><?php 
echo $small = substr($row->content, 0,705);

?>
</p>
<?php }}?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            <div class="ec-main-content">
            <!--// Main Section \\-->
            <div class="ec-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-gallery ec-modren-gallery">
                                <ul class="row gallery">
                                    <?php
                                     if(count($categorylist)>0){
                                    foreach ($categorylist as $row){?>

                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="<?=base_url();?>Upload/Category/<?=$row->image;?>" alt=""></a>
                                            
                                        </figure>
                                        <div class="ec-gallery-info">
                                           <h2><a href="<?php echo base_url();?>category/<?=$row->id;?>"><?=$row->catename;?></a></h2>

                                            <p><?php echo $small = substr($row->message, 0,200);?>...<a href="<?php echo base_url();?>category/<?=$row->id;?>" style="color:#A91E31">Know more  »</a></p>
                                        </div>
                                    </li>
                                   <?php } }?>
                                   
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
            
        </div>
        </div>
        <!--// Main Content \\-->
<?php include('footer.php');?>