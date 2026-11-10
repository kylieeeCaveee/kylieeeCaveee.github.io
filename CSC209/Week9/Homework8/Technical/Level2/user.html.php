<?php
    require 'updateUserInfoFunctions.php'; 
    $file= fopen("users.json", "r");   
    $jsonString=file_get_contents("users.json"); 
    $usersObject= json_decode($jsonString);


    $currentUsername= $_POST["username"];
    $currentPassword= $_POST["password"];
    $logInFound= false; 

    foreach($usersObject as $user){
        if($user->username==$currentUsername){
            if($user->password==$currentPassword){
                echo "Welcome ".$_POST["username"]. "<br>";
                echo "Your password is ".$_POST["password"]. "<br>";
                echo "The amount of times you have logged in is ". $user->loggedtimes. "<br>"; 
                echo "The minutes you have logged is: "; 
                for ($x=0; $x<count($user->minuteslogged); $x++){
                    echo $user->minuteslogged[$x]; 
                    if($x<count($user->minuteslogged)-1){
                        echo ', '; 
                    }
                    
                }
                echo '.';
                $logInFound= true; 
                updateLoggedTimes($user->username, $user->loggedtimes); 
            }
        }
    }
    if($logInFound==false){
        header("Location: http://localhost:8888/kylieeeCaveee.github.io/CSC209/Week9/Homework8/Technical/Level2/login.html.php?loginfailed=true"); 
        exit(); 
    }
?>