<!DOCTYPE html>
<html>
<body>

<?php
//basic example
function myMessage() {
  echo "Hello world!";
}

myMessage();
?> 
<?php
//with parameters
function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>

<?php
//with default parameters
function setHeight($height = 50) {
  echo "The height is : $height.<br>";
}

setHeight(350);
setHeight();
?>


<?php
//with unknown number of parameters
function sumMyNumbers(...$x) {
  $n = 0;
  $len = count($x);
  for($i = 0; $i < $len; $i++) {
    $n += $x[$i];
  }
  return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;
?>

</body>
</html>
