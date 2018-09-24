<!DOCTYPE html>
<html>
<head>
	<title>Daftar Harga Toko Online</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>bootstrap/pribadi/style.css"/>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	<style>
		.row div{border: #000 0px solid}
	</style>
<body>
	<?php $this->load->view('layout/top_menu') ?>
	<div class="navigation center" style="font-family: electrical Regular">
          <ul>
    <li><a><a href="http://localhost/toko_mobil/index.php/halaman"> Home </a></li>
    <li><a><a href="http://localhost/toko_mobil/index.php/tentang">About</a></li>
    <li><a><a href="http://localhost/toko_mobil/">Shoping</a></li>
    <li><a><a href="http://localhost/toko_mobil/index.php/profile">Profile</a></li>
    <li><a><a href="http://localhost/toko_mobil/index.php/welcome/cart">Cart View</a></li>
   </ul>
 </div><br><br><br>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10"><h1 align="center" style="font-family: electrical Regular">Cart Shoping</h1>
	<table id="myTable" class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Product</th>
				<th>Qty</th>
				<th>Price</th>
				<th>Subtotal</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			    $i=0;
			    foreach ($this->cart->contents() as $items) : 
				$i++;
			?>
			<tr>
				<td><?= $i ?></td>
				<td><?= $items['name'] ?></td>
				<td><?= $items['qty'] ?></td>
				<td align="right"><?= number_format($items['price'],0,',','.') ?></td>
				<td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
			</tr>
		    <?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td align="right" colspan="4">Total</td>
				<td align="right"><?= $this->cart->total(),0,',','.'; ?></td>
			</tr>
		</tfoot>
	</table>
	<div align="center">
		<?= anchor('welcome/clear_cart','Clear Cart',['class'=>'btn btn-danger']) ?>
		<?= anchor(base_url(),'Continue Shopping',['class'=>'btn btn-primary']) ?>
		<?= anchor('#','Check Out',['class'=>'btn btn-success']) ?>
	</div>

	<script>
		$(document).ready( function () {
        $('#myTable').DataTable();
    } );
	</script>
</div>
</body>
</html>