<!DOCTYPE>
<html>
<head>
    <title> Admin Page </title> 
    <link rel="stylesheet" href="../CSS/admin.css">

</head>
<body>
    <header>Admin Page</header>
    <h3> Welcome to the admin page! All user information is displayed below. Admin Users logged in Amounts remain at Zero. Click on the buttons to sort by username, passowrd, and amount of times logged in.</h3>
<?php
    require '../adminFunctions.php'; 
    $file= fopen("../users.json", "r");
    $jsonString=file_get_contents("../users.json"); 
    $object= json_decode($jsonString);
    
?>
<?php
    $usernames=[]; 
    $passwords=[];
    $loggedInAmounts=[];
    $combinedArray=[]; 
    foreach($object as $user){
        $usernames[]= $user -> username; 
        $passwords[]= $user -> password; 
        $loggedInAmounts[]=$user -> loggedtimes; 
        $combinedArray[]= $user -> username;
        $combinedArray[]= $user -> password;
        $combinedArray[]= $user -> loggedtimes;

    }

    $tableString="<tr>
        <th><button type='submit' name='sort' value='username'>Username</button></th>
        <th><button type='submit' name='sort' value='password'>Password</button></th>
        <th><button type='submit' name='sort' value='logged'>Amount Logged In</button></th>
        </tr>";
        //notice the buttons have the submit type to make the form work properly along with the name and value
    for($x=0; $x< count($usernames); $x++) {
        $tableString= $tableString. '<tr> <td>'. $usernames[$x].'</td><td>'. $passwords[$x]. '</td><td>'.$loggedInAmounts[$x].'</td></tr>';
    }
?>

<?php
    if(isset($_GET['sort'])){
        if($_GET['sort']=="username"){
            $tableString= sortByName($usernames, $combinedArray); 
        }
        if($_GET['sort']=="password"){
            $tableString= sortByPassword($passwords, $combinedArray);
        }
        if($_GET['sort']=="logged"){
            $tableString= sortByLogged($loggedInAmounts, $combinedArray); 
        }
    }

    
?>
<form method="GET">
    <!--tells the html that we are using the get method-->
    <table id="userTable" border="1">
        <?php echo $tableString; ?>
    </table>
</form>

</body>
</html>