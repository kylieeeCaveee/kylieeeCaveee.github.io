<!DOCTYPE html>
<html>
<body>

<h2>Global Scope</h2>

<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will not work
  echo "Variable x inside function is: $x<br>";
} 
myTest();

echo "Variable x outside function is: $x";


//use static keyword to have variable not be deleted after the function ends
function myTestOne() {
  static $y = 0; // static scope
  echo $y;
  $y++;
}

myTestOne();
myTestOne();
myTestOne();

//global keyword 
$a = 5;
$b = 10;

function myTestTwo() {
  global $a, $b;
  $a = $a + $b;
}

myTestTwo();
echo $y; // outputs 15


?>


</body>
</html>
