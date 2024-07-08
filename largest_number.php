<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1 >= $num2 && $num1 >= $num3) {
  $largest = $num1;
  echo "The $largest largest $num2, and $num3";
} else if($num2 >= $num1 && $num2 >= $num3) {
  $largest = $num2;
  echo "The $largest largest $num1, and $num3";
} else {
  $largest = $num3;
  echo "The $largest largest $num1, and $num2";
}
