<?php
include_once 'login_session.php';
include_once 'koneksi.php';

$id = $_GET['id'];
$sql = "DELETE FROM databarang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);

header('location: index.php');
?>