<?php
 $array = [10,66,5,11,200,3];
 $revArray = [10,66,5,11,200,3];
  sort($array);
  print_r($array);
  echo '<br>';
  echo '<br>';
  rsort($revArray);
  print_r($revArray);

  echo '<br>';
  echo '<br>';
  $natSort = ['img1.png','img33.png','img10.png','img22.png'];
  natsort($natSort);
  print_r($natSort);
?>
