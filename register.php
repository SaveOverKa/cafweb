<?php
$login = $_POST['login'];
$phone = $_POST['phone'];
$email = $_POST['mail'];
$pass = $_POST['pass'];
$repeat = $_POST['repeatpass'];
$time = time();
?>
<html>
<head>
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/base.css">
</head>
<body>
<div id="register">
    <form action="register.php" method="post">
    <h1>Регистрация</h1><br />
    <?php if ($pass !== $repeat) { echo "<font color='red'><h1>Пароли не совпадают!</h1></font> "; } else {
    if (isset($pass)){
        $filename = 'db/'.$time.'.txt';
        file_put_contents($filename, $login.":".md5($pass).":".$email.":".$phone);
       $content =  file_get_contents('db/users.txt').$login.":".$time.'.txt'.";";
        file_put_contents('db/users.txt', $content);
        //WARNING DEBUG MODE!!!
        header('Location: http://127.0.0.1/login.php');
        //WARNING DEBUG MODE!!!
        exit;
        }
    } ?>
    <input type="text" name="login" placeholder="Логин"><br />
    <input type="tel" name="phone" placeholder="Номер телефона"><br />
    <input type="email" name="mail" placeholder="E-mail"><br />
    <input type="password" name="pass" placeholder="Пароль"><br />
    <input type="password" name="repeatpass" placeholder="Повторите пароль"><br />
    <input type="submit" value="Зарегистрироваться">
    </form>
</div>   
</body>
</html>