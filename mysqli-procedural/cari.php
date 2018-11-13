<?php 
include 'koneksi.php';
?>
 
<form action="tampilmahasiswa.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($con,"select * from mahasiswa where nim like '%".$cari."%'");				
	}else{
		$data = mysqli_query($con,"select * from mahasiswa");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
	</tr>
	<?php } ?>
</table>
