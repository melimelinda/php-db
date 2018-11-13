<?php
include "koneksi.php";

$nim   = $_POST['nim'];
$nama   = $_POST['nama'];
$alamat  = $_POST['alamat'];
$query="INSERT INTO mahasiswa(nim,nama,alamat)
VALUE('$nim','$nama','$alamat')";
$hasil = $con->query($query) or die (mysqli_error());
header('location:tampilmahasiswa.php');
?>