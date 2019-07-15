<?php
    $ano=$_GET["ano"];
    $a=fopen("violencia-domestica-df.csv", "r");
    $d=fgetcsv($a);
    foreach($d as $x){
        if($x != $ano)
            $y++;
        else
            break;
    }
    $d=fgetcsv($a);
    while ($d)
    {
        echo "$d[$y] ocorrências em $d[0] no ano de $ano";
        $d=fgetcsv($a);
    }
    fclose($a);
?>