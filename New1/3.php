<?php

    function belanja($b, $s, $t, $j){
        static $bakso = 12000, $soto = 9000,$teh = 2000,$jeruk = 3000;
        $total = ($bakso * $b) + ($soto * $s) + ($teh * $t) + ($jeruk * $jeruk);

        $result = array('countBakso' => $b,
                        'CountSoto' => $s,
                        'CountTeh' => $t,
                        'CountJeruk' => $j,
                        'total' => $total);
        return $result;
    }

    echo "<br>";
    echo "Pelanggan 1 <br>";
    $belanjaan = belanja(2,1,3,4);
    foreach($belanjaan as $x => $value){
        echo $x . "=" . $value. "<br>";
    }

    echo "<br>";
    echo "Pelanggan 2 <br>";
    $belanjaan = belanja(5,2,8,7);
    foreach($belanjaan as $x => $value){
        echo $x . "=" . $value. "<br>";
    }

?>