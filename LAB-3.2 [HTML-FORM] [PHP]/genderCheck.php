<?php
if(isset($_REQUEST['submit']))
{
if(isset($_REQUEST['gender']))
{
    echo "Gender: ".$_REQUEST['gender'];
}
else{
     header('location: gender.html?msg=null-gender');
    }
}
else{header('location: gender.html?msg=null-gender');
}
?>