<!DOCTYPE hmtl>
<html>
    <head>
        <title> Logout Page </title>
        <link rel="stylesheet" href="CSS/login.css">
    </head>

    <body>
    <?php
        require "userInfoFunctions.php"; 
        if(isset($_POST['userNumber'])&& isset($_POST['minutesLogged'])){

            updateMinutesLogged($_POST['userNumber'], $_POST['minutesLogged']); 
        }
    ?>
    <header> You have been sucessfully logged out! Goodbye!</header>
    <footer> <a href=../main.html> Return to Homework Homepage!</footer>

    </body>
</html>