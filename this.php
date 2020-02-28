<?php

//array declaration
    $marks = [19, 90, 4, 29, 1, 23, 5, 88, 73, 32, 42, 28, 91, 8, 52, 76, 82, 63, 33, 20, 12, 9, 71, 53, 87, 69, 70, 41, 45, 2, 58, 61, 64, 18, 0, 7, 30, 86, 80, 75, 39, 56, 81, 51, 84, 83, 89, 50, 36, 77];
  
//creating empty array for storing values
   $arr1=[];
   $arr2=[];
   $arr3=[];
   $arr4=[];
   $arr5=[];
   $arr6=[];
   $arr7=[];
   $arr8=[];
   $arr9=[];
   $arr10=[];
 sort($marks);

 //delaration of for loop
  for($i=0; $i<count($marks); $i++)
  {
      if($marks[$i]<=9)
      {
          $arr1[]=$marks[$i];
      }
      elseif($marks[$i]>9 && $marks[$i]<=19)
      {
          $arr2[]=$marks[$i];
      }
      elseif($marks[$i]>19 && $marks[$i]<=29)
      {
          $arr3[]=$marks[$i];
      }
      elseif($marks[$i]>29 && $marks[$i]<=39)
      {
          $arr4[]=$marks[$i];
      }
      elseif($marks[$i]>39 && $marks[$i]<=49)
      {
          $arr5[]=$marks[$i];
      }
      elseif($marks[$i]>49 && $marks[$i]<=59)
      {
          $arr6[]=$marks[$i];
      }
      elseif($marks[$i]>59 && $marks[$i]<=69)
      {
          $arr7[]=$marks[$i];
      }
      elseif($marks[$i]>69 && $marks[$i]<=79)
      {
          $arr8[]=$marks[$i];
      }
      elseif($marks[$i]>79 && $marks[$i]<=89)
      {
          $arr9[]=$marks[$i];
      }
      elseif($marks[$i]>89 && $marks[$i]<=99)
      {
          $arr10[]=$marks[$i];
      }
  }
  
  //marks between 0 - 9
 
  print_r($arr1);
  echo  "The number between 0 -9 is\t" . count($arr1);

  echo '<br>';
  echo '<br>';
// marks between 10-19

  print_r($arr2);
  echo  "The number between 10 -19 is\t" .count($arr2);
  echo '<br>';
  echo '<br>';
  //marks between 20-29
 
  print_r($arr3);
  echo  "The number between 20 -29 is\t" .count($arr3);
  echo '<br>';
  echo '<br>';

  //marks between 30-39
 
  print_r($arr4);
  echo  "The number between 30 -39 is\t" .count($arr4);

  echo '<br>';
  echo '<br>';
//marks between 40-49

  print_r($arr5);
  echo  "The number between 40 -49 is\t" .count($arr5);
  echo '<br>';
  echo '<br>';

  //marks between 50-59
  
  print_r($arr6);
  echo  "The number between 50 -59 is\t" .count($arr6);
  echo '<br>';
  echo '<br>';
  //marks between 60-69
  
  print_r($arr7);
  echo  "The number between 60 -69 is\t" .count($arr7);

  echo '<br>';
  echo '<br>';
//marks between 70-79

  print_r($arr8);
  echo  "The number between 70 -79 is\t" .count($arr8);
  echo '<br>';
  echo '<br>';
  //marks between 80-89
  
  print_r($arr9);
  echo  "The number between 80 -89 is\t" .count($arr9);
  echo '<br>';
  echo '<br>';
  //marks between 90-99
  
  print_r($arr10);
  echo "The number between 90 -99 is\t" .count($arr10);
    
 ?>