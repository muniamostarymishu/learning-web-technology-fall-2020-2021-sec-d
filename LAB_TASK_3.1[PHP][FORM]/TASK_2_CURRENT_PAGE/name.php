<?php
    if (isset($_POST['submit'])) {
    echo "NAME IS: " . $_POST['name'];
}
?>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Name</legend>
			<input type="text" name="name" value="">
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

</body>
</html>
