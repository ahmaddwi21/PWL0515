<?php
    $nilai = [
        ["PWL"=>["Toni"=>80, "Dewi"=>90, "Nina"=>75, "Reza"=>60]],
        ["AI"=>["Toni"=>60, "Dewi"=>70, "Nina"=>95, "Reza"=>50]],
        ["SBD"=>["Toni"=>75, "Dewi"=>75, "Nina"=>80, "Reza"=>70]]
    ];

    $toni = $nilai[0]["PWL"]["Toni"] + $nilai[1]["AI"]["Toni"] + $nilai[2]["SBD"]["Toni"];
    $dewi = $nilai[0]["PWL"]["Dewi"] + $nilai[1]["AI"]["Dewi"] + $nilai[2]["SBD"]["Dewi"];
    $nina = $nilai[0]["PWL"]["Nina"] + $nilai[1]["AI"]["Nina"] + $nilai[2]["SBD"]["Nina"];
    $reza = $nilai[0]["PWL"]["Reza"] + $nilai[1]["AI"]["Reza"] + $nilai[2]["SBD"]["Reza"];

    $rata2matakuliah = array_sum($nilai[0]["PWL"])/count($nilai[0]["PWL"]);

    for()


    echo $rata2matakuliah;

    for()
?>