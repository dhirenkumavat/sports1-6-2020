<div class="ec-main-section ec-full-service">
                <?php
                  if(count($subcategorylist)>0){

                    foreach ($subcategorylist as $row) {?>
<div class="col-md-12">
	 <h2 style="padding-left: 23px;font-weight: bold;"><?php echo $row->subcatename;?></h2>
  <div class="col-md-6">
 
<p><?php echo $row->content;?></p>
</div>
<div class="col-md-6">
	<?php if($row->Images==NULL){

	}else{?>
	<img src="<?=base_url();?>Upload/Subcategory/<?=$row->Images;?>">
<?php }?>
</div>
  </div>
    

<?php } }?>
</div>
     <?php include('footer.php');?>







