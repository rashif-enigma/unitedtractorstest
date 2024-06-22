<?php 
include('database.php');
$db = new database();

$action = $_GET['action'];
if($action == "add")
{
    $db->simpan($_POST['nama'],$_POST['alamat'],$_POST['usia']);
    header('location:tampil.php');
}
elseif ($action == "hapus") {
    $id = $_GET['id'];
    $db->hapus($id);
    header('location:tampil.php');
}
?>
