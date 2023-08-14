<?php
    require 'header.php';
    require 'form.php';
    require 'Calculatorin.php';
    $calculator = new Calculatorin();
    $calculator->calculate();
    echo $calculator->calculate();


