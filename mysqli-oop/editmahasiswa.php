<?php 
include "koneksi.php";
$nim    = $_POST['nim'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];

$query="update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where nim='$nim'";
$hasil = $con->query($query);
header('location:tampilmahasiswa.php');
?>