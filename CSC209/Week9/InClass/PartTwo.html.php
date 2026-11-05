<!DOCTYPE>
<html>
<head>
    <title> Part Two Lab One </title> 

</head>
<body>
<?php
    $file= fopen("users.json", "r");
    $jsonString=file_get_contents("users.json"); 
    $object= json_decode($jsonString);
    
?>
<?php
    $usernames=[]; 
    $passwords=[];
    $loggedInAmounts=[];
    foreach($object as $user){
        $usernames[]= $user -> username; 
        $passwords[]= $user -> password; 
        $loggedInAmounts[]=$user -> loggedtimes; 
    }
    $tableString="<tr>
        <th>Username </th>
        <th> Password </th>
        <th> Amoung Logged in </th>
    </tr>"; 
    for($x=0; x< count($usernames); x++) {
        tableString= tableString. '<tr> <td>'. username[x].'</td><td>'. passwords[x]. '</td><td>'.loggedInAmounts[x].'</td></tr>'
    }


    
?>


<table id=userTable>
</table>
<script>
    
<script> 

</body>
</html>