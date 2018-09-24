<!DOCTYPE html>
<html>
   <head>
      <title>Shrinath Nayak</title>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/login/login.css"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/login/login.css"/>

      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/bootstrap.min.css"/>

		

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/style.css"/>

      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>master/style.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>master/css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>master/css/animate.css">
      <link rel="shortcut icon" href="img/fav.ico" type="<?php echo base_url();?>master/image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="" />
      <meta name="keywords" content=" "/>
      <meta name="author" content="Shrinath Nayak">
      <meta name="robots" content="index, follow" />
   </head>
   <body>
      <!--Card-->
      <div class="card animated fadeIn">
         <center><img class="center animated rollIn" src="<?php echo base_url();?>master/img/ava.png" alt="avatar"></center>
         
         <hr>
         <div class="name" style="font-family: electrical Regular; color: black; font-size:25px">
            LOGIN REGISTER
         </div>
         <p class="subtitle"><?php echo form_open('login/ceklogin')?>
              <center><input style="padding: 10px" class="form-control" type="text" name="user" placeholder="Enter your Username"><br>
              <input class="form-control" type="password" name="pass" placeholder="Enter your Password"><br>
              </p><br>
         <input class="primary-btn cta-btn" style="padding: 12px 80px;" type="submit" name="login" value="LOGIN">
         </p></center>




         <p class="icons animated pulse">
            <a href="https://twitter.com/shrinath_nayak" target="_blank">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle-thin fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x"></i>
            </span>
            </a>
            <a href="https://www.facebook.com/Abhi.Nayak07" target="_blank">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle-thin fa-3x fa-stack-2x"></i>     
                <i class="fa fa-facebook fa-stack-1x"></i>
            </span>
            </a>
            <a href="https://plus.google.com/u/0/112966876017615905321" target="_blank">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle-thin fa-stack-2x"></i>
                <i class="fa fa-google-plus fa-stack-1x"></i>
            </span>
            </a>
            <a href="https://www.instagram.com/abhijeet_n7/" target="_blank">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle-thin fa-stack-2x"></i>
                <i class="fa fa-instagram fa-stack-1x"></i>
            </span>
            </a>
            <a href="https://github.com/shrinathnayak07" target="_blank">
            <span class="fa-stack fa-lg">
                <i class="fa fa-circle-thin fa-stack-2x"></i>
                <i class="fa fa-github fa-stack-1x"></i>
            </span>
            </a>
         </p>
      </div>
      <!--footer--> <a href="http://localhost/toko_mobil/index.php/register"><footer class="animated fadeIn" style="font-family: electrical Regular">
         Sign Up
      </footer></a><br>
      <footer class="animated fadeIn" style="font-family: electrical Regular">
         &copy; 2018. Miftah Faridl.
      </footer>
   </body>
</html>
