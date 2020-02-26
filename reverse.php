<?php
  $array = ['a', 'b','c','d','e'];
  function reverse($array){
    $reverse=[];
    $count = count($array);
   
    for($i=$count -1; $i>=0; $i--)
    {
      $reverse[]= $array[$i];
      
    }
    return $reverse;
  }
  $output=reverse($array);
  print_r($output);
  var_dump($output);
  

?>