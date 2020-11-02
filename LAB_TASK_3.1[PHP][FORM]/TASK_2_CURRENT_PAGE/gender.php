<?php

if (isset($_GET['submit'])) {
    $gender = $_GET['gender'];
    echo "Selected gender: " . $gender;
}
?>
<html>
<head>
	<title>GENDER</title>
</head>
<body>

	<form method="get">
		<fieldset>
			<legend>Gender</legend>
			 <input type="radio" name="gender" value="Male" /> Male
             <input type="radio" name="gender" value="Female" /> Female
             <input type="radio" name="gender" value="Other" /> Other <br />
		
		<input type="submit" value="Submit" name="submit" />
		
		</fieldset>
	</form>
</body>
</html>