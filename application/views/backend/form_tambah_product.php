<!DOCTYPE html>
<html>
<head>
	<title>Admin Page | Add New Products</title>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	<style>
		.row div{border: #000 0px solid}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<center><h1 style= "font-family: electrical Regular">Add New Products</h1></center><br>
			<div><?= validation_errors() ?></div>
			<?= form_open_multipart('admin/products/create',['class'=>'form-horizontal']) ?>
			  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" style= "font-family: moaren Regular">Product Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="" value="<?=set_value('nama') ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style= "font-family: moaren Regular">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="description"><?=set_value('description') ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style= "font-family: moaren Regular">Price</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="price" placeholder="" value="<?=set_value('price') ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style= "font-family: moaren Regular">Available Stock</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="stock" placeholder="" value="<?=set_value('stock') ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" style= "font-family: moaren Regular">Product Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="userfile">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save</button>
    </div>
  </div>
			<?= form_close() ?>
		</div>
	</div>
</body>
</html>