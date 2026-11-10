<?php
    require "../../userInfoFunctions.php"; 
    $username="alice"; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> User Page </title> 
        <script>
            let TIMEON;
            let TIMEOFF; 
        </script>
        <script src="../../timeFunctions.js"></script>
    </head>
    <body onload= "getTimeOn();">
        <?php
        echo "Welcome ".$username. "<br>"; 
            $userNumber=extractFolderNumber(__DIR__) ; 
            updateLoggedTimes($userNumber); 
        ?>
        <form action="../../logout.html.php" method="post" onsubmit=" return timeLoggedIn(TIMEON)">
            <input type="hidden" name="userNumber" value="<?php echo extractFolderNumber(__DIR__) ?>" id="userNumber"><br>
            <input type="hidden" name="minutesLogged" id="minutesLogged">
        <button type="submit"> logout </button>
        </form>
    </body>
</html>