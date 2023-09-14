<?php
$matriz=array(array(1,-2,3),array(1,0,-1));
$matrizmulti=array(4,5,6);
    for($x=0;$x<3;$x++)
    {
        $resultado1[0][$x]=$matriz[0][$x]*$matrizmulti[$x];
        $resultado2[1][$x]=$matriz[1][$x]*$matrizmulti[$x];
    }
    $mult1=0;
    $mult2=0;
    for($z=0;$z<3;$z++)
    {
        $mult1=$mult1+$resultado1[0][$z];
        $mult2=$mult2+$resultado2[1][$z];
    }
    echo $mult1;
    echo "</br>";
    echo $mult2;
?>