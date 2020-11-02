<?php
    if(isset($_POST['submit']))
    {
      if($_POST['bloodgroup']!=null)
      {
        foreach($_POST['bloodgroup'] as $blood_group)
        {
          echo 'Blood Group is:'.$blood_group;
        }          
      } 
      else 
      {
        echo 'select anyone.';
      }
    }  
?>