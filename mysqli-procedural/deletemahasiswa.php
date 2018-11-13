<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from mahasiswa where nim='$_GET[nim]'");
 header('location:tampilmahasiswa.php');

?>