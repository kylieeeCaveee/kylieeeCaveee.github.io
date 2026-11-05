<!DOCTYPE>
<html>
  <head>
    <title>Level Four</title>
    <?php
     $ALBUMCOVERS= array_merge(glob('Imgs/*.jpg'), glob('Imgs/*.jpeg'), glob('Imgs/*.png'));
    ?>
    <link rel="stylesheet" href="CSS/levelFour.css">
    <script src="JS/levelFour.js"></script>
  </head>
  <body>
    <div id= "mainSlideShow" class="slideshow-container">

    </div>
    <?php
      $numImage=0; 
      $totalImages= count($ALBUMCOVERS);
      $mainSlideShowCode=""; 
      foreach($ALBUMCOVERS as $picture){
        $mainSlideShowCode= $mainSlideShowCode. '<div class="mySlides fade"> <div class="numbertext">'. ($numImage+1) .'/'.$totalImages.'</div>
        <img src="'.$picture.'" style="width: 100%"></div><br>';
        $numImage++; 
      }
      $mainSlideShowCode= $mainSlideShowCode. '<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>'; 
    ?>
    
    <script>
        document.getElementById("mainSlideShow").innerHTML=<?php echo json_encode($mainSlideShowCode);?>;
    </script>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
      <span class="dot" onclick="currentSlide(6)"></span>
    </div>


  </body>
</html>