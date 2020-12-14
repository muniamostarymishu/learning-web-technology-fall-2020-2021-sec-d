<?php

require_once('../models/userService.php');

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['userid']) and !empty($_REQUEST['password'])){
        
        if(validateUser($_REQUEST['userid'], $_REQUEST['password'])){
            
            header('location: ../index.php?msg=valid');
            
        }
        
        else{
            
            header('location: ../index.php?msg=invalid_user');
        }
        
    }
    
    else{
        
        header('location: ../index.php?msg=null');
        
    }
    
}

?>