<html>
<body>
<?php
require "userInfoFunctions.php"; 
echo "Goodbye!"; 
if(isset($_POST['userNumber'])&& isset($_POST['minutesLogged'])){

    updateMinutesLogged($_POST['userNumber'], $_POST['minutesLogged']); 
}
?>


</form>
</body>
</html>