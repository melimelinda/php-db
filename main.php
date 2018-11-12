<?php 
		if (!isset($_SESSION['basic_is_logged_in']) || $_SESSION['basic_is_logged_in'] !== true){
		header('Location : login.php');
		exit;
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <p><a href=logout.php>Logout</a></p>
 </body>
 </html>