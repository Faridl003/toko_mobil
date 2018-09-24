<!DOCTYPE html>
<html>
   <head>
      <title>
     Pendaftaran Akun
   </title>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/login/login.css"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/login/login.css"/>

      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/bootstrap.min.css"/>

          <!-- Slick -->
          <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/slick.css"/>
          <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/slick-theme.css"/>

          <!-- nouislider -->
          <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/nouislider.min.css"/>

          <!-- Font Awesome Icon -->
          <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css2/font-awesome.min.css">

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
            Sign Up
         </div>
 
     <?php echo form_open('register');?>
     <center><p>Nama:</p>
     <p>
     <input class="form-control" type="text" name="name" value="<?php echo set_value('name'); ?>"/>
     </p>
     <p> <?php echo form_error('name'); ?> </p>
 
     <p>Username:</p>
     <p>
     <input class="form-control" type="text" name="username" value="<?php echo set_value('username'); ?>"/> 
     </p>
     <p> <?php echo form_error('username'); ?> </p>
 
     <p>Email:</p>
     <p>
     <input class="form-control" type="text" name="email" value="<?php echo set_value('email'); ?>"/>
     </p>
     <p> <?php echo form_error('email'); ?> </p>
 
     <p>Password:</p>
     <p>
     <input class="form-control" type="password" name="password" value="<?php echo set_value('password'); ?>"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>
 
     <p>Password Confirm:</p>
     <p>
     <input class="form-control" type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
     </p>
     <p> <?php echo form_error('password_conf'); ?> </p>
 
     <p>
     <input class="primary-btn cta-btn" style="padding: 12px 80px;" type="submit" name="btnSubmit" value="Sign Up">
         </p></center>
 
     <?php echo form_close();?>
 
     <p>


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
      <!--footer-->
      <footer class="animated fadeIn" style="font-family: electrical Regular">
         &copy; 2018. Miftah Faridl.
      </footer>
   </body>
</html>
