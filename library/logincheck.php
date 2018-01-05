<?php
$usernameE= $_POST['username'];
$passwordE= $_POST['password'];

$con = mysqli_connect('localhost','root','','library');
if(!$con)
{ 
echo 'connection is failed';
}

   if($usernameE!= "swatikushwaha"||$passwordE!= "12345678")
    {
   echo 'you have entered wrong username or password';
   echo ' If you have not right username and password consult with programmer'; 
	}
	  else
	  { 
	  echo 'you have successfully logged in.......<a href="home.php"> home </a>';
	  
		  }
	  
?>
