<html>
	<head>
		<title>Input Data Mahasiswa</title>
	</head>
	<body>
		<h2>Data Mahasiswa</h2>
		<form action="savemahasiswa.php" method="POST"> 
		<table>
			<tr>
				<td>NIM</td>
				<td>: <input type="text" name="nim" size="10"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>: <input type="text" name="nama" size="50"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <input type="text" name="alamat" size="50"></td>
			</tr>
			<tr>
				<td colspan=2><input type="submit" value="Kirim"></td>
			</tr>
		</table>
	</form>
	</body>
</html>