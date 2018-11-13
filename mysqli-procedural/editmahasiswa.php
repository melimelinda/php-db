<?php ob_start();
include "koneksi.php";
$nim    = $_POST['nim'];
$nama          = $_POST['nama'];
$alamat         = $_POST['alamat'];

$query=mysqli_query($con,"update mahasiswa set nim='$nim', nama='$nama', alamat='$alamat' where nim='$nim'");
header('location:tampilmahasiswa.php');
?>