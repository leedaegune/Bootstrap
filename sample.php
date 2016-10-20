<?php
  $var1 =10;
  $var2 = 20;

  echo $var1.'<br>';
  echo $var1 + $var2.'<br>';

  $array = [10, 20, 30];
  $object = array("name" => "Gune", "age" => 30);
  print_r($array);
  print_r($object);

  echo $array[0];
  echo $object["name"].'<br>';

  function add($num1, $num2) {
    // echo $var1 + $var2
    return $num1 + $num2;
  }
  echo $num1.$num2; //error
  echo add(1,2);
?>
