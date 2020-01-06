
<div class="ec-main-content">
<!--// Main Section \\-->
<div class="ec-main-section">
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="ec-gallery ec-simple-gallery">
           <h1></h1>
           <?php

if(count($sublist)>0){
 foreach ($sublist as $row) {
          ?>
           <h2><?php echo $row->subtype;?></h2>
              <ul class="row gallery">
               <?php
$sql ="SELECT * FROM `tbl_gallery` WHERE `subtype_id`='$row->subtypeid' AND status=1";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
  foreach ($query->result() as $row) {?>
                  <li class="col-md-3">
                      <figure>
<a href="#"><img src="<?=base_url();?>Upload/Gallery/<?=$row->image;?>" alt="" style="width:249px;height:188px;"></a>
                          <figcaption>
                              <a title="" rel="prettyPhoto[gallery1]" href="<?=base_url();?>Upload/Gallery/<?=$row->image;?>" class="ec-color"><i class="fa fa-compress"></i></a>
                          </figcaption>
                      </figure>
                  </li>
                <?php }}?>
                 
                
              </ul>
             <?php } }?>

          </div>
          
      </div>
  </div>
</div>
</div>
<!--// Main Section \\-->
</div>
<!--// Main Content \\-->
<?php include ('footer.php');