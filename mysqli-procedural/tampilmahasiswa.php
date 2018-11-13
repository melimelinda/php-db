<?php
session_start();
include "koneksi.php";

  if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit();
  }else{
    $username = $_SESSION['username'];
  }
include "koneksi.php";
include "formmahasiswa.php";
echo"<center><b>";
include "cari.php";
echo"</b>";
echo "<br><center><b>Tabel Data Mahasiswa</b><br/>";
echo "<center><table border=1><tr bgcolor=orange>
<td><b><center>No</td>
<td><b><center>NIM</td>
<td><b><center>Nama</td>
<td><b><center>Alamat</td>
<td><b><center>Delete</td>
<td><b><center>Edit</td>
</tr>";
$query=mysqli_query($con,"SELECT * FROM mahasiswa ORDER BY nim");
$no=1;
while($var=mysqli_fetch_array($query)){
echo "<tr>
<td>$no</td>
<td>$var[nim]</td>
<td>$var[nama]</td>
<td>$var[alamat]</td>
<td><center><a href='deletemahasiswa.php?nim=$var[nim]'>Delete</a></td>
<td><center><a href='formeditmahasiswa.php?nim=$var[nim]'>Edit</a></center></td>
</tr>";
$no++;
}
echo "</table><br/>";
echo "<p><a href='logout.php'>logout</a></p>";
?>