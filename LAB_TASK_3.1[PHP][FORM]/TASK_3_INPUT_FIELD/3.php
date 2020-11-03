<?php

   $day = "";
   $month = "";
   $year = ""; 
  if(isset($_REQUEST['submit'])){ 
    $day =  $_REQUEST['day'];
    $month =  $_REQUEST['month'];
    $year =  $_REQUEST['year'];    
  }
?>

<html>
  <head>
    <title>DOB</title>
  </head>

  <body>
    <form method="get">
      <fieldset>
        <legend>DATE OF BIRTH</legend>
        <pre>  dd      mm     yyyy</pre>
        <input type="tel" name="day" size="1" value=" <?=$day ?>"/>
        <input type="tel" name="month" size="1" value=" <?=$month ?>"/> /
        <input type="tel" name="year" size="2" value=" <?=$year ?>"/> 
        <hr />
        <input type="submit" value="Submit" name="submit" />
      </fieldset>
    </form>
  </body>
</html>