<!DOCTYPE html>
<html>
<body>
<h2> For each loop </h2> 
<?php  
//classic indexed array
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
  echo "$value <br>";
}
?>  

<?php
//associative arrays
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $key => $value) {
  echo "$key : $value <br>";
}
?>

<?php
//looping through the properties of an element
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");

foreach ($myCar as $x => $y) {
  echo "$x: $y<br>";
}
?>


</body>
</html>
