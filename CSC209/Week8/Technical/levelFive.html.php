<!DOCTYPE>
<html>
  <!--AI was used to help with the creation of this level to facilitate a deeper understanding of how to use the get element of Php, all comments are my own an explain my understanding of what the code did-->
  <head>
    <title>Level Five</title>
    <?php
     $ALBUMCOVERS= array_merge(glob('Imgs/*.jpg'), glob('Imgs/*.jpeg'), glob('Imgs/*.png'));
     $totalImages= count($ALBUMCOVERS); 
     //this line of code sets the variable of slide to the appropriate image based on the get parameter
     //isset() checks wether the value for slide has been created and is not null
     //the question mark is ternary operator so it is saying if the slide variable exists assign its value to the current slide and if it doesnt assign it to one
     //we need to cast as an int because information passed through the url is a string
     $slide= isset($_GET['slide'])? (int)$_GET['slide']: 1; 
     //checking the slide number is accurate and creating the loop
     if($slide <1){
      $slide=$totalImages;
     }
     if($slide > $totalImages){
      $slide=1; 
     }

     //calculate previous and next slide
     $previous= $slide-1; 
     $next= $slide+1; 
     if ($previous<1){
      $previous= $totalImages; 
     }
     if ($next > $totalImages){
      $next =1; 
     }

    ?>
    <link rel="stylesheet" href="CSS/levelFive.css">
  </head>
  <body>
    <div id= "mainSlideShow" class="slideshow-container">
      <?php if ($totalImages >0) { ?>
        <div class= "mySlides fade">

          <div class="numbertext">
            <?php echo $slide . '/'. $totalImages; ?>
          </div>
        <img src= "<?php echo $ALBUMCOVERS[$slide-1]; ?>" style="width:100%" >
        <!--the slide number is minus one to match the index of the array-->
        <div class= "text">
          <?php echo $ALBUMCOVERS[$slide-1]; ?>
        </div>
      
    
    </div>

    <!--Previous button -->
    <a class= "prev" href="?slide=<?php echo $previous; ?>">
       <!--the href here is what makes it so the slide changes; the ?slide adds a get parameter called slide to the url and the next sets it to the value stored at $previous aka the link would become like ...php?slide=2-->
      &#10094; 
      <!-- above is the html character entity for the left arrow-->
    </a>

    <!-- Next button -->
    <a class="next" href="?slide=<?php echo $next; ?>">
      <!--the href here is what makes it so the slide changes; the ?slide adds a get parameter called slide to the url and the next sets it to the value stored at next aka the link would become like ...php?slide=2-->
      &#10095;
      <!-- above is the html character entity for the right arrow--> 
    </a>

    <?php } else { ?>
      <p> No images found. </p>
    <?php } ?>
  </div>
  </body>
</html>

