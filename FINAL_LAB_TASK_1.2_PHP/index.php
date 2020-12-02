<html>
<head>
    <title>Login</title>
</head>
<body>
<center>
<table align="left">

   <tr>
     <th>
        <h1>Login</h1>
    
    </th>
   </tr>

   <tr>

      <td>
         <form action="php/loginCheck.php" method="post">
             Username<input type="text" name="uname" value=""><br><br>
             Password<input type="password" name="password" value=""><br><br>
             <input type="submit" name="submit" value="Login">
             <a href="view/registration.php"><input type="button" name="registration" value="Registration"></a>
         </form>
       </td>
   </tr>
 </table>
</center>
</body>
</html>
