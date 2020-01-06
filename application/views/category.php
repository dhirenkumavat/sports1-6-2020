<div class="ec-main-section ec-full-service">
                <?php
                  if(count($categorylist)>0){

                    foreach ($categorylist as $row) {?>
<div class="col-md-12" style="position: relative;height: 800px;background: url(<?=base_url();?>Upload/Category/<?=$row->cateimage;?>);background-size: contain;background-repeat: round;">
  <div class="col-md-6">
  
    <div style="position: relative;background: rgba(255, 255, 255, 0.98);padding: 23px;    margin-top: 30px;">
        <h2><?php echo $row->catename;?></h2>
<p><?php echo trim($row->message);?></p>

</div>
</div>
  </div>
    

<?php } }?>
</div>
     <?php include('footer.php');?>







