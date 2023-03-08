<?php
include_once("koneksi.php");
$id = $_GET['id'];
    $query ="SELECT * FROM status_anggota where ID_anggota='$id'";
    $hasil= mysqli_query ($koneksi,$query);

    $tbl_status_anggota=mysqli_fetch_array($hasil);
    $nama=$tbl_status_anggota['Nama'];
    $jumlah=$tbl_status_anggota['Jmlh_Partisipasi'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku tamu ubah form</title>
</head>
<body>
    <form action="ubah.php" method="GET">
    <input type="text" name="id" value="<?php echo $id; ?>" />

    <table>
            <tr>
                <td>Nama: </td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr>
                <td>Jumlah Partisipasi: </td>
                <td><input type="number" name="jumlah" value="<?php echo $jumlah; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="SUBMIT">
                    <input type="reset" value="CANCEL">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>