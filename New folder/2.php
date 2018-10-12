<?php

    define("phi", 3.14 , true);

    $selimuttab;

    function luas($diameter ,$tinggi){
        $selimuttab =  phi * $diameter * $tinggi;
        return $selimuttab;
    }

    $d = 35;
    $t = 6;
    
    printf ("Diameter = %d <br>" ,$d);
    printf ("Tinggi = %d <br>" ,$t);
    printf ("Luas = %.2f", luas($d,$t));
    
?>