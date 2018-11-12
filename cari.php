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
		$query="select * from mahasiswa where nim like '%".$cari."%'";
		$hasil = $con->query($query);				
	}else{
		$query="select * from mahasiswa";
		$hasil = $con->query($query);		
	}
	$no = 1;
	while($d = $hasil->fetch_array()){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nim']; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
	</tr>
	<?php } ?>
</table>
