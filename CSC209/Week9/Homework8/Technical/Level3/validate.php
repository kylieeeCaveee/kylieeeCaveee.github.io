<?php
    require 'userInfoFunctions.php'; 
    $file= fopen("users.json", "r");   
    $jsonString=file_get_contents("users.json"); 
    $usersObject= json_decode($jsonString);


    $currentUsername= $_POST["username"];
    $currentPassword= $_POST["password"];
    $logInFound= false; 
    $currUserNumber=1; 
    foreach($usersObject as $user){
        if($user->username==$currentUsername){
            if($user->password==$currentPassword){
                if($currUserNumber<=3){
                    $logInFound= true; 
                    $locationString= "Location: http://localhost:8888/kylieeeCaveee.github.io/CSC209/Week9/Homework8/Technical/Level3/Users/User".$currUserNumber."/user.html.php"; 
                    header($locationString); 
                    exit(); 
                }else{
                    $logInFound= true; 
                    header("Location: http://localhost:8888/kylieeeCaveee.github.io/CSC209/Week9/Homework8/Technical/Level3/Admin/admin.html.php"); 
                    exit(); 
                }
                
            }
        }
        $currUserNumber= $currUserNumber+1; 

    }
    if($logInFound==false){
        header("Location: http://localhost:8888/kylieeeCaveee.github.io/CSC209/Week9/Homework8/Technical/Level3/login.html.php?loginfailed=true"); 
        exit(); 
    }
?>