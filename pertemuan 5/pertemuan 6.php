<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>
<body>
<?php
    $nama = "fadli";

    function bulan($id){
    
    
    $bulan = $id;
    if($bulan == 1) {
        $nama_bulan = "januari";
    }elseif ($bulan == 2) {
        $nama_bulan = "februari";
    
    }elseif ($bulan == 3) {
        $nama_bulan = "maret";
    
    }elseif ($bulan == 4) {
        $nama_bulan = "april";
    
    }elseif ($bulan == 5) {
        $nama_bulan = "mei";
    
    }elseif ($bulan == 6) {
        $nama_bulan = "juni";
    
    }elseif ($bulan == 7) {
        $nama_bulan = "juli";
    
    }elseif ($bulan == 8) {
        $nama_bulan = "agustus";
    
    }elseif ($bulan == 9) {
        $nama_bulan = "september";
    
    }elseif ($bulan == 10) {
        $nama_bulan = "oktober";
    
    }elseif ($bulan == 11) {
        $nama_bulan = "november";
    
    }elseif ($bulan == 12) {
        $nama_bulan = "desember";
    
    }


        return $nama_bulan;
    }
    

    
    
    ?>

<hr>
<h1>input data</h1>
<form action="" method ="POST">
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Bulan (Angka)</td>
        <td>:</td>
        <td><input type="number" name="bulan"></td>
    </tr>

    <tr>
        <td colspan="3">
            <button style ="width:100%" name="cari">cari</button></td>
</tr>
</table>
</form>
    <?php
    // var_dump($_POST);

    if ($_POST["nama"]) {  ?>
        
        <p> nama saya adalah<b> <?= @$_POST["nama"] ?></b>,saya lahir bulan <b><?
        = @bulan($_POST["bulan"])?></b> </p>

    <?php  } ?>    
  
</body>
</html>