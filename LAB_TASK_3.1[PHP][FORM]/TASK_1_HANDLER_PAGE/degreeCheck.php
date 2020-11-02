<?php
    if(isset($_POST['submit']))
    {
      if($_POST['degree']!=null)
      {
        echo "Degree is:<br>";
        foreach($_POST['degree'] as $deg)
        {
          echo $deg."<br>";
        }
      }
      else
      {
        echo "No degree";
      }
    }
?>