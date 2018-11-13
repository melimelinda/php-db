<?php ob_start();
include "koneksi.php";

$nim   = $_POST['nim'];
$nama   = $_POST['nama'];
$alamat  = $_POST['alamat'];

mysqli_query($con,"INSERT INTO mahasiswa(nim,nama,alamat)
VALUE('$nim','$nama','$alamat')")or die(mysqli_error());
header('location:tampilmahasiswa.php');
?>