<?php

$blood = "";

if(isset($_POST['submit'])){
    $blood = $_REQUEST['bloodgroup'];
}

else{
    $blood = "";
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
            <select name="bloodgroup">
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
			<input type="text" name="blood" value="<?=$blood?>"> </br>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>
