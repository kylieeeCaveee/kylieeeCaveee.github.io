<!DOCTYPE>
<html>
  <head>
    <title>Level Four</title>
   
    <?php
     $ALBUMCOVERS= array_merge(glob('Imgs/*.jpg'), glob('Imgs/*.jpeg'), glob('Imgs/*.png'));
     $CONCERTPHOTOS= array_merge(glob('Imgs2/*.jpg'), glob('Imgs2/*.jpeg'), glob('Imgs2/*.png'));
    ?>
    <link rel="stylesheet" href="CSS/levelFour.css">
    
    <script src="JS/levelSeven.js"></script>
  </head>
  <body>
    <button type="button" onclick="displayAlbum()">Album Covers</button>
    <button type="button" onclick="displayConcert()"> Concert Photos</button>
    <div id= "albumSlideShow" class="slideshow-container"></div>
    <div id= "concertSlideShow" class= "slideshow-container"></div>
    <?php
      $numImage=0; 
      $totalImages= count($ALBUMCOVERS);
      $mainSlideShowCode=""; 
      foreach($ALBUMCOVERS as $picture){
        $mainSlideShowCode= $mainSlideShowCode. '<div class="mySlides fade"> <div class="numbertext">'. ($numImage+1).'/'.$totalImages.'</div>
        <img src="'.$picture.'" style="width: 100%"><div class=text>'.$picture.'</div></div><br>';
        $numImage++; 
      }
      $mainSlideShowCode= $mainSlideShowCode. '<a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>'; 
    ?>
    <?php
      $numImage=0; 
      $totalImages= count($CONCERTPHOTOS);
      $mainSlideShowCode2=""; 
      foreach($CONCERTPHOTOS as $picture){
        $mainSlideShowCode2= $mainSlideShowCode2. '<div class="mySlides fade"> <div class="numbertext">'. ($numImage+1).'/'.$totalImages.'</div>
        <img src="'.$picture.'" style="width: 100%"><div class=text>'.$picture.'</div></div><br>';
        $numImage++; 
      }
      $mainSlideShowCode2= $mainSlideShowCode2. '<a class="prev" onclick="plusSlides(-1,2)">&#10094;</a>
      <a class="next" onclick="plusSlides(1,2)">&#10095;</a>'; 
    ?>
    
    <script>
      document.getElementById("albumSlideShow").innerHTML=<?php echo json_encode($mainSlideShowCode);?>;
      document.getElementById("concertSlideShow").innerHTML=<?php echo json_encode($mainSlideShowCode2);?>;
      displayAlbum();

    </script>
    <!--
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
    </div>
    -->

  </body>
</html>