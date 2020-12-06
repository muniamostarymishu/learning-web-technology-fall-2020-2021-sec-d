<html>
<head>
   <title>create user</title>
</head>
<body>
<table>
<td align="left"><a href="../index.php">
Back
</td>
</table>

   <table>
     <tr>
      <td height="500px" width="500px">
        <form action="../php/createCheck.php" method="POST">
        <fieldset>
           <legend><b>Create User</b></legend>
             
              Username <input type="text" name="username"><br><br>
              Email <input type="email" name="email"><br><br>
              Password <input type="password" name="password"><br><br>
              
              User type:<br> <input type="radio" name="userRadio" value="Customer"> Customer <br>
			           <input type="radio" name="userRadio" value="Seller"> Seller <br>
              <hr>
                     <input type="submit" name="submit" value="Submit">
						
        </fieldset>
        </form>
      </td>
      </tr>
    </table>
</body>
</html> 