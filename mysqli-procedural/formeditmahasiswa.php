<?php 
include "koneksi.php";
$nim=$_GET['nim'];
$query=mysqli_query($con,"select * from mahasiswa where nim='$nim'");
?>
<html>
	<head>
		<title>Halaman Edit Data Mahasiswa</title>
	<head>
		<body>
		<form action="editmahasiswa.php" method="post">
		<table border="0">
		<?php
			while($row=mysqli_fetch_array($query)){
		?>
		<input type="Hidden" name="no" value="<?php echo $no;?>" />
		<h2>Data Mahasiswa</h2>
		<table>
			<tr>
				<td>NIM</td>
				<td>: <input type="text" name="nim" value="<?php echo $row['nim'];?>" size="10"></td>
			</tr>
			<tr>
				<td>Nama Mahasiswa</td>
				<td>: <input type="text" name="nama" value="<?php echo $row['nama'];?>"size="50"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <input type="text" name="alamat" value="<?php echo $row['alamat'];?>"size="50"></td>
			</tr>
			<tr>
				<td colspan=2><input type="submit" value="Update"></td>
			</tr>
		<?php } ?>
		</table>
	</form>

	</body>
</html>