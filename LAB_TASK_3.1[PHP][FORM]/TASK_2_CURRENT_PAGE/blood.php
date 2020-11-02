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
<html>
<head>
    <title>Blood Group</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bloodgroup[]">
                <option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
            </select>
            </br>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>
