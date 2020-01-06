<style type="text/css">
  li {
    line-height: 28px;
    list-style: disc inside none;
    text-align: -webkit-left;
}


* {
  margin: 0;
  padding: 0;
  word-wrap: break-word;
  box-sizing: border-box;
}

body {
  font-family: 'Source Sans Pro', sans-serif;
  color: #6e6e6e;
  font-size: 12px;
}

img {
  border: 0;
}

ul {
  list-style: none;
}

.center {
  width: 1100px;
  margin: auto;
}

.loader {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  position: absolute;
  z-index: 1;
  border: 10px solid #efefef;
  border-top: 10px solid #ff8f3f;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, .3);
  top: 50%;
  left: 50%;
  transition: .3s;
  transform: translate(-50%, -50%) rotate(0deg);
  animation: loader 2s linear infinite;
}

.loader-inner {
  width:40px;
  height: 40px;
  margin: auto;
  transform: translate(0, 0) rotate(0deg);
  border-radius: 50%;
  border: 8px solid #e2e2e2;
  border-bottom: 8px solid #66a0ff;
  animation: loaderInner 1s linear reverse infinite;
}

@keyframes loader {
  100% {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}

@keyframes loaderInner {
  100% {
    transform: translate(0, 0) rotate(360deg);
  }
}

/* Required styles for the slider */

.slider {
  position: relative;
  overflow: hidden;
  transition: 0.3s;
}

.slider ul {
  position: absolute;
}

.slider li {
  float: left;
  line-height: 0;
  text-align: center;
}

.slider li img {
  width: 100%;
}

.navigator {
  position: absolute;
  bottom: 5px;
  width: 100%;
  text-align: center;
}

.navigator span {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 3px;
  background: #606161;
  margin: 0 4px;
  transition: 0.1s;
  position: relative;
  top: 0;
}

.navigator span.active {
  background: orange;
  width: 10px;
  height: 10px;
}

.slider > span {
  position: absolute;
  top: 50%;
  background: rgba(0,0,0,0.5);
  z-index: 1;
      padding: 6px 10px;
    margin: 0px 80px 0;
  color: white;
  cursor: pointer;
  transition: 0.3s;
}

.prev {
  left: 0;
  transform: rotate(90deg);
  transform-origin: 0 0;
}

.next {
  right: -1px;
  transform: rotate(-90deg);
  transform-origin: 100% 0%;
}

.slider:hover span, .slider:hover .autoPlay {
  transform: rotate(0deg);
}

.autoPlay {
  position: absolute;
  bottom: 0;
  left: 0;
  color: white;
  transform: translateY(50px);
  transition: .3s;
}

.autoPlay label {
  background: rgba(0, 0, 0, .4);
  padding: 10px;
  display: block;
}

.autoPlay .chkbox {
  display: none;
}

.autoPlay .chkbox:checked + label {
  background: rgba(0, 0, 0, .7);
}

/* Make it adaptive to any layout */

@media (max-width: 1200px) { 
  .center {
    width: 100%;
    padding: 0 15px;
  }
}

/* Required styles for the slider */


</style>
        <div class="ec-main-content">
            <!--// Main Section \\-->
            <div class="ec-main-section ec-full-service">
                <div class="container">
                    <div class="row">
                     <div class="col-md-6">
                      <h2>Maintenance</h2>
                     </div>
<?php
                     if(count($maintenancelist)>0){
                      foreach ($maintenancelist as $row) {?>
                         <div class="col-md-12">
                            <div class="ec-simple-title">
                                <p><?=$row->content;?></p>
              

</div>
</div>
<?php } }?>
   <div class="col-md-12">
<h2 style="font-weight: bold;font-size: 27px;">Our Work</h2>
<div class="center">
  
    <div class="slider">      
      <ul>
        <?php
   if(count($sldds)>0){
                      foreach ($sldds as $row) {?>
  <li style="list-style: none;"><img src="<?=base_url();?>Upload/Maintenance/<?=$row->image;?>"  style="width:1020px;height: 360px"/></li>
      
      <?php } }?>
      </ul>
    </div>
  </div> 


</div>
</div>
 </div>
</div>
</div>
        <!--// Main Content \\-->
     <?php include('footer.php');?>
     <script type="text/javascript">
$(function(){
  
  var liCount = $('.slider li').length;
  var ulWidth = (liCount * 100);
  var liWidth = (100/liCount);
  var leftIncrement = (ulWidth/liCount);


  $('.slider').height($('.slider li img').height());
  //$('.slider').height('300px');
  
  $('.slider img').on('load', function(){
    $('.loader').fadeOut();
    $('.slider').height($(this).height());
  })

  $(window).resize(function() {
    $('.slider').css('height', $('.slider li img').height());
  }); 
  
  $('.slider ul').css('width', ulWidth + '%');
  $('.slider li').css('width', liWidth + '%');

  $('.slider').append(function() {
    $(this).append('<div class="navigator"></div>');
    $(this).prepend('<span class="prev">Prev</span><span class="next">Next</span>');
    

    $(this).find('li').each(function(){
      $('.navigator').append('<span></span>');
    });
  });

  $('.slider').css('height', $('.slider li img').height());
  
  $('.navigator span:first-child').addClass('active');


  if(liCount > 2) {
    $('.slider ul').css('margin-left', -leftIncrement + '%');
    $('.slider ul li:last-child').prependTo('.slider ul');
  } else if(liCount == 1) {
    $('.slider span').css('display', 'none');
    $('.autoPlay').css('display', 'none');
  } else if(liCount == 2) {
    $('.slider .prev').css('display', 'none');
  }

  function moveLeft() {
    $('.slider ul').animate({
      left : -leftIncrement + '%'
    }, 500, function(){
      $('.slider ul li:first-child').appendTo('.slider ul');
      $('.slider ul').css('left', '');

      if($('.navigator span').hasClass('active')) {

        if($('.navigator span.active').is(':last-child')) {
          $('span.active').removeClass('active');
          $('.navigator span:first-child').addClass('active');
        } else {
          $('span.active').next().addClass('active');
          $('span.active').prev().removeClass('active');
        }
      }
    });
  }


  function moveRight() {
    $('.slider ul').animate({
      left : leftIncrement + '%'
    }, 500, function(){
      $('.slider ul li:last-child').prependTo('.slider ul');
      $('.slider ul').css('left', '');

      if($('.navigator span').hasClass('active')) {

        if($('.navigator span.active').is(':first-child')) {
          $('span.active').removeClass('active');
          $('.navigator span:last-child').addClass('active');
        } else {
          $('span.active').prev().addClass('active');
          $('span.active').next().removeClass('active');
        }
      }
    });
  }

  
  if(liCount > 1) {
    invertalValue = setInterval(function() {
      moveLeft();
    }, 5000);
  }

  $('.prev').click(function(){
    moveRight();
  });

  $('.next').click(function(){
    moveLeft();
  });

});

/* Mamun khandaker */

     </script>