<?php 

include_once("koneksi.php");

function stts($jumlah){
    if ($jumlah >= 25) {
        $stts = "Aktif ";
    } else if ($jumlah >= 1 && $jumlah < 25) {
        $stts = "Kurang Aktif";
    } else 
        $stts = "Tidak Aktif";

    return $stts;
}

$nama = $_GET['nama'];
$jumlah = $_GET['jumlah'];
$status =stts($_GET['jumlah']);


$query= "INSERT INTO `status_anggota` (`Nama` , `Jmlh_Partisipasi`, `Status`) VALUES ('$nama', '$jumlah', '$status')";
$hasil= mysqli_query ($koneksi,$query);

if(!$hasil)
    die("penyimpanan gagal!!!");

header("Location: tampil.php");

?>