<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="favicon.ico">
    <title>Мой Калькулятор</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
           background: url("images/background.png");
            background-size: 100%;
        }
        .rectangle {
            margin-left: 25px;
            height: 20px;
            width: 100px;
            border: 2px solid black;
            background-color: #E0FFFF;
        }
        .result {
            text-align: center;
        }

    </style>
</head>
<body>
<?php require 'head.php'?>
<h1>Калькулятор</h1>
<form action="http://localhost:63342/example4/calculatorold.php" method="POST">
    <p style="display:inline-block" >Первое значение:</p>
    <label>
        <input type="text" style="width: 20px; height: 20px; display:inline-block"  name="number1">
    </label>
    <p style="display:inline-block">Действие:</p>
    <label>
        <input type="text" style="width: 20px; height: 20px; display:inline-block"  name="znak">
    </label>
    <p style="display:inline-block">Второе значение:</p>
    <label>
        <input type="text"  style="width: 20px; height: 20px; display:inline-block" name="number2">
    </label>
    <button>Отправить</button>
</form>
</body>
</html>
<?php

$a = $_POST['number1'];
$b = $_POST['znak'];
$c = $_POST['number2'];

 if ($b == '+') {
     $d = $a + $c ;
 }
 elseif ($b == '-'){
    $d = $a - $c ;
 }
 elseif ($b == '*'){
     $d = $a * $c ;
 }
 elseif ($b == '/'){
     $d = $a / $c ;
 }
echo  "<h1>Результат: </h1>"."<div class='rectangle'><div class='result'>$a $b $c = $d</div></div>";

?>
<!--<form action="http://localhost:63342/example/index.php" method="POST">-->
<!--    <p>Первое значение</p>-->
<!--    <input type="number" name="number1">-->
<!--    <p>Действие</p>-->
<!--    <input type="text" name="znak">-->
<!--    <p>Второе значение</p>-->
<!--    <input type="number" name="number2">-->
<!--    <button>Отправить</button-->
<!--</form>-->
<!--.$a." ".$b." ".$c." = ". $d;-->
