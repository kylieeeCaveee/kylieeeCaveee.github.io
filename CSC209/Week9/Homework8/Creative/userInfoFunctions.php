<?php
function displayUserInfo($userNumber){
    $file= fopen(__DIR__."/users.json", "r");   
    $jsonString=file_get_contents(__DIR__."/users.json"); 
    fclose($file); 
    $usersArray= json_decode($jsonString, true); 


    echo "Your username is: ".$usersArray[$userNumber-1]["username"]."<br>";
    echo "Your password is: ".$usersArray[$userNumber-1]["password"]. "<br>";
    echo "The amount of times you have logged in is ".$usersArray[$userNumber-1]["loggedtimes"]."<br>"; 
    echo "The minutes you have logged is: "; 
    for ($x=0; $x<count($usersArray[$userNumber-1]["minuteslogged"]); $x++){
        echo $usersArray[$userNumber-1]["minuteslogged"][$x]; 
        if($x<count($usersArray[$userNumber-1]["minuteslogged"])-1){
            echo ', '; 
        }
                    
    }
    echo '.';
}

function updateLoggedTimes($userNumber){
    $file= fopen(__DIR__."/users.json", "r");   
    $jsonString=file_get_contents(__DIR__."/users.json"); 
    fclose($file); 
    $usersArray= json_decode($jsonString, true); 
    $usersArray[$userNumber-1]["loggedtimes"]++; 
    $jsonString= json_encode($usersArray, JSON_PRETTY_PRINT ); 
    $file= fopen(__DIR__."/users.json", "w"); 
    fwrite($file, $jsonString); 
    fclose($file);

}



function extractFolderNumber($folderName){
    $folderPath=realpath($folderName); 

    $folderBaseName= strrchr($folderPath, "/"); 
    $folderBaseName= substr($folderBaseName, 1); 

    //find the first index of a number
    $currIdx=0; 
    $stringArray=str_split($folderBaseName); 
    for($x=0; $x<count($stringArray); $x++){
        if(is_numeric($stringArray[$x])==true){
            break; 
        }else{
            $currIdx++; 
        }
    }

    
    $folderLastChars= substr($folderBaseName, $currIdx); 
    

    if(is_numeric($folderLastChars)==true){
        $folderLastNum= (int)$folderLastChars; 
    }else{
        echo "error, the last digit is not a number"; 
    }



    return $folderLastNum; 

}

function updateMinutesLogged($userNumber, $minutesLogged){
    $file= fopen("users.json", "r");   
    $jsonString=file_get_contents("users.json"); 
    fclose($file); 
    $usersArray= json_decode($jsonString, true); 
    $usersArray[$userNumber-1]["minuteslogged"][]= (int) $minutesLogged; 
    $jsonString= json_encode($usersArray, JSON_PRETTY_PRINT); 
    $file= fopen("users.json", "w"); 
    fwrite($file, $jsonString); 
    fclose($file);

}

?>

