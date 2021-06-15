<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h2>CRUD DATA PEGAWAI</h2> 
	<br/>

	<a href="tambah.php">+ TAMBAH PEGAWAI</a> 
	<br/> 
	<br/> 
	
	<table border="1"> 
		<tr> 
			<th>NO</th> 
			<th>NAMA</th> 
			<th>EMAIL</th>
			<th>OPSI</th> 
		</tr>

			<?php 
			
				include 'koneksi.php';

				$no = 1;

				$data = mysqli_query($koneksi,"SELECT * FROM tb_pegawai");

				while ($d = mysqli_fetch_array($data)){
			?> 
			<tr> 
			
				<td><?php echo $no++; ?></td> 
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['email']; ?></td> 
				<td> 
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> 
					<a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('anda yakin ingin menghapus')">HAPUS</a> 
				</td> 
			</tr>
	
				<?php } ?> 
		
	</table>
</body>
</html>