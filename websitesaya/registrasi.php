<?php require?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h1>Halaman Registrasi</h1>
    <form action="index.php" method="post">
    <table>
    <tr>
            <th>Username</th>
            <td>:</td>
            <td>
                <input type="text"placeholder="Input username" name="username"  value="<?php @$_POST["username"];?>">
            </td>
    </tr>
            <tr>
                <th>Email</th>
                <td>:</td>
                <td>
                    <input type="email"placeholder="Input email" name="email">
                </td>
            </tr>
            
            <tr>
                <th>password</th>
                <td>:</td>
                <td>
                    <input type="password" name="pw1">
                </td>
            </tr>
            
            <tr>
                <th>Confirm password</th>
                <td>:</td>
                <td>
                    <input type="password" name="pw2">
                </td>
            </tr>
            <tr>
                <td>
                    <button type ="submit" style="width: 100%;" name="registrasi">Registrasi </button>
                </td>
            </tr>
    </table>
    </form>

    <?php
    if (isset($_POST["registtasi"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $pw1 = $_POST["pw1"];
        $pw2 = $_POST["pw2"];
        if ($username =="") {
            echo "<script>
            alert('Username masih kosong')
            </script>";
            
        }
        elseif ($email=="") {
            echo "<script></script>"
        }
    }
    
    ?>
</body>
</html>