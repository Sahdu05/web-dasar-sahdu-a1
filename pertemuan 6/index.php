 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Form Input Mahasiswa</h1>
    <form action="index.php" method="post">
    <table>
        <tr>
            <td>NPM</td>
            <td>:</td>
            <td>
                <input type="number" name ="npm">

            </td>
        </tr>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>:</td>
            <td>
                <input type="text" name ="nama_mahasiswa">
                
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
                <input type="date" name ="tgl_lahir">
                
            </td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <select name="jurusan">
                     <option value="selected">Pilih Jurusan</option>
                    <option> Sistem Iformasi </option>
                    <option >Teknik Iformas </option>
                    <option >Sains Data </option>
                
                </select>
              
            </td>

            
        </tr> 
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <textarea name="alamat" id=" cols=30" rows="10"></textarea>

            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: right;">
                <button style="background-color: brown; color: aliceblue">Batal</button>
                <button style="background-color: green; color: aliceblue">Simpan</button>
                
            
            </td>
        </tr>
    </table>
    </form>

    <table style="text-align: left">
        <tr>
            <th>NPM</th>
            <td>:</td>
            <td><?php echo @$_POST["npm"];?></td>
        </tr>
        <tr>
            <th>Nama Mahasiswa</th>
            <td>:</td>
            <td><?php echo @$_POST["nama_mahasiswa"];?></td>
        </tr>    
        <tr>
            <th>Tanggal Lahir</th>
            <td>:</td>
            <td><?php echo @$_POST["tgl_lahir"];?></td>
        </tr>
    </table>


    <?php
    var_dump($_POST);
   
    
    ?>

</body>
</html>