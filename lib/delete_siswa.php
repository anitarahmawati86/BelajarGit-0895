<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id=$_GET['id'];

if(!is_numeric($id)){
	exit('Acces Forbiden');
}

$siswa=new Siswa();
$data=$siswa->deleteSiswa($id);

echo "Data berhasil dihapus";

header('location:siswa.php') 





?>