<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    echo "Your email: " . $email;
}
?>
<html>
<head>
	<title>email</title>
</head>
<body>

	<form method="post">
		<fieldset>
	
		Email<br> 
		<input type="email" name="email"  > 
		 <button title="hint:sample@example.com">i</button><br />
		<input type="submit" name="submit" value="submit"> <br>
		
		</fieldset>
	</form>
</body>
</html>