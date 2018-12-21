<?php 
include 'config.php';

	/*$namaObat = $_POST['namaObat'];
	$jenisObat = $_POST['jenisObat'];
	$stok = $_POST['stok'];*/

if (isset($_POST['edit'])) {
	
}

	$id_obat = 'id_obat';
	$namaObat = 'namaObat';
	$jenisObat = 'jenisObat';
	$stok = 'stok';

	if (isset($_GET['id_obat'])) {
		$sql="SELECT * FROM obat WHERE id_obat=$id_obat";
		$result=mysqli_query($conn,$sql);
		//if (mysqsli_num_rows($result)) {
			$row=mysqli_fetch_assoc($result);
		//}

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
		<h3 class="card-header">Edit Obat</h3>
		<form method="POST" action="edit.php">
		  <!-- <input type="hidden" name="id"> -->
		  <div class="card-body">
		    <label>Nama Obat</label>
		    <input type="text" class="form-control" name="namaObat" value="<?=$namaObat?>">
		  </div>
			 <div class="card-body">
			<label>Jenis Obat</label>
		    <input type="text" class="form-control" name="jenisObat" value="<?=$jenisObat?>">
		  </div>
			 <div class="card-body">
		  	<label>Stok</label>
		    <input type="text" class="form-control" name="stok" value="<?= $stok?>">
		    <br>
		    <button class="btn btn-primary" type="submit" name="edit"></a>Tambah</button>
		    <a class="btn btn-primary" href="index.php">Kembali</a>
		  </div>
		</form>
	</div>
</div>