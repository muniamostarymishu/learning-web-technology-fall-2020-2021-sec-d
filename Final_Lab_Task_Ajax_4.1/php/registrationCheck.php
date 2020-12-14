<?php
if(isset($_REQUEST['submit']))
{
  if(!empty($_REQUEST['id']) and !empty($_REQUEST['password']) and !empty($_REQUEST['confirmpassword']) and !empty($_REQUEST['email']))
{
  if(userRegistration($_REQUEST['id'], $_REQUEST['password'], $_REQUEST['confirmpassword'], $_REQUEST['email']))
     {
       header('location: ../view/registration.php?msg=registration_completed');
     }
else{
       header('location: ../view/registration.php?msg=registration_failed');
    }
        
}
  else{
        header('location: ../view/registration.php?msg=null');
      }
}

?>