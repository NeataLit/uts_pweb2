<?php
include_once ('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM `status_anggota` where `ID_anggota`=$id";
$hasil = mysqli_query($koneksi,$query);

if (!$hasil)
    die("Penghapusan gagal!!!");

include_once('tampil.php');
?>