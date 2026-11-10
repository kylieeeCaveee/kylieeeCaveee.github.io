<?php
    require "../../userInfoFunctions.php"; 
    $username="erin"; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> User Page </title> 
        <link rel="stylesheet" href="../../CSS/user.css">
        <script>
            let TIMEON;
            let TIMEOFF; 
        </script>
        <script src="../../timeFunctions.js"></script>
    </head>
    <body onload= "getTimeOn();">
        <header> User Page </header>
        <div class="userInformation">
        <?php
        echo "Welcome ".$username. "<br>"; 
            $userNumber=extractFolderNumber(__DIR__) ; 
            updateLoggedTimes($userNumber); 
        ?>
        </div>
        <p> Your user information is displayed below!</p> 
        <div class="userInformation" id="userInfo">
            <?php
                displayUserInfo($userNumber); 
            ?>
        </div>
        <p> Press the button below to be logged out! </p>
        <form action="../../logout.html.php" method="post" onsubmit=" return timeLoggedIn(TIMEON)">
            <input type="hidden" name="userNumber" value="<?php echo extractFolderNumber(__DIR__) ?>" id="userNumber"><br>
            <input type="hidden" name="minutesLogged" id="minutesLogged">
        <button type="submit"> logout </button>
        </form>
    </body>
</html>