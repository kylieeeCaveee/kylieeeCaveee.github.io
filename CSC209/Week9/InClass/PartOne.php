<!DOCTYPE html>
<html>
<body>
<?php
$file= fopen("users.json", "r");
$jsonString=file_get_contents("users.json"); 
$object= json_decode($jsonString);
echo var_dump($object); 
?>
</body>
</html>