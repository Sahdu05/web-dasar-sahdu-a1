<?php
require "controllers/functions.php";
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
    <h1>Selamat datang di halaman buku</h1>

    <hr>

    <ul>
        <a href="index.php">
            <li>Home</li>

        </a>
        <a href="pinjam buku.php">
            <li>pinjam buku</li>

        </a>
    </ul>
    <hr>
     <a href="tambah_buku.php">Tambah buku</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>judul buku</th>
            <th>Tahun terbit</th>
            <th>penulis</th>
            <th>penerbit</th>   
            <th>update</th>
            <th>opsi</th>
        </tr>
        <?php
        $nomor = 1;
        foreach (buku() as $b) : ?>
            <tr>
                <td style="text-align: center;"><?= @$b["id"]; ?></td>
                <td style="text-align: center;"><?= @$b["judul_buku"]; ?></td>
                <td style="text-align: center;"><?= @$b["tahun_terbit"]; ?></td>
                <td style="text-align: center;"><?= @$b["penulis"]; ?></td>
                <td style="text-align: center;"><?= @$b["penerbit"]; ?></td>
                <td style="text-align: center;"><?= date("d F Y, H:i", strtotime (@$b["edit"])); ?></td>
                <td> 
                <a href="edit_buku.php?id=<?= $b["id"] ?>">Edit</a>
                    
                    <a href="controllers/hapus_buku.php?id=<?= $b["id"]; ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach;
        ?>

</table>

    <!-- <script src="controllers/javascript.js"></script> -->
    <script>
        function hapusDialog(url) {
            if (confirm("Apakah data ini akan dihapus bg?")) {
                document.location(url)
            }
        }
    </script>
</body>
</html>