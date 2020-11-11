<?php
session_start();
$name = $_COOKIE['name'];
$email = $_COOKIE['email'];
$gender = $_COOKIE['gender'];
$date = $_COOKIE['date'];
?>


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
           Logged in as <a href="profile.php"><?=$name?></a> |
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
<fieldset>
        <legend><b>PROFILE</b></legend>
<table>    
     <tr>
     <td>
            Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?=$name?>
     <hr>
            Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?=$email?>
     <hr>
            Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<?=$gender?>
     <hr>
            Date of Birth: <?=$date?>         
      </td>
      <td>
             <img src="user.png" alt="User" height="200px" width="200px"><br>
             <a href="profile-picture.php">Change</a>    
      </td>
      </tr>
      <tr><td colspan="2"><hr></td></tr>
     <tr><td colspan="2"><a href="edit-profile.php">Edit Profile</a></td></tr>
</table>
</fieldset>    
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

