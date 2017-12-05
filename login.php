<?php 
if(isset($_COOKIE['Remix'])) 
{
    if($_COOKIE['Remix'] == md5($_SERVER['REMOTE_ADDR'])) {     
    //WARNING DEBUG MODE!!!
    header('Location: http://127.0.0.1/lk-beta/index.php');
    //WARNING DEBUG MODE!!!
    }
} 
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/base.css">
        <script src="js/md5.js"></script>
    </head>
    <body>
        <div id="login">
            <form action="secure.php" method="post">
                <h1>Вход</h1><br />
                <input type="text" name="logins" placeholder="Логин"/><br />
                <input type="password" name="pass" placeholder="Пароль" /><br /> <br />
                <input type="submit" value="Войти">
                <input type="button" value="Регистрация" onclick='document.location.href="register.php";'/>
            </form>
        </div>
    </body>
</html>