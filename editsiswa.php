<?php

//komentar dari lokal
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
//require_once('lib/m_nationality.php');

if(!isset($_POST['kirim'])){
	exit('Acces Forbiden');

}
$siswa=new Siswa();

$data['input_nama']=addcslashes($_POST['in_nama']);
$data['input_email']=$_POST['in_email'];
$data['input_nationality']=$_POST['in_nation'];
$data['foto']='img/'.$_POST['in_nis'].'.jpg';

//print_r($_FILES);
if(!copy($_FILES['in_foto']['tmp_name'],'img/'.$_POST['in_nis'].'.jpg')){
	exit('Error upload File');
}
$siswa->updateSiswa($_POST['in_nis'],$data);

echo "Data siswa berhasil di update />";
echo "<a href='dsiswa.php?id=".$_POST['in_nis']."'>detail siswa</a>";



?>