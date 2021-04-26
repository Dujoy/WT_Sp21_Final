<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$username= $_POST["username"];
		$password= $_POST["password"];
		if($username== "Durjoy" && $password=="12345")
		{
			setcookie("username", $username, time()+120);
			header("Location:dashbord.php");
		}
		
	}
?>

<html>
	<head></head>
	<body>
	<fieldset>
	<center>
		<form action="" method="POST">
		  <table>
		  
		    Username: <input type="text" name ="username">    <br>
			Password: <input type="password" name="password"> <br>
			
			<input type ="submit" name= "submit" value= "login">
		  </table>
		</form>
	</center>
	</fieldset>
	</body>
</html>