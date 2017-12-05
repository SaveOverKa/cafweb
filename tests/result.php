<?php
if(isset($_COOKIE['answ'])) {
    $answer = $_COOKIE['answ'];
    echo $answer;
    $valid = 0;
    $answer = explode(':', $answer);
    $data = explode(';',file_get_contents("data/answer.txt"));
    foreach ($data as $dataq) {
        $dataq = explode(":", $dataq);
        if ($_COOKIE['var'] == $dataq[1]) {
            for($i = 0; $i !== count($answer); $i++){
                if ($answer[$i] == $dataq[$i])
                {
                    $valid += 1;
                } else {
                    $valid += 0;
                }
            }
        } 
    }
}
?>

<html>
    <head>
    <title>Результаты</title>
    <style>
        .resultblk {
            text-align: center;
            background: white;
            margin: 20px;
            box-shadow: 0 0 15px black;
            padding: 5px;
            height: 100%;
            }
        body {
            background: #202020;        
        }
    </style>
    </head>
    <body>
    <div class="resultblk">
        <h1>Правильных ответов: <?php echo $valid ?></h1>
    </div>
    </body>
</html>