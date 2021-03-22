<?php
	if (!isset($_COOKIE["username"]) )
	{
		header("Location:Final lab task.php");
	}
?>

<html>
	<h1> welcome  <?php echo $_COOKIE["username"];?> </h1>
</html>