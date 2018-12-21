<?php 
include 'config.php';

if (isset($_POST['add'])) {
	$namaObat = $_POST['namaObat'];
	$jenisObat = $_POST['jenisObat'];
	$stok = $_POST['stok'];
	$tambah="INSERT INTO obat(namaObat,jenisObat,stok) VALUES('$namaObat','$jenisObat','$stok')";
	if (mysqli_query($conn,$tambah)) {
		header('location:index.php');
	}
	else{
		/*echo "error" mysql_error($conn);*/
	}
}

/*$hasil=mysql_query($db,"SELECT * FROM obat");*/
 ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css.css">

<div class="container">
	<div class="card">
		<h3 class="card-header">Tambah Obat</h3>
		<form method="POST" action="tambahObat.php">
		  <div class="card-body">
		    <label>Nama Obat</label>
		    <input type="text" class="form-control" name="namaObat" placeholder="Masukkan Nama Obat" required>
		  </div>
			 <div class="card-body">
			<label>Jenis Obat</label>
		    <input type="text" class="form-control" name="jenisObat" placeholder="Masukkan Jenis Obat" required>
		  </div>
			 <div class="card-body">
		  	<label>Stok</label>
		    <input type="text" class="form-control" name="stok" placeholder="Masukkan Stok Obat" required>
		    <br>
		    <button class="btn btn-primary" type="submit" name="add"></a>Tambah</button>
		    <a class="btn btn-primary" href="index.php">Kembali</a>
		  </div>
		</form>
	</div>
</div>