        <footer id="ec-footer">
        
            <div class="ec-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget col-md-3 widget_text_info">
                            <div class="ec-section-heading">
                                <h2>Contact</h2></div>
                                <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <span>No 20, 20th main road, Ramaswamy layout, No 20, 20th main road, Ramaswamy layout,Bangalore 560078.</span>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>9148578813</span>
                                </li>
                            </ul>
                           
                        </aside>
                      <aside class="widget col-md-3 widget_categories">
                            <div class="ec-section-heading">
                                <h2>Quick Links</h2></div>
                            <ul>
<li><a href="<?=base_url();?>">Home</a></li>                      
<li><a href="<?=base_url();?>about-us">About Us</a></li>
<li><a href="<?=base_url();?>Maintenance">Maintenance</a></li>
<li><a href="<?=base_url();?>contactus">Contact-Us</a></li>
<li><a href="<?=base_url();?>careers">Careers</a></li>
<li><a href="<?=base_url();?>sitemap">Sitemap</a></li>


 </ul>
                        </aside>
                        <aside class="widget col-md-3 widget_categories">
                            <div class="ec-section-heading">
                                <h2>FEATURE PRODUCT</h2></div>
                            <ul>
                                <?php
                                $sql ="SELECT * FROM `tbl_featured_products` LIMIT 0,6";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
  foreach ($query->result() as $row) {?>

<li><a href="<?php echo base_url();?>featured_products/<?=$row->id;?>"><?=$row->name;?></a></li>
<?php
}
}
?>
                              
                               
                            </ul>
                        </aside>
                         <aside class="widget col-md-3 widget_categories">
                            <div class="ec-section-heading">
                                <h2> PRODUCT</h2></div>
                            <ul>
                                <?php
                                $sql ="SELECT * FROM `tbl_subcategory` LIMIT 0,6";
$query = $this->db->query($sql);
if ($query->num_rows() > 0) {
  foreach ($query->result() as $row) {?>

<li><a href="<?php echo base_url();?>products_category/<?=$row->subid;?>"><?=$row->subcatename;?></a></li>
<?php
}
}
?>
                              
                               
                            </ul>
                        </aside>
                        
                    </div>
                </div>
            </div>
            <!--// Footer Widget \\-->
            <!--// CopyRight Section \\-->
            <div class="ec-bottom-section">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="ec-copyright">
                                <p>© copyright 2020 Mahira Sports  all rights reserved</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="ec-right-section" style="float: right;">
                                <a href="" class="backtop-btn">Back to top <i class="fa fa-caret-up"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// CopyRight Section \\-->
        </footer>
    </div>
    <!--// Main Wrapper \\-->

    <!-- ModalLogin Box -->
    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="<?=base_url();?>assets/script/jquery.js"></script>
    <script src="<?=base_url();?>assets/script/modernizr.js"></script>
    <script src="<?=base_url();?>assets/script/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/script/jquery.dlmenu.js"></script>
    <script src="<?=base_url();?>assets/script/flexslider-min.js"></script>
    <script src="<?=base_url();?>assets/script/jquery.prettyphoto.js"></script>
    <script src="<?=base_url();?>assets/script/waypoints-min.js"></script>
    <script src="<?=base_url();?>assets/script/owl.carousel.min.js"></script>
    <script src="<?=base_url();?>assets/script/jquery.countdown.min.js"></script>
    <script src="<?=base_url();?>assets/script/fitvideo.js"></script>
    <script src="<?=base_url();?>assets/script/newsticker.js"></script>
    <script src="<?=base_url();?>assets/script/skills.js"></script>
    <script src="<?=base_url();?>assets/script/functions.js"></script>
    <script>
    var options = {
        newsList: "#ec-news",
        startDelay: 10,
        placeHolder1: ""
    }
    jQuery().newsTicker(options);
    </script>
</body>

</html>
