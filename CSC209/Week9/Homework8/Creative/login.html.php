<!DOCTYPE html>
<html>
    <head> 
        <title> Log-In Page</title>
        <link rel="stylesheet" href="CSS/login.css">
    </head>
<body>
    <header> Log-in Page </header>
    <div id="logInContent">
    <h3> Welcome! Please enter your username and password to log in!</h3>
    <?php
    if(isset($_GET['loginfailed'])){
        if($_GET['loginfailed']=="true"){
            echo "Login attempt failed. Please try again."; 
        }
    }
    ?>
    <form action="validate.php" method="post">
        Username: <input type="text" name="username"><br>
        Password: <input type="text" name="password"><br>
    <input type="submit">
    </div>

    </form>
</body>
</html>