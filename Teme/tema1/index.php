<?php

function showMessage($message='2')
{
   echo 'Ati introdus valoarea: ' .$message;
}

echo '<br/>';

showMessage();
echo'<br/>';


function addNumbers($param1, $param2)
{
    $sum = $param1 + $param2;
    echo $sum;
       
}

echo '<br/>';
addNumbers (10,15);
echo '<br/>';
addNumbers (3, 73);
echo '<br/>';

function addNumbers2($param1, $param2= 4, $param3 = 10)
{
    $sum = $param1 + $param2 + $param3;
    echo $sum;
}

echo '<br/>';

addNumbers2 (15);
echo '<br/>';
addNumbers2 (15, 12);
echo '<br/>';
addNumbers2 (15, 12, 20);
echo '<br/>';

function  afiseazaNume ($param1, $param2)
{
    return $param1.$param2;
}

echo '<br/>';
$rezultat =  ("Numele meu este, Popescu Ion.");
echo $rezultat;
echo '<br/>';
$rezultat = ("Ma numesc, Vasile Mihai!");
echo $rezultat;

?>