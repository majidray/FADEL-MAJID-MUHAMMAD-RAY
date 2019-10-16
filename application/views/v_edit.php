<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head><style type="text/css">
	body
		{
		background-color: #00FFFF
		}

	table 
		{
  	  	font-family: times;
   		color: #2B1B17;
 	   	border-collapse: collapse;
    	border: 3px solid ;
    	border-spacing: : 8px 20px;
		}

	table tr th
		{
		font-family: helvetica;
    	background: #FFFF00;
    	color: #000000;
  	  font-weight: normal;
		}
		</style>
<body>
	<center>
		<h1>Data Mahasiswa</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user1 as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $u->nim ?>"></td>
			</tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi" value="<?php echo $u->prodi ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="laki-laki"/>Laki-laki</td>
			</tr>
			<td></td>
				<td><input type="radio" name="jk" value="perempuan"/>perempuan</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>