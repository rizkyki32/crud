<!DOCTYPE html>
<html>

<head>
	<title>EDIT</title>
</head>

<body>
	<h2>CRUD DATA PEGAWAI</h2>
	<br />
	<a href="index.php">KEMBALI</a>
	<br />
	<br />
	<h3>EDIT DATA PEGAWAI</h3>
	<?php
	include 'koneksi.php';

	$id = $_GET['id'];

	$data = mysqli_query($koneksi, "SELECT * FROM tb_pegawai WHERE id = '$id' ");

	while ($d = mysqli_fetch_array($data)) {
	?>

		<form method="post" action="update.php">
			<table>
				<tr>
					<td>Nama</td>
					<td>

						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">


						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>EMAIL</td>

					<td><input type="email" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>

	<?php } ?>
</body>

</html>