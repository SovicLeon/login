<?php
    $usernames = array("Leon", "Mali");
    $passwords = array("Sovic", "Cigan");
    $ime = $_POST["username"];
    $geslo  = $_POST["password"];
    $limit = count($usernames);
    for($i = 0; $i < $limit; $i+=1){
        if (($usernames[$i]==$ime)&&($passwords[$i]==$geslo)){
            header("location: main.html");
            break;
        }
        else{
            header("location: falselogon.html");
        }
    }    	
?>