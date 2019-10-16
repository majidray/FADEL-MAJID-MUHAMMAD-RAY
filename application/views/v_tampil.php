<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Data Mahasiswa </title>
</head>
<style>
	body
		{
		background-color: #00FFFF 
		}

	table 
		{
  	  	font-family: times;
   		color: #000000;
 	   	border-collapse: collapse;
    	border: 4px solid ;
    	border-spacing: : 8px 20px;
		}

	table tr th
		{
		font-family: helvetica;
    	background: #FFD700;
    	color: #000000;
  	    font-weight: normal;
		}
		</style>
<body>
	<center><h1> Data Mahasiswa Fasilkom-TI USU </h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:30px auto;" border="2">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Alamat</th>
			<th>Prodi</th>
			<th>Jenis Kelamin </th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user1 as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->prodi ?></td>
			<td><?php echo $u->jk ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>