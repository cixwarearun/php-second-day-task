<?php

$n=6;
$p=0;

for($i=2; $i<$n; $i++){
    if($n % $i == 0)
    {
        $p=1;
        break;
    }

}
if($p==0)
    echo 'number is prime';
else
    echo 'number is not prime ';

?>