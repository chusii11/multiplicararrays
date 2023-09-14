<?php

$matrizA=array(array(1,-2,3),array(1,0,-1));
$matrizB=array(array(4),array(5),array(6));

$j=0;
$res=0;

while($j<2)
{ 
    $i=0;
        while($i<3)
            {
            $a= $matrizA[$j][$i];
            $b= $matrizB[$i][0];
                    if($j==0)
                    {
                        //obtengo las multiplicaciones de la primera fila
                        $mult[]=$a*$b;
                    }else
                    {
                         //obtengo las multiplicaciones de la segunda fila
                        $mult1[]=$a*$b;
                    }
            $i++;
            }
        $i=0;
        $a=0;
      
        while($i<3)
        {
            if($j==0)
            {
                //sumamos la multiplicacion de la primera fila y lo almacenamos en a
            $a+= $mult[$i];
            $i++;
                    if($i==3)
                    {
                       //almacenamos el resultado de la operacion 1 en el vector resultado
                        $resultadofinal[0]=$a;
                    }
                    }else{
                         //sumamos la multiplicacion de la segunda fila y lo almacenamos en res
                            $res += $mult1[$i];
                            $i++;
                            if($i==3)
                            {
                         //almacenamos el resultado de la operacion 2 en el vector resultado
                            $resultadofinal[1]=$res;
                            }
                        }

    
    }

$j++;
}
//mostramos el vector con los resultados
print_r($resultadofinal);


?>