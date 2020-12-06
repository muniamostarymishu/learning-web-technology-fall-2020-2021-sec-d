<?php
	require_once('../db/db.php');
	
if(isset($_REQUEST['submit']))
{
    
if(!empty($_REQUEST['username']) and !empty($_REQUEST['email']) and !empty($_REQUEST['password']) and !empty($_REQUEST['userRadio']))
{
      echo "Please Fill all the information!";
}
else{
        
        $conn = getConnection();
        $sql = "insert into users (username, password, email, type) values ('$username', '$password', '$email', '$type')";
       
if(mysqli_query($conn, $sql)){
        
        echo "User Successfully created!";
        
        
    }
    else{
        
        echo "Failed to create user!";
        
    }	   
    }
    
} 

?>



