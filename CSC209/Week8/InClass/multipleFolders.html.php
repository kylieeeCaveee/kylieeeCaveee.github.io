<!DOCTYPE html>
<html>
    <head>
        <script src="displayImages.js"></script>
        <?php
            $ALBUMCOVERS= array_merge(glob('Imgs/*.jpg'), glob('Imgs/*.jpeg'), glob('Imgs/*.png')); 
            $BASKETBALL= array_merge(glob('Imgs2/*.jpg'), glob('Imgs2/*.jpeg'), glob('Imgs2/*.png')); 
        ?>
    </head>
    <body> 
        <button type="button" onclick="displayAlbum()">Album Covers</button>
        <button type="button" onclick="displayBasketball()"> Basketball Players</button>
        <div Id="albumImages"></div>
        <div Id="basketballImages"></div>
        <script>
            displayAlbum();
        </script>
        <?php
            $finalAlbumString= "";
            foreach($ALBUMCOVERS as $picture){
                $finalAlbumString= $finalAlbumString . '<img src="'. $picture.'"><br><br>'; 
            }
           
            $finalBasketballString= "";
            foreach($BASKETBALL as $picture){
                $finalBasketballString= $finalBasketballString . '<img src="'. $picture.'"><br><br>'; 
            }
           
        ?>
        <script> 
            document.getElementById("albumImages").innerHTML=<?php echo json_encode($finalAlbumString);?>;
            document.getElementById("basketballImages").innerHTML=<?php echo json_encode($finalBasketballString);?>;
        </script>
    </body>
</html>