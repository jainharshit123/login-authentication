<?php  

$username = $_POST['user'];  
       $password = $_POST['pass'];  
         
           //to prevent from mysqli injection  
           $username = stripcslashes($username);  
           $password = stripcslashes($password);  
           $username = mysqli_real_escape_string($con, $username);  
           $password = mysqli_real_escape_string($con, $password);  
         
           $sql = "select *from login where username = '$username' and password = '$password'";  
           $result = mysqli_query($con, $sql);  
           $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
           $count = mysqli_num_rows($result);  
             
           if($count == 1){  
               echo "<h1><center> Login successful </center></h1>";  
           }  
           else{  
               echo "<h1> Login failed. Invalid username or password.</h1>";  
           }              
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];


    $con = new mysqli('localhost','root','ABCDEFG','javatpoint'); 
    if($con === FALSE) {  
        die("Failed to connect with MySQL: ".$con->connect_error);  
    }  
    else{

    $stmt = $con->prepare("insert into login_details(name,password)values(?,?)");
    
    $stmy->bind_param("ss",$user,$pass);
    $stmy->execute();
    echo"success....";
    $stmy->close();
    $con->close();
    }
?>