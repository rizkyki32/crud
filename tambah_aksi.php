<?php 
	
	// koneksi database 
	include 'koneksi.php'; 

	// menangkap data yang di kirim dari form 
	$nama = $_POST['nama'];
	$email = $_POST['email']; 

	// menginput data ke database 
	mysqli_query($koneksi,"insert into tb_pegawai values('','$nama','$email')"); 
	
	// mengalihkan halaman kembali ke data.php 
	header("location:index.php"); 

?>