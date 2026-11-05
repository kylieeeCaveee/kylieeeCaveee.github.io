
<!DOCTYPE html>
<html>
<body>

<?php  
//array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  
<?php
//object
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>
//Strings
<p>Using double quotes:</p>
<pre>
<?php
$x = "John";
echo "Hello $x\n";
echo "\tHow are you?\n";
?>
</pre>

<p>Using single quotes:</p>
<pre>
<?php
$x = 'John';
echo 'Hello $x\n';
echo '\tHow are you?\n';
?>
</pre>



</body>
</html>
