<?php

function sortByName($usernames, $combinedArray){
   sort($usernames); 
   $finalString="<tr>
        <th><button type='submit' name='sort' value='username'>Username</button></th>
        <th><button type='submit' name='sort' value='password'>Password</button></th>
        <th><button type='submit' name='sort' value='logged'>Amount Logged In</button></th>
        </tr>"; 
   for($x=0; $x <count($usernames); $x++){
     $currentUsername= $usernames[$x]; 

        for($y=0; $y< count($combinedArray); $y++){
            if($combinedArray[$y]==$currentUsername){
                $currentPassword= $combinedArray[$y+1]; 
                $currentLogged= $combinedArray[$y+2]; 
                $finalString= $finalString.'<tr> <td>'. $currentUsername.'</td><td>'. $currentPassword. '</td><td>'.$currentLogged.'</td></tr>';
            }
        }
    }

    return $finalString; 
}

function sortByPassword($passwords, $combinedArray){
    sort($passwords); 
   $finalString="<tr>
        <th><button type='submit' name='sort' value='username'>Username</button></th>
        <th><button type='submit' name='sort' value='password'>Password</button></th>
        <th><button type='submit' name='sort' value='logged'>Amount Logged In</button></th>
        </tr>";
   for($x=0; $x <count($passwords); $x++){
     $currentPassword= $passwords[$x]; 

        for($y=0; $y< count($combinedArray); $y++){
            if($combinedArray[$y]==$currentPassword){
                $currentUsername= $combinedArray[$y-1]; 
                $currentLogged= $combinedArray[$y+1]; 
                $finalString= $finalString.'<tr> <td>'. $currentUsername.'</td><td>'. $currentPassword. '</td><td>'.$currentLogged.'</td></tr>';
            }
        }
    }

    return $finalString; 

}

function sortByLogged($loggedInAmounts, $combinedArray){
    sort($loggedInAmounts); 
   $finalString="<tr>
        <th><button type='submit' name='sort' value='username'>Username</button></th>
        <th><button type='submit' name='sort' value='password'>Password</button></th>
        <th><button type='submit' name='sort' value='logged'>Amount Logged In</button></th>
        </tr>";
   for($x=0; $x <count($loggedInAmounts); $x++){
     $currentLogged= $loggedInAmounts[$x]; 

        for($y=0; $y< count($combinedArray); $y++){
            if($combinedArray[$y]==$currentLogged){
                $currentUsername= $combinedArray[$y-2]; 
                $currentPassword= $combinedArray[$y-1]; 
                $finalString= $finalString.'<tr> <td>'. $currentUsername.'</td><td>'. $currentPassword. '</td><td>'.$currentLogged.'</td></tr>';
            }
        }
    }

    return $finalString; 

}




?>