<!DOCTYPE html>
<html lang="en">
    <?php 
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Session</title>
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST" class="login-email">
        <p class="title">Login</p>
        <div class="field">
            <p class = "mail">Masukkan Username : </p>
            <input type="text" placeholder="Username" name="username" value="" required class="mailed">
        </div>
        <div class="field">
            <p class = "pass">Masukkan password : </p>
            <input type="password" placeholder="Password" name="password" value="" required class="passed">
        </div> 
    <div class="field" align ="center"> 
        <button name="submit" class="button">Login</button>
    </div>
    <?php
            $username = array('Rama' , 'User');
            $password = array('1211', '2002');
            if (isset($_POST['submit'])) {
                if ($_POST['username'] == $username[0] && $_POST['password'] == $password[0]){
                    $_SESSION["username"] = $username;
                    $_SESSION["priv"] = 'admin'; 
                    $_SESSION["nama"] = $_POST['nama'];
                    header("Location: Index1.php");
                }
                elseif ($_POST['username'] == $username[1] && $_POST['password'] == $password[1]){
                    $_SESSION["username"] = $user; 
                    $_SESSION["priv"] = 'user';
                    $_SESSION["nama"] = $_POST['nama'];
                    header("Location: Index1.php");
                }
                else {
                    echo("<p class='login-register-text'>email atau password anda salah.</p>");
                }
            }
            elseif (isset($_SESSION['username'])){
                header("Location: Index1.php");
            }
    ?> 
</body>
</html>