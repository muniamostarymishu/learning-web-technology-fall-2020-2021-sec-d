<?php
if(isset($_REQUEST['submit']))
{
if(!empty($_REQUEST['bloodGroup']))
{
  echo "BloodGroup: ".$_REQUEST['bloodGroup'];
}
else{
     header('location: bloodgroup.html?msg=null');
    }
}
else{
    header('location: bloodgroup.html?msg=error');
}
?>