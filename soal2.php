<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Soal 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            function verificationUsername($username){
                if(preg_match("/^[a-z]{5,5}\.|\_[A-Z]{2,2}$/",$username)){
                    
                    return true;
                }else{
                    return false;
                }
            }
            if(verificationUsername($_POST["username"])){
                echo "username benar";
            }else{
                echo "username salah";
            }

        }else{
    ?>
    <form action="soal2.php" method="POST">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placehoder="input username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="input password"></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="submit" value="submit"><input type="reset"></td>
        </tr>
    </table>
    </form>
        <?php } ?>
</body>
</html>