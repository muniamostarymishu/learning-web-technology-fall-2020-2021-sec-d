<?php


require_once('db.php');

function userRegistration($id, $password, $confirmpassword, $email){
    
    $conn = getConnection();
    $sql = "insert into employee (id, password, confirmpassword, email) values ('$id', '$password', '$confirmpassword', '$email')";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}
function validateUser($userid, $password){
    
    $conn = getConnection();
    $sql = "select * from employee where username = '$userid' and password = '$password'";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}




?>