<?php 
 /* 
  $num_one = -1;
  $num_two = 2.5;

  $let_one = "o";
  $let_two = "z";

  $str = "El%er0";

  // Write Your Code Here
  echo str_replace(["%", "0"],[$let_two, $let_one],$str);
  echo $str; // Elzero
 ?>

 <?php 
 
  $num_one = -1;
  $num_two = 2.5;

  $let_one = "o";
  $let_two = "z";

  $str = "El%er0";

  // Write Your Code Here
  $str[$num_one] = $let_one;
  $str[$num_two] = $let_two;
  echo $str; // Elzero
 
 ?>

  $str = "Orezle";
  echo ucfirst(strtolower( strrev($str)));


  $str = 'aAa';
  $num = 3;
  $char = "_";

  $str[$num] = $char;
  echo str_repeat($str, $num);

 $str = "<div><b>Elzero</b></div>";
  echo strip_tags($str, "<b>");

$chars = ["E", "l", "z", "e", "r", "o"];
echo implode("", $chars);



$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
for($x = 0; $x < count($chars); $x++) {
  if(is_string($chars[$x])) {
    echo $x == 0 ? ucfirst(strtolower($chars[$x])) : strtolower($chars[$x]);
  }
}
*/ 