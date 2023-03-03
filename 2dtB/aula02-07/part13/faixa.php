<?php
    $ida = $_GET['ida'];
    
    switch(true) {
        case $ida < 5:
            echo "Atleta muito jovem";
            break;
        case $ida < 8:
            echo "Infantil A";
            break;
        case $ida < 11:
            echo "Infantil B";
            break;
        case $ida < 14:
            echo "Juvenil A";
            break;
        case $ida < 18:
            echo "Juvenil B";
            break;
        default:
            echo "Sênior";
            break;
    }
?>