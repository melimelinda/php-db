<?php 
 include "koneksi.php";

	$query="delete from mahasiswa where nim='$_GET[nim]'";
	$hasil = $con->query($query);
	 header('location:tampilmahasiswa.php');

?>