<?php
if (isset($_GET['var'])){
setcookie('var', $_GET['var']);
setcookie("answ","");
}
$ids = 1;
if (isset($_POST['idk'])) {
    $ids = $_POST['idk']+1;
    setcookie("answ", $_COOKIE['answ'].":".$_POST['ans']); 
}
if (isset($_COOKIE['Remix'])) {
    if ($_COOKIE['Remix'] == md5($_SERVER['REMOTE_ADDR'])){
        if ((isset($_GET['var'])) or (isset($_POST['varian']))) {
            if (isset($_GET['var'])) { 
                $v = $_GET['var'];
                $data = explode(';', file_get_contents('data/'.$_GET['var'].'.txt')); 
                                    } else {
                $v = $_POST['varian'];
                $data = explode(';', file_get_contents('data/'.$_POST['varian'].'.txt'));
            }
        foreach ($data as $dataq) {
        list($id, $quest, $a1, $a2, $a3, $a4) = explode(":", $dataq);
            if($ids == $id) {   
                break;
            }
        }
        
    }       
    } else {
        setcookie("Remix",'', -1);
        setcookie("name",'', -1);
        setcookie("Remixdata",'', -1);
    }
} else {
      //WARNING DEBUG MODE!!!
        header('Location: http://127.0.0.1/tests/index.php');
        //WARNING DEBUG MODE!!!
}
?>
<html>
<head>
    <title>Вариант <?php echo $v; ?></title>
    <style>
        body {
            background: #202020;
        }
        .tstblk {
            background: white;
            margin: 20px;
            box-shadow: 0 0 15px black;
            padding: 5px;
            height: 100%;
        }
        .questblk {
            margin: 10px;
            text-align: center;
        }
        .answerblk {
            margin: 10px;
            text-align: left;
        }
        .numques {
            position: fixed;
            text-align: center;
            background: white;
            margin: 0px auto;
            bottom: 0px;
            left: 0px;
            width: 100%;
            z-index: 999;
            border: 1px solid black;
        }
    </style>
</head>

<body>
<div class="tstblk">
    <div class="questblk">
        <h1><?php echo $quest; ?></h1>
    </div>
    <div class="answerblk">
    <form action="tests.php" method="post">
    <input type="hidden" value="<?php echo $id; ?>" name="idk" />
    <input type="hidden" value="<?php echo $v; ?>" name="varian" />
    <input type="radio" id="c1" name="ans" value="1">
        <label for="c1"><?php echo $a1; ?></label>
    <br>
    <input type="radio" id="c2" name="ans" value="2">
        <label for="c2"><?php echo $a2; ?></label>
    <br>
    <input type="radio" id="c3" name="ans" value="3">
        <label for="c3"><?php echo $a3; ?></label>
    <br>
    <input type="radio" id="c4" name="ans" value="4">
        <label for="c4"><?php echo $a4; ?></label>    
    <br>
    <input type="submit" value="Ответить" />
    </form>
    </div>
</div>
<div class="numques">
    <input type="button" value="< Предыдущий"/>
    <input type="submit" value="Завершить" onclick="document.location.href='result.php'"/>
    <input type="button" value="Следующий >"/></div>
</body>
</html>