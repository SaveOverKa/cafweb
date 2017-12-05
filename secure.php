<?php
$login = $_POST['logins'];
$pass = md5($_POST['pass']);
//echo $login.' : '.$pass;
$data = explode(';', file_get_contents('db/users.txt'));
foreach ($data as $data_touch) {
list($user, $file) = explode(":", $data_touch);
if ($user == $login){
    list($usr, $passw, $email, $phone) = explode(":", file_get_contents('db/'.$file));
    if ($pass == $passw) {
        //Success!
        echo "Access granted!";
        setcookie("Remix", md5($_SERVER['REMOTE_ADDR']));
        setcookie("name", $usr);
        setcookie("Remixdata", $file);
        //WARNING DEBUG MODE!!!
        
        header('Location: http://127.0.0.1/lk-beta/index.php');
        //WARNING DEBUG MODE!!!
        
    } else {
        echo "Incorrect login/password!";
    }
  }
}
?>