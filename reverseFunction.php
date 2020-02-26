<?php
$number = 3456;
 $num = $number;
  $reverse= 0;
  while($number > 0){
      $modulu = $number % 10;
      // echo $modulu;
      // echo '<br>';

      $reverse = ($reverse * 10) + $modulu;
      $number = (int)($number / 10)  ;
      // echo '$number='.$number.'<br>';
  }

  echo "The reverse 0f $num after reverse  is\t".$reverse;
  echo '<br>';


 
  function reverseInteger($n)
{
    $reverse = 0;
    while ($n > 0)
      {
        $reverse = ($reverse * 10)+ $n % 10 ;
        $n = (int)($n/10);

      }
     echo "The reverse is ".$reverse . '<br>';
}   
reverseInteger(3790764) ;
reverseInteger(45);


 
?>