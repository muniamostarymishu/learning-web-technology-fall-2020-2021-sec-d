<html>
<head>
	<title>Login Page</title>
</head>
<body>
 <table>
	<tr>
      <td>
         <form action="php/loginCheck.php" method="post">
		 <fieldset>
           <legend><b>Login</b></legend>
             User Id<input type="text" name="userid" value=""><br><br>
             Password<input type="password" name="password" value=""><br><br>
             <input type="submit" name="submit" value="Login">
			 <a href="registration.php"> Register</a>
    
		</fieldset>
       </form>
    </td>
   </tr>
</table>
		
	</form>
</body>
</html>

<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'null'){
			echo "null submission...";
		}

		if($_REQUEST['msg'] == 'invalid'){
			echo "invalid username/password";
		}

		if($_REQUEST['msg'] == 'login_first'){
			echo "please login first...";
		}
	}
?>