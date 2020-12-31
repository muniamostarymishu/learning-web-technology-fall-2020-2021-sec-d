<?php
if(isset($_REQUEST['submit']))
{
   $name = $_REQUEST['name'];
if(!empty($name))
{
if($name[0]==" ")
{
    header('location: person_profile.html?msg=invalid-name');
}
else{
     $test = explode(" ", $name);
if(count($test) >= 2)
{
   $pattern = array('<', ',', '>', '/', '?', '"', "'", ';', ':', ']', '[', '|', '}', '{', '=', '+',
                    '_', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '`', '~', '0', '1', '2', '3', 
			        '4', '5', '6', '7', '8', '9',);
            
for($i = 0; $i < count($pattern); $i++)
{
if(strpos($name, $pattern[$i])==true)
{
     header('location: person_profile.html?msg=invalid-name');
     break;
}
}
    echo "Welcome, ".$name."<br>";
}
else{
     header('location: person_profile.html?msg=invalid-name');
    }
}    
}
else{
     header('location: person_profile.html?msg=null-name');
    }
    
  $email = $_REQUEST['email'];
    
if(!empty($email))
{
if(strpos($email, ".")==true)
{
   echo "Valid Email"."<br>";
}
else{
     header('location: person_profile.html?msg=invalid-email');
    }
}
else{
     header('location: person_profile.html?msg=null-email');
    }
if(isset($_REQUEST['gender']))
{
   echo "Gender: ".$_REQUEST['gender']."<br>";
}
else{
     header('location: person_profile.html?msg=null-gender');
    }
if(!empty($_REQUEST['day']) and !empty($_REQUEST['month']) and !empty($_REQUEST['year'])){
        
     $day = intval($_REQUEST['day']);
     $month = intval($_REQUEST['month']);
     $year = intval($_REQUEST['year']);
        
if($day > 0 and $day < 32 and $month > 0 and $month < 13 and $year > 1899 and $year < 2017)
{
   echo "Date: ".$day."/".$month."/".$year."<br>";
}
else{
     header('location: person_profile.html?msg=invalid-date');
    }
}
else{
     header('location: person_profile.html?msg=null-value');
    }
if(!empty($_REQUEST['bloodGroup']))
{
    echo "BloodGroup: ".$_REQUEST['bloodGroup']."<br>";
}
else{
     header('location: person_profile.html?msg=null');
    }
if(isset($_REQUEST['degree']))
{
   $degree = $_REQUEST['degree'];
for($i = 0; $i < count($degree); $i++)
{
   echo "Degree: ".$degree[$i]."<br>";
}
}
else{
     header('location: person_profile.html?msg=null-degree');
    }
if(isset($_REQUEST['img']))
{
  echo "Picture Uploaded!";
}
}
else{
     header('location: person_profile.html?msg=error');
	}
?>