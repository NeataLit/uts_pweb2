<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>Nama</th>
            <th>Jumlah Partisipasi</th>
            <th>Status</th>
        </thead>
    
    <tbody>
        <?php
        include("koneksi.php");

        $query ="SELECT * FROM status_anggota";
        $hasil =mysqli_query($koneksi, $query);

        if (!$hasil)
            die ("permintaan gagal");

        while ($tbl_status_anggota=mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td>
                <a href="ubah_form.php?id=<?php echo $tbl_status_anggota['ID_anggota']; ?>">
                <?php echo $tbl_status_anggota['Nama']; ?></a>
            </td>
            <td>
                <?php echo $tbl_status_anggota['Jmlh_Partisipasi']; ?>
            </td>
            <td>
                <?php echo $tbl_status_anggota['Status']; ?>
            </td>
            <td>
                <a href="hapus.php?id=<?php echo $tbl_status_anggota['ID_anggota']; ?>">hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
        
    </tbody>
    </table>
</body>
</html>