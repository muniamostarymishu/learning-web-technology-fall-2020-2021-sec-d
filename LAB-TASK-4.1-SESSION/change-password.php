<html>
<head>
    <title>XCompany</title>
</head>
<body>
   <table border="2" width="60%">
     <tr>
      <td>
         <a href="dashboard.php"><img src="logo.png" alt="Logo"></a>
      </td>
     <td align="right">
       Logged in as <a href="profile.php">bob</a> |
          <a href="logout.php">Logout</a>
     </td>
    </tr>
	<tr>
     <td>
        <b>Account</b><hr>
    <ul>
           <a href="dashboard.php"><li>Dashboard</li></a>
           <a href="profile.php"><li>View Profile</li></a>
           <a href="edit-profile.php"><li>Edit Profile</li></a>
           <a href="profile-picture.php"><li>Change Profile Picture</li></a>
           <a href="change-password.php"><li>Change Password</li></a>
           <a href="logout.php"><li>Logout</li></a>
    </ul>
    </td>
    <td width=80%>
<form action="change-password.php" method="post">
   <fieldset>
       <legend><b>CHANGE PASSWORD</b></legend>
            <b>Current Password</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="currentpassword"><br><br>
            <b>New Password</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="newpassword"><br><br>
            <b>Retype New Password</b>&nbsp;&nbsp;&nbsp;&nbsp;: <input type="password" name="retypenewpassword">
            <hr><input type="submit" name="submit" value="Submit">
    </fieldset>
</form>
     </td>
    </tr>
    <tr>
    <td colspan="2" align="center">
         <p>Copyright &#169; 2017</p>
    </td>
    </tr>
</table>
    
</body>
</html>


<?php
session_start();
if(isset($_REQUEST['submit']))
{
if(!empty($_REQUEST['newpassword']) and $_COOKIE['password']==$_REQUEST['currentpassword'] and $_REQUEST['newpassword']==$_REQUEST['retypenewpassword']){
    setcookie('password', $_REQUEST['newpassword'], time()+86400, '/');
    echo $_COOKIE['password'];
}
else{
      echo "Error!";
    }
}
?>