<?php


require_once('db.php');

function userRegistration($id, $password, $confirmpassword, $email){
    
    $conn = getConnection();
    $sql = "insert into user (id, password, confirm-password,name, email, user-type) values ('$id', '$password', '$confirm_Spassword','$name', '$email','$user_Stype')";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}
function validateUser($userid, $password){
    
    $conn = getConnection();
    $sql = "select * from user where username = '$userid' and password = '$password'";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}




?>