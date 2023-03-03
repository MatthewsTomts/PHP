<?php
    $num = $_GET['num'];

    for ($i=0; $i <= 10; $i++) {
        $mult = $i * $num;
        echo "$num X $i = $mult <br><br>";
    }
?>