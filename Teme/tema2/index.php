<?php

function multiplicationTable($x)
{

    if ($x >=0 && $x <= 10)
    {
        for ($i=0; $i <=10; $i++){
            $result = $x * $i;
            echo " $x x $i = $result <br>";
        }
    } else {
        echo "Parametrul $x nu se afla in intervalul 0-10.";
    }
}

multiplicationTable(5);
multiplicationTable(15);
