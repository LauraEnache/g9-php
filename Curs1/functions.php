<?php

declare(strict_types=1);

function showMesssage()
{
    echo 'message';
}

function returnMessage()
{
    return 'message returned';
}

showMesssage ();
echo '<br/>';
echo returnMessage();

function showName($name='Madalin')
{
   echo 'My name is: ' .$name;
}

echo '<br/>';
showName('Marian');
echo '<br/>';
showName('Alex');
echo '<br/>';
showName();

function addNumbers(int $a, int $b): int
{
    echo $a + $b;
}

echo '<br/>';
addNumbers (1, 1);
addNumbers (1,'5');
