<?php
    echo "Mi primer programa en PHP";
    echo "<br><br>";
    echo "<h1 style='color:green'> Lista de numeros </h1>";
    for($i=0;$i<10;$i++){
            echo $i+1 ."<br>";
    }
    for ($i=0;$i<10;$i++){
        echo "<div style='border:1px solid black; padding:30px;width:30px; display:inline-flex;'>";
        echo $i+1;
        echo "</div>";
    }
?>