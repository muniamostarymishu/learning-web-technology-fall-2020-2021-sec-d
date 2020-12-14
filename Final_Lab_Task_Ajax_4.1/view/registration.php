<html>
<head>
   <title>Registration Page</title>
</head>
<body>

   <table>
     <tr>
      <td height="500px" width="500px">
        <form action="../php/registrationCheck.php" method="POST">
        <fieldset>
           <legend><b>Registration</b></legend>
             
              Id <input type="text" name="id"><br><br>
              Password <input type="password" name="pass"><br><br>
              Confirm Password <input type="password" name="cpass"><br><br>
			   Name <input type="text" name="name"><br><br>
			   Email <input type="email" name="email"><br><br>
              User type:<br> <input type="radio" name="userRadio" value="Admin"> Admin <br>
			           <input type="radio" name="userRadio" value="Users"> Users <br>
              <hr>
                     <input type="submit" name="submit" value="Register">
						<a href="login.php"> Login</a>
        </fieldset>
        </form>
      </td>
      </tr>
    </table>
</body>
</html> 