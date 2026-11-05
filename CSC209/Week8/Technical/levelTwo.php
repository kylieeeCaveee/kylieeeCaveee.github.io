
<?php
$IMAGES= array_merge(glob('Imgs/*.jpg'), glob('Imgs/*.jpeg'), glob('Imgs/*.png')); 


foreach($IMAGES as $picture){
    echo "<img src=". $picture."><br><br>"; 
}
?>
