<?php 

    // koneksi database 
	include 'koneksi.php'; 

	// menangkap data yang di kirim dari form 
	$id = $_POST['id']; 
	$nama = $_POST['nama']; 
	$email = $_POST['email']; 

	// update data ke database 
	mysqli_query($koneksi,"update tb_pegawai set nama='$nama', email='$email' where id='$id'"); 

	// mengalihkan halaman kembali ke data.php 
	header("location:index.php");
?>
	
?>