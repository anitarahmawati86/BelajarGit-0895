<?php


require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id=$_GET['id'];

if(!is_numeric($id)){
	exit('Acces Forbiden');
}

$siswa=new Siswa();
$data=$siswa->ReadSiswa($id);

$dt=$data[0];



?>
<table border="1">
<tr>
	<td>ID SISWA</td>
	<td>FULL NAME</td>
	<td>NATIONALITY</td>
</tr>
 <?php foreach ($data as $a ): ?>
	

<tr>
	<td><?php echo $a['id_siswa']?></td>
	<td><?php echo $a['full_name']?></td>
	<td><?php echo $a['nationality']?></td>
	
</tr>
<?php endforeach ?>

</table>

<a href="siswa.php">Kembali</a>
