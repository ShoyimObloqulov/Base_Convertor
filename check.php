<?php
    include_once 'class.php';
    if (isset($_POST['submit1'])) {

        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $base = $_POST['base1'];
        $amal = $_POST['amal'];
    
        $obj = new MathBase();
        $a = $obj->save($number1,$base,10);
        $b = $obj->save($number2,$base,10);
        $s = ($a + $b);
        $y = $obj->save($s,10,$base);
        header("location:index.php?id=$y");
    }
?>