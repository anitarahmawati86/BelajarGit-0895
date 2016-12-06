<?php


require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

$id=$_GET['id'];

if(!is_numeric($id)){
	exit('Acces Forbiden');
}

$siswa=new Siswa();
$data=$siswa->ReadSiswa($id);

$dt=$data[0];

$nation = new nationality;

$data_nation=$nation-> readAllNationality();

?>
<h1>Tambah data</h1>

<form action="editsiswa.php?a=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
	NIS<br/>
	<input type="text" readonly="true" name="in_nis" value="<?php echo $dt['id_siswa'] ?>" ><br/>
	Nama Lengkap<br/>
	<input type="text" name="in_nama" value="<?php echo $dt['full_name'] ?>" ><br/>
	Email<br/>
	<input type="text" name="in_email" value="<?php echo $dt['email'] ?>"><br/>
	Kewarganegaraan<br/>
	<select name="in_nation">
		<option value="">--pilih negara--</option>

		<?php
		foreach ($data_nation as $n) : ?> 
		<option value="<?php echo $n['id_nationality']?>">
		<?php $s=($dt['id_nationality']==$n['id_nationality']) ?"selected":""?>
		<option value="<?php echo $n['id_nationality'] ?>"<?php echo $s?>> 
				<?php echo $n['nationality'] ?></option>
		<?php endforeach ?>
	</select><br/>
	foto:  <input type="file" name="in_foto"/> <br/>
	<?php  if(!empty($n['foto']))?>
		<img src="<?php echo $dt['foto'] ?>" width="100"/>
	<br />
	<input type="submit" name="kirim" value="simpan">


	</input>



<table border="1">
<tr>
