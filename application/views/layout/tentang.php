<!DOCTYPE HTML>
<head>
<title>Concept</title>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/pribadi/style.css"/>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>tentang/css/style.css">
<!-- Contact Form -->
<link href="contact-form/css/style.css" media="screen" rel="<?php echo base_url();?>tentang/stylesheet" type="text/css">
<!-- JS Files -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="<?php echo base_url();?>tentang/js/jquery.tools.min.js"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
<!-- Main Menu -->
<div class="navigation center" style="font-family: electrical Regular">
    <ul>
     <li><a><a href="http://localhost/toko_mobil/index.php/halaman"> Home </a></li>
     <li><a><a href="http://localhost/toko_mobil/index.php/tentang">About</a></li>
     <li><a><a href="http://localhost/toko_mobil/">Shoping</a></li>
     <li><a><a href="http://localhost/toko_mobil/index.php/profile">Profile</a></li>
     <li><a><a href="http://localhost/toko_mobil/index.php/welcome/cart">Cart View</a></li>
   </ul>
 </div>
<div id="container">
  <div id="site_title"><a href="index.html"><img src="<?php echo base_url();?>tentang/img/logo.png" alt=""></a></div>
  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
      <div> <img src="<?php echo base_url();?>tentang/img/demo/1.jpg" alt="">
        <h2>Mauris elementum</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="http://localhost/toko_mobil/" class="button">Buy Now</a></p>
      </div>
      <div> <img src="<?php echo base_url();?>tentang/img/demo/2.jpg" alt="">
        <h2>Nulla hendrerit</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="http://localhost/toko_mobil/" class="button">Buy Now</a></p>
      </div>
      <div> <img src="<?php echo base_url();?>tentang/img/demo/3.jpg" alt="">
        <h2>Mauris elementum</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"> <a href="http://localhost/toko_mobil/" class="button">Buy Now</a></p>
      </div>
      <div> <img src="<?php echo base_url();?>tentang/img/demo/4.jpg" alt="">
        <h2>Nam tempor nibh</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"> <a href="http://localhost/toko_mobil/" class="button">Buy Now</a></p>
      </div>
      <div> <img src="<?php echo base_url();?>tentang/img/demo/5.jpg" alt="">
        <h2>Supercar</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"> <a href="http://localhost/toko_mobil/" class="button">Buy Now</a></p>
      </div>
    </div>
    <!-- END tab panes -->
    <br clear="all">
    <!-- navigator -->
    <div id="prod_nav">
      <ul>
        <li><a href="#1"><img src="<?php echo base_url();?>tentang/img/demo/1.jpg" width="160" alt=""><strong>Class aptent</strong> $ 199</a></li>
        <li><a href="#2"><img src="<?php echo base_url();?>tentang/img/demo/2.jpg" width="160" alt=""><strong>Sed dui risus</strong> $ 125</a></li>
        <li><a href="#3"><img src="<?php echo base_url();?>tentang/img/demo/3.jpg" width="160" alt=""><strong>Pellentesque quis</strong> $ 480</a></li>
        <li><a href="#4"><img src="<?php echo base_url();?>tentang/img/demo/4.jpg" width="160" alt=""><strong>Mauris elementum</strong> $ 1099</a></li>
        <li><a href="#5"><img src="<?php echo base_url();?>tentang/img/demo/5.jpg" width="160" alt=""><strong>Cras et malesuada</strong> $ 99</a></li>
      </ul>
    </div>
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
  <div style="clear:both"></div>
  <div class="one-third">
    <h2>Business Solutions</h2>
    <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida.</p>
    <p style="text-align:right; margin-right: 15px"><a href="#" class="button_small">Find out more</a></p>
  </div>
  <div class="one-third">
    <h2>Become a Partner</h2>
    <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida.</p>
    <p style="text-align:right; margin-right: 15px"><a href="#" class="button_small">Contact Us Today</a></p>
  </div>
  <div class="one-third last">
    <h2>Latest News</h2>
    <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida.</p>
    <p style="text-align:right; margin-right: 15px"><a href="#" class="button_small">Read Article</a></p>
  </div>
  <div style="clear:both"></div>
  <div class="box_highlight" style="margin-top:40px">
    <h2 style="text-align:center">Some kind of sales pitch goes here!</h2>
  </div>
  
</div>
<!-- END footer -->
</body>
</html>