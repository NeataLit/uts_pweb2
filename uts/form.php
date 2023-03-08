<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input</title>
</head>
<body>
    <form Action="simpan.php" method="GET">
        <table>
            <tr>
                <td>Nama: </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jumlah Partisipasi: </td>
                <td><input type="number" name="jumlah"></td>
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