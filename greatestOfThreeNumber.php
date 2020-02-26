<?php
$a=20;
$b=10;
$c=5;

echo'let the value of  a = 20 , b=10 and c = 5';
echo '<br>';
echo '<br>';

if($a>$b && $a>$c)
{
echo 'A is the greatest value';
}
else if($b>$a && $b>$c)
{
echo 'B is the greatest value';
}
else if($c>$a && $c>$b)
{
echo 'C  is the greatest value';
}
else
{
echo 'Error';
}
?>