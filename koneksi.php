<?php  
$server= "localhost";  
$username = "root";   
$password = "";   
$database = "php_db"; //menghubungkan dengan data base yg telah kita buat 
//$con = new mysqli("localhost","root","")or die("koneksi gagal");

$con=new mysqli($server,$username,$password,$database) or die ("Koneksi Gagal");  
$con->select_db("php_db") or die ("Database Tidak Bisa Di Simpan " );  
  
?> 