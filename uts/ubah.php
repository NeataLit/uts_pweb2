<?php
include_once ('koneksi.php');

$id = $_GET['id'];

function stts($jumlah){
    if ($jumlah >= 25) {
        $stts = "Aktif ";
    } else if ($jumlah >= 1 && $jumlah < 25) {
        $stts = "Kurang Aktif";
    } else 
        $stts = "Tidak Aktif";

    return $stts;
}

$id = $_GET['id'];
$nama = $_GET['nama'];
$jumlah = $_GET['jumlah'];
$status = stts($jumlah);

$query = "UPDATE `status_anggota` SET `Nama` ='$nama',`Jmlh_Partisipasi`='$jumlah', `Status` ='$status' where `ID_anggota`=$id";
$hasil = mysqli_query($koneksi,$query);

if (!$hasil)
    die("Pengubahan gagal!!");

    //header("Location: tampil.hp");
    include_once('tampil.php');
?>