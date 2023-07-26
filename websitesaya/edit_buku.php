<?php
require "controllers/functions.php";
$id_buku = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website saya</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Selamat datang di halaman edit buku</h1>

    <hr>

    <ul>
        <a href="buku.php">
            <li>buku</li>

        </a>
        <a href="pinjam buku.php">
            <li>pinjam buku</li>

        </a>

    </ul>

    <hr>
    <form action="" method="POST">
    <table>
        <tr>
            <th>judul buku</th>
            <td>:</td>
            <td>
                <input type="text"  name="judul_buku"
                placeholder="input judul buku"
                value="<?= buku_satu($id_buku,"judul_buku"); ?>">
            </td>
        </tr>
        <tr>
            <th>tahun terbit</th>
            <td>:</td>
            <td>
                <input name="tahun_terbit" type="number" placeholder="input tahun terbit"
                value="<?= buku_satu($id_buku,"tahun_terbit"); ?>">
            </td>
        </tr>

        <tr>
            <th>penulis</th>
            <td>:</td>
            <td>
                <input name="penulis" type="text" placeholder="input penulis"
                value="<?= buku_satu($id_buku,"penulis"); ?>">
            </td>
        </tr>

        <tr>
            <th>penerbit</th>
            <td>:</td>
            <td>
                <input name="penerbit" type="text" placeholder="input penerbit"
                value="<?= buku_satu($id_buku,"penerbit"); ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button name="edit_buku" type="submit" style="background: darkgreen;
                color: white; witdh :100px;" >Edit  </button>
            </td>
        </tr>
        
    </table>
    </form>

    <?php
    if(isset($_POST["edit_buku"])){
        $judul_buku = $_POST["judul_buku"];
        $tahun = $_POST["tahun_terbit"];
        $penulis = $_POST["penulis"];
        $penerbit = $_POST["penerbit"];

        $tanggal = date("Y-m-d H:i:s");

        $edit = q("UPDATE buku SET
        judul_buku = '$judul_buku',
        tahun_terbit = '$tahun',
        penulis = '$penulis',
        penerbit = '$penerbit',
        edit = '$tanggal'
        WHERE
        id = '$id_buku'");

        if ($edit) {
            echo "<script>
            alert('Edit buku berhasil');
            location='buku.php';
            </script>";
        
        }else {
            echo "<i>Edit gagal dilakukan</i>";
        }
    }
    ?>

   


</body>
</html>