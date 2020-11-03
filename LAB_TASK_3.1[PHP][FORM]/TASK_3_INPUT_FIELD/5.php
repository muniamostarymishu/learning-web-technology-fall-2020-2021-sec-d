<?php
$degree = "";
if (isset($_REQUEST['submit'])){
    $degree = $_REQUEST['degree'];
}
else{
    $degree = "";
}
?>
<html>
<head>
    <title>Degree</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" value="SSC" name="degree">SSC
            <input type="checkbox" value="HSC" name="degree">HSC
            <input type="checkbox" value="BSc" name="degree">BSc
			<input type="text" name="field" value="<?=$degree?>"> 
            </br>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>