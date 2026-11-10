<html>
<body>
<?php
if(isset($_GET['loginfailed'])){
    if($_GET['loginfailed']=="true"){
        echo "Login attempt failed. Please try again."; 
    }
}
?>
<form action="user.html.php" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="text" name="password"><br>
<input type="submit">


</form>
</body>
</html>