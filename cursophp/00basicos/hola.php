<?php 
    $nombre = "Daniel";
    $nombreSegundo = "Alberto";
    echo $nombre.'&nbsp;'.$nombreSegundo;
    $num1 = 10;
    $num2 = 15;
    $suma = $num1+$num2;
    echo "<br> $suma";
    echo "<br> La variable \$suma tiene el valor de $suma";
    $modulo = $num1 % 2;
    echo "<br> Modulo = $modulo";
    if($modulo==0){
        echo "<br> numero par";
    }else{
        echo "<br> numero impar";
    }

    for($i=0;$i<10;$i++){
        echo "<br> $i";
    }
?>