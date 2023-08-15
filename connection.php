<?php      
    $hs = "localhost";  
    $ur = "root";  
    $ps = "";  
    $db = "javapoint";  
      
    $con = mysqli_connect($hs,$ur, $ps,$db);  
    if($con === FALSE) {  
        die("Failed to connect with MySQL: ");  
    }  
    else{
    
    echo"Database is connected.";
    }