<?php
function updateLoggedTimes($username, $loggedTime){
        $file=fopen("users.json", "r"); 
        $currentLine=fgets($file); 
        $currentFile="";
        $targetLine='"username": "'.$username.'",'."\n";
        $newLoggedtimes= $loggedTime+1;
        while(! feof($file)){
            if(trim($currentLine)== trim($targetLine)){
                //store username line
                $currentFile= $currentFile. $currentLine; 
                //store password line
                $currentLine=fgets($file); 
                $currentFile= $currentFile. $currentLine; 
                //modify loggedtimes line
                fgets($file); 
                $currentLine='    "loggedtimes": '.$newLoggedtimes.",\n"; 
                $currentFile=$currentFile. $currentLine; 
                $currentLine=fgets($file); 
            }else{
                $currentFile=$currentFile. $currentLine; 
                $currentLine= fgets($file); 
            }
        }
        fclose($file);
       $file=fopen("users.json", "w"); 
        fwrite($file, $currentFile); 
        fclose($file); 

    }
?>