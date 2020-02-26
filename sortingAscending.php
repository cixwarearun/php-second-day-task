<?php  
//sorting in ascending order
 $array = [10,66,5,11,200,3];
  function sortAccending($array)
  {
      $count = count($array);
      
      for($i=0; $i<$count-1; $i++){
          for($j=0; $j<$count-1-$i; $j++)
          {
              if($array[$j] > $array[$j+1])
                {
                    $temp = $array[$j];
                    $array[$j]=$array[$j+1];
                    $array[$j+1]=$temp;                
                }         
          }      
      }
      return $array;
  }
  $output=sortAccending($array);
  print_r($output);

?>