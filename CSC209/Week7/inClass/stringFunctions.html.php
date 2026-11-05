<!DOCTYPE html>
<html>
<body>

<h2>The strlen() Function</h2>

<?php
echo strlen("Hello world!");
?> 

<h2>The str_word_count() Function</h2>

<?php
echo str_word_count("Hello world!");
?> 

<h2>The str_contains() Function</h2>

<?php
$txt = "I really love PHP!";
var_dump(str_contains($txt, "love"));
?>
<h2>The str_replace() Function</h2>

<?php
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
?> 
 
 <h2>The trim() Function</h2>

<?php
$x = "     Hello World! ";
echo trim($x);
?> 

<p>The whitespaces are invisible in plain HTML,<br>
but check out the difference in two input fields:</p>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
?> 
<h2>The explode() Function</h2>

<?php
$x = "Hello lovely World!";
$y = explode(" ", $x);

//Use print_r() to display the result
print_r($y);
?> 

<h2> Concatenating Strings </h2> 
<?php
//works with single or double
$x = "Hello";
$y = "World";
$z = $x . $y;
echo $z;
?>

<?php
//only works with double
$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z;
?>

<h2>The substr() Function</h2>

<?php
$x = "Hello World!";
echo substr($x, 6, 5);
?> 
<?php
$x = "Hello World!";
echo substr($x, -5, 3);
?> 
<?php
//negative lengths specifies how many characters to omit starting from the end of the string
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?> 


 
</body> 
</html>
