<?php
    $localidade=$_POST["localidade"];
    $a=fopen("violencia-domestica-df.csv","r");
    $d=fgetcsv($a);
    $soma=0;
    $ano=2011;
    while ($d)
    {
        if ($d[0]==$localidade){
            break;
            $d=fgetcsv($a);
        }
        echo "Local: $d[0]. Em ";
        for($i=1;$i<count($d); $i++){
            echo "$ano: $d[$i] ocorrências.";
            $soma+=$d[$i];
            $ano++;
        }
        echo "Total de ocorrências nessa localidade: $soma.";
    }
    fclose($a);
?>