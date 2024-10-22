<?php

if (3 > 2) {
    echo 'true';
}
echo '<br>';

$a = 5;

if ( ! isset ( $a ) && ( 3>2 || 5>7 ) ) {
    echo '$a is null';
}
    else{
        echo '$a is not null';
}

if ( $a < 5) {
    echo '$a is lower than 5';
} elseif ( $a == 0 ) {
    echo '$a is five';
} else {
    echo '$a is bigger than 5';
}

    echo'<br>';

$b = 3;

switch ($b) {
    case 1;
        echo '$b in one';
        break;
    case 2;
        echo '$b is two';
        break;    
    case 3;
        echo '$b is three';
        break;        
    default;
        echo '$b is not through our cases';    
}

switch($b) {
    case 3>2;
        echo 'testing...';
        break;
    default;
        echo 'default';
        break;    
}

echo '<hr>';

$z = 5;
while ($z <= 10) {
    echo $z . '<br>';
    $z++;
}

echo '<br>';
$y = 0;
do {
    echo $y . '<br>';
    $y++;
} while ($y <= 5);

for ($i = 0; $i<=5; $i++){
    echo $i . '<br>';
}

$colors = ['red', 'black','blue', 'yellow'];
foreach ($colors as $color){
    echo $color . '<br>';

} 
foreach ($colors as $key => $color){
    echo 'key is: ' . $key . 'and color is;' . $color . '<br>'; 
}

echo '<hr>';

for ($i=0; $i<=5; $i++){
    if ($i==3) {
        continue;
    }

    echo '$i is: ' . $i . '<br>';
}

