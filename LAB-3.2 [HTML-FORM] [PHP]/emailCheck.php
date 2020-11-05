<?php
if(isset($_REQUEST['submit']))
{
   $email = $_REQUEST['email'];
if(!empty($email))
{
if(strpos($email, ".")==true)
{
   echo "Valid Email";
}
else{
       header('location: email.html?msg=invalid-email');
    }
}
else{
        header('location: email.html?msg=null-email');
    }   
}

else{
     header('location: email.html?msg=error');
}
?>