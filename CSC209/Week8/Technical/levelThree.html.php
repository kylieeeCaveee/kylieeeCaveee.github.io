<!DOCTYPE>
<html>
    <head>
        <title>Level Three </title>
        <?php
            $IMAGES= array_merge(glob('Imgs/*.jpg'), glob('Imgs/*.jpeg'), glob('Imgs/*.png')); 
        ?>
        <link rel="stylesheet" href="CSS/levelThree.css">
        <script src="JS/levelThree.js"></script>


    </head>
    <body>
        <div class="dropdown">
            <button class="dropbtn"> Dropdown </button>
            <div class="dropdown-content">
                <button id="checkmateButton" onclick="showCheckmate();"> Checkmate </button>
                <button id="jigsawButton" onclick="showJigsaw();"> Jigsaw </button>
                <button id="obsessedButton" onclick="showObsessed();"> Obsessed </button>
                <button id="overdriveButton" onclick="showOverdrive();"> Overdrive </button>
                <button id="sitwButton" onclick="showSitw();"> Salt in the Wound </button>
                <button id="tppButton" onclick="showTpp();"> The PerfectPair</button>
            </div>
        </div>
        <br>

    <?php
        $x=0;
        foreach($IMAGES as $picture){

            echo '<img id="'. $x. '"src="'. $picture.'"><br><br>';
            $x++;
        }
    ?>

    <script>
        intializePhotos(); 

    </script>


    </body>
</html>