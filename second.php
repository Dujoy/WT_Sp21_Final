<?php
   require_once "controlt.php";
?>

<html>
	<head></head> 
	<body>
		<?php
		    $name="";
			$err_name="";
			$password="";
			$err_password="";
			$hasError=false;
			
		    if(isset($_POST["submit"])){
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError=true;
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["pass"])){
					$err_password = "*Password Required";
					$hasError=true;
				}
				else if(strlen($_POST["pass"]) < 2){
					$err_password="*Forget Password should be at least 2 characters";
					$hasError=true;
				}
				else{
					$password=$_POST["pass"];
				}
				if(!$hasError){
			       updateCustomer($_POST["pass"],$_POST["name"]);
                }
			}
			
		?>
	
	
		<fieldset>
			
			<center><legend><h1> Edit </h1></legend></center>
			<center>
			<form action="" method="post">
				<table>
				
				    <tr>
						<td>Password</td>
						<td>: <input type="password" value="<?php echo $password;?>" name="pass">
						<span><?php echo $err_password;?></span></td>
					</tr>
					
					<tr>
						<td><span> Name</span></td> 
						<td>: <input type="text" value="<?php echo $name;?>" name="name">
						<span><?php echo $err_name;?></span></td>
						
					</tr>
				
				
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
					</tr>
					
				</table>
				 
				
			</form>
			</center>
		</fieldset>
		
	</body>
</html>