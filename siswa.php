<?php


//contoh komentar
//-----------------------------------------llalala yeyeye-----------------------------------------------------------------------
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa=new Siswa();
$data=$siswa->ReadAllSiswa();

/*print '<pre>';
print_r($data);
print '</pre>';*/


?>
<table border="1">
<tr>
	<td>ID SISWA</td>
	<td>FULL NAME</td>
	<td>EMAIL</td>
	<td>NATIONALITY</td>
</tr>
 <?php foreach ($data as $a ): ?>
	

<tr>
	<td><?php echo $a['id_siswa']?></td>
	<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
	<td><?php echo $a['nationality']?></td>

	<td><a href="dsiswa.php?id=<?php echo $a['id_siswa'] ?>">Detail</a></td>
		<td><a href="usiswa.php?id=<?php echo $a['id_siswa'] ?>">Edit</a></td>
	<td><a href="delete_siswa.php?id=<?php echo $a['id_siswa'] ?>">Delete</a></td>
</tr>
<?php endforeach ?>

</table>