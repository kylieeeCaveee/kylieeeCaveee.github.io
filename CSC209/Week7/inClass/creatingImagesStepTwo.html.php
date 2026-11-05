<!DOCTYPE html>
<html>
    <head>
        <?php
            $IMAGES= array_merge(glob('Imgs/*.jpg'), glob('Imgs/*.jpeg'), glob('Imgs/*.png')); 
        ?>
    </head>
    <body> 
        <?php
            foreach($IMAGES as $picture){
                echo "<img src=". $picture."><br><br>"; 
            }
        ?>
    </body>
</html>