<?php  
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h1 >Fibonacci series for first 12 numbers: </h1>";  
echo "<br>";  
echo $n1.' '.' '.$n2.' ';  
while ($num < 11 )  
{  
    $n3 = $n1 + $n2;  
    echo $n3.' '.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
?>  