<?php 
	session_start();
	$errorMessege = '';
	if (isset ($POST['txtUserId']) && isset ($_POST['txtPassword'])){
		if($_POST['txtUserId'] === 'meli' && $_POST['txtPassword'] === 'melinda'){
			$_SESSION['basic_is_logged_in'] = true;
			header('Location: main.php');
			exit;
		}else{
			$errorMessege = 'sorry, wrong user name / password';
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login form</title>
 	<style type="text/css">
 		.style{
 			color: #0000FF;
 			font-weight: bold;
 		}
 	</style>
 </head>
 <body>
 	<?php 
 		if ($errorMessege !=''){
 	 ?>
 	 	<p><div align="center"><span class="style"><?php echo $errorMessege; ?></span></div></p>
 	<?php 
 		}
 	 ?>
 	<form action="main.php" method="POST" name="frmlogin" id="formlogin">
 		<table width="400" border="1" align="center">
 			<tr>
 				<th width="160" scope="col">
 					<div align="left">User Id</div>
 				</th>
 				<th width="224" scope="col">
 					<div align="left"><input type="text" name="txtUserId" id="txtUserId"></div>
 				</th>
 			</tr>
 			<tr>
 				<td>
 					<div align="left">Password</div>
 				</td>
 				<td>
 					<div align="left"><input type="password" name="txtPassword" id="txtPassword"></div>
 				</td>
 			</tr>
 			<tr>
 				<td>&nbsp;</td>
 				<td><input type="submit" name="btnlogin" id="btnlogin" value="Login"></td>
 			</tr>
 		</table>
 </body>
 </html>