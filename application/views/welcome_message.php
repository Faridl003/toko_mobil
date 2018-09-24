<!DOCTYPE html>
<html>
<head>
	<title>Front-End Toko Online</title>

	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	  <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/pribadi/style.css"/>

		<!-- Bootstrap -->
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
</head>
<body background="<?php echo base_url();?>bootstrap/img2/">
	<?php $this->load->view('layout/top_menu') ?>

	 <div class="navigation center" style="font-family: electrical Regular">
    <ul>
     <li><a><a href="http://localhost/toko_mobil/index.php/halaman"> Home </a></li>
     <li><a><a href="http://localhost/toko_mobil/index.php/tentang">About</a></li>
     <li><a><a href="http://localhost/toko_mobil/">Shoping</a></li>
     <li><a><a href="http://localhost/toko_mobil/index.php/profile">Profile</a></li>
     <li><a><a href="http://localhost/toko_mobil/index.php/welcome/cart">Cart View</a></li>

   </ul><img src="<?php echo base_url();?>bootstrap/pribadi/header-img.png" height="100%" width="100%">
 </div><br><br><br>
 </div>


<center><h1 style= "font-family: electrical Regular">Car Products</h1></center><br>
	
	<div class="row">
		<?php foreach($products as $product) : ?>
		<div class="col-sm-3 col-md-3">
			<div class="thumbnail">
				<?=img([
					'src'=>'uploads/' . $product->image,
					'style'=>'max-width: 150%; max-height:150%; height:150px'
				])?>
				<div class="caption">
					<h2 align="center" style="min-height: 60px; font-family: latin wide"><?=$product->nama?></h2>
					<p align="center" style="font-family: moaren Regular"><?=$product->description?></p>
					<p align="center" style="font-family: latin wide" >Rp.<?=$product->price?></p>
					<p align="center">
						<?php echo anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
							'class' => 'primary-btn cta-btn',
							'role' => 'button'
						]); ?>
					</p>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
	


</body>
</html>