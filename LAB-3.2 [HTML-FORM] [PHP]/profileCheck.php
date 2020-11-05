<?php
if(isset($_REQUEST['submit']))
{
if($_REQUEST['user_id']>0 and isset($_REQUEST['picture']) and !empty($_REQUEST['user_id']))
{
  echo "Validation Successful";
}
else{
     header('location: profile.html?msg=invalid-info');
    }
}
else{
      header('location: profile.html?msg=error');
}

?>