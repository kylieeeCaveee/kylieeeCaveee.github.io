<!DOCTYPE html>
<html>
<body>

<?php
//if
if (5 > 3) {
  echo "Have a good day!";
}
?>
<?php
//if else if 
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
//shorthands below
?>
<?php
//shorthand if
$a = 5;

if ($a < 10) $b = "Hello";

echo $b
?>
<?php
//shorthand if else 
$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;
?>

<?php
//switch
$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The week feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are best!";
    break;
  default:
    echo "Something went wrong";
}
?>

<?php
//match
$favcolor = "red";

$text = match($favcolor) {
  "red" => "Your favorite color is red!",
  "blue" => "Your favorite color is blue!",
  "green" => "Your favorite color is green!",
  default => "Your favorite color is neither red, blue, nor green!",
};

echo $text;
?>
 
</body>
</html>
