<?php
require("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
		$name=$_POST["name"];
		$email=$_POST["email"];
		$contact=$_POST["contact"];
		$message=$_POST["message"];
		$query=mysqli_query($conn,"insert into feedback(name,email,contact,message) values('$name','$email','$contact','$message')");
				   	if (!$query) 
				    {
				        echo mysqli_error($conn);
				        exit();
				    }
					require("email/verifymail.php");
					header("Location: Thanku.html");
}
?>