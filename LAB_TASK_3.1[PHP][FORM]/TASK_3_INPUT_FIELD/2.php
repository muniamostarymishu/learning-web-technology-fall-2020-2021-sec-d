<?php
$data = "";
if (isset($_REQUEST['submit']))
 {
    $email = $_REQUEST['email'];
if($email == "")
{
	echo "Your email: " . $email;
}
else{
	 $data = $email;
	}
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
		<input type="email" name="email" value=" <?=$data ?>" > 
		 <button title="hint:sample@example.com">i</button><br />
		<input type="submit" name="submit" value="submit"> <br>
		
		</fieldset>
	</form>
</body>
</html>