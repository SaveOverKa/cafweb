<?php
if (isset($_COOKIE['Remix'])){
    if ($_COOKIE['Remix'] == md5($_SERVER['REMOTE_ADDR'])){
        //WARNING DEBUG MODE!!!
        header('Location: http://127.0.0.1/tests/tests.php?var=1');
        //WARNING DEBUG MODE!!!
    } else {
        setcookie("Remix",'', -1);
        setcookie("name",'', -1);
        setcookie("Remixdata",'', -1);
    }
} else {
$login = $_POST['login'];
$pass = md5($_POST['pass']);
//echo $login.' : '.$pass;
$data = explode(';', file_get_contents('../db/users.txt'));
foreach ($data as $data_touch) {
list($user, $file) = explode(":", $data_touch);
if ($user == $login){
    list($usr, $passw, $email, $phone) = explode(":", file_get_contents('../db/'.$file));
    if ($pass == $passw) {
        //Success!
        echo "Access granted!";
        setcookie("Remix", md5($_SERVER['REMOTE_ADDR']));
        setcookie("name", $usr);
        setcookie("Remixdata", $file);
        //WARNING DEBUG MODE!!!
        
        header('Location: http://127.0.0.1/tests/tests.php?var=1');
        //WARNING DEBUG MODE!!!
        
    } else {
        echo "Incorrect login/password!";
    }
  }
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Тест</title>
    <style>
        .start {
            margin: 35%;
            margin-top: 10%;
            background: white;
            border: 2px solid black;
            box-shadow: 0 0 15px black;
            text-align: center;
            padding: 20px;
        }
        body {
            background: #202020;
        }
    </style>
</head>
<body>
    <div class="start">
    <h2>Пройти тест</h2>
    <form action="index.php" method="post">
    <table>
        <tr>
        <td>Логин: </td>
        <td><input type="text" name="login" placeholder="Логин"></td>
        </tr>
        <tr>
        <td>Пароль: </td>
        <td><input type="password" name="pass" placeholder="Пароль"></td>
        </tr>
    </table>
    <input type="submit" value="Начать">
    </form>
    </div>
</body>
</html>