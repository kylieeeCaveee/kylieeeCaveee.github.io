<!DOCTYPE>
<html>
  <head>
    <title>Creative Hw 6</title>
   
    <?php
     $VALKS= array_merge(glob('Imgs/*.jpg'), glob('Imgs/*.jpeg'), glob('Imgs/*.png'));
     $DREAM= array_merge(glob('Imgs2/*.jpg'), glob('Imgs2/*.jpeg'), glob('Imgs2/*.png'));
    ?>
    <link rel="stylesheet" href="CSS/creative.css">
    
    <script src="JS/displayFunctions.js"></script>
  </head>
  <body>
    <header> WNBA Finals Photos </header>
    <div id="introInfo"> 
      <h3>The WNBA 2026 Finals took place from October 17 to October 31 and featured the Golden State Valkyries versus the Atlanta dream. Click the buttons below to go through the two teams rosters. </h3>
    </div>
    <div id="buttonMenu">
      <button id="valksButton" type="button" onclick="displayValks()">Golden State Valkyries</button>
      <button id="dreamButton" type="button" onclick="displayDream()"> Atlanta Dream</button>
    </div>
    <div id= "valksSlideShow" class="slideshow-container"></div>
    <div id= "dreamSlideShow" class= "slideshow-container"></div>
    <?php
      $numImage=0; 
      $totalImages= count($VALKS);
      $mainSlideShowCode=""; 
      foreach($VALKS as $picture){
        $mainSlideShowCode= $mainSlideShowCode. '<div class="mySlides fade"> <div class="numbertext">'. ($numImage+1).'/'.$totalImages.'</div>
        <img src="'.$picture.'" style="width: 100%"><div class=text>'.$picture.'</div></div>';
        $numImage++; 
      }
      $mainSlideShowCode= $mainSlideShowCode. '<a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>'; 
    ?>
    <?php
      $numImage=0; 
      $totalImages= count($DREAM);
      $mainSlideShowCode2=""; 
      foreach($DREAM as $picture){
        $mainSlideShowCode2= $mainSlideShowCode2. '<div class="mySlides fade"> <div class="numbertext">'. ($numImage+1).'/'.$totalImages.'</div>
        <img src="'.$picture.'" style="width: 100%"><div class=text>'.$picture.'</div></div>';
        $numImage++; 
      }
      $mainSlideShowCode2= $mainSlideShowCode2. '<a class="prev" onclick="plusSlides(-1,2)">&#10094;</a>
      <a class="next" onclick="plusSlides(1,2)">&#10095;</a>'; 
    ?>
    
    <script>
      document.getElementById("valksSlideShow").innerHTML=<?php echo json_encode($mainSlideShowCode);?>;
      document.getElementById("dreamSlideShow").innerHTML=<?php echo json_encode($mainSlideShowCode2);?>;
      displayValks();

    </script>
    <footer>
      <a href="../main.html"> Return to Homework Home Page </a>
    </footer>
  </body>
</html>