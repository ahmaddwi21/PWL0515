<?php

    define("phi", 3.14 , true);

    $volbola;

    function volume($diameter){
        $volbola =  (4/3 * phi * pow($diameter/2, 3));
        return $volbola;
    }

    $d = 35;
    
    printf ("Diameter = %d <br>" ,$d);
    printf ("Volume = %.2f", volume($d));
?>