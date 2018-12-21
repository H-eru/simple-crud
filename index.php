<?php 
include('config.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sistem Penjualan Obat</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css.css">
 </head>
 <body>
 	<div class="jumbotron text-center">
 		SPO
	</div>

	<div class="row">
		<div class="col-md-3">
			<div class="btn-group-vertical">
				<ul>
					<li class="navbar-item">
						<h4>Menu</h4>
					</li>
					<li class="navbar-item active">
						<a href="#">Data Obat</a>
					</li>
					<li class="navbar-item">
						<a href="#">Data Karyawan</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-9">
			<div class="card">
			  <h5 class="card-header">Daftar obat</h5>
			  <div class="card-body">
			  	<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">ID Obat</th>
				      <th scope="col">Nama Obat</th>
				      <th scope="col">Jenis Obat</th>
				      <th scope="col">Stok</th>
				      <th scope="col">Operasi</th>		
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  		$tampil="SELECT * FROM obat";
				  		$result=mysqli_query($conn,$tampil);
				  		if(mysqli_num_rows($result)){
				  			while ($row=mysqli_fetch_assoc($result)) {
				  	?>
				  				<tr>
				  					<td><?=$row['id_obat']?></td>
				  					<td><?=$row['namaObat']?></td>
				  					<td><?=$row['jenisObat']?></td>
				  					<td><?=$row['stok']?></td>
				  					<td>
				  						<a class="btn btn-success" href="edit.php">Edit</a>
				  						<a class="btn btn-danger" href="">Delete</a>
				  					</td>
				  				</tr>
				  	<?php
				  			}
				  		}
				  	 ?>
				  </tbody>
				</table>
				<a href="tambahObat.php"><button class="btn btn-primary">Tambah</button></a>
			  </div>
			</div>
		</div>
	</div>
 </body>
 </html>