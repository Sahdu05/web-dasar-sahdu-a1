<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nama="fadli";

    function nilai($a){

        $nilai= $a;
        if($nilai ==1){
            $nilai_nya = "sepuluh";
        } elseif ($nilai ==2){
            $nilai_nya = "Dua puluh";
        } elseif ($nilai ==3){
            $nilai_nya = "Tiga Puluh";
        } elseif ($nilai ==4){
            $nilai_nya = "Empat puluh";
        } elseif ($nilai ==5){
            $nilai_nya = "Lima puluh";
        } elseif ($nilai ==6){
            $nilai_nya = "Enam puluh";
        } elseif ($nilai ==7){
            $nilai_nya = "Tujuh puluh";
        } elseif ($nilai ==8){
            $nilai_nya = "Delapan puluh";
        } elseif ($nilai ==9){
            $nilai_nya = "Sembilan puluh";
        } elseif ($nilai ==10){
            $nilai_nya = "Seratus ";
        }

        else {
            $nilai_nya ="anda tampan    ";
        }


        return $nilai_nya;
    }

    
    ?>

    <h1>
        INPUT DATA NILAI </H1>
        
        <form action="" method="POST">
            <TABLE>
                <tr>
                    <th colspan ="3">nama</th>
                    <td>:</td>
                    <td><input type="text" name="nama"> </td>

                </tr>

                <tr>
                    <th colspan="3">nilai</th> \`
                    <td>:<td>
                    <td><input type="number" name="nilai"></td>

                </tr>


                <tr>
                    <td colspan="3">
                    <button style="width:100%" name="Cari">Cari</button></td>
                </tr>

</table>

<p> nama saya adalah <?= @$_POST["nama"] ?>, saya punya nilai <?=@nilai($_POST["nilai"])?></p>
</body>
</html>