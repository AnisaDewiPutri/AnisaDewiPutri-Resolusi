<?php 
//koneksi ke DBMS
$conn = mysqli_connect("localhost","root","","trainit tokoh")
//Cek apakah tombol submit sudah ditekan atau belum

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Produk</title>
</head>
<body>
	<h1>Tambah Data Produk</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="id_produk" >Id_Produk : </label>
				<input type="text" name="id_produk" id="id_produk">
			</li>
			<li>
				<label for="nama_produk" >Nama_Produk : </label>
				<input type="text" name="nama_produk" id="nama_produk">
			</li>
			<li>
				<label for="harga_produk" >Harga_Produk : </label>
				<input type="text" name="harga_produk" id="harga_produk">
			</li>
			<li>
				<label for="berat" >Berat : </label>
				<input type="text" name="berat" id="berat">
			</li>
			<li>
				<label for="foto_produk" >Foto_Produk : </label>
				<input type="text" name="foto_produk" id="foto_produk">
			</li>
			<li>
				<button type="submit" name="submit" >Tambah Data!</button>
			</li>
		</ul>
		
	</form>

</body>
</html>