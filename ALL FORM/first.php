<?php
   require_once "db.php";
   function insertUser($password,$name,$uname,$phone,$email){
	 $query="insert into string values ('$password','$name','$uname','$phone','$email')";
	 execute($query);
   }
?>


<html>
	<head></head> 
	<body>
		<?php
		    $name="";
			$err_name="";
			$uname="";
			$err_uname="";
			$password="";
			$err_password="";
			$email="";
			$err_email="";
			$phone="";
			$err_phone="";
			$ad="";
			$err_ad="";
			$hasError=false;
			
			
		    if($_SERVER['REQUEST_METHOD'] == "POST"){
				insertUser($_POST["pass"],$_POST["name"],$_POST["uname"],$_POST["phone"] ,$_POST["email"]);
				$s= strpos($_POST["email"],"@");
				if(empty($_POST["uname"])){
					$err_uname="*Username Required";
					$hasError=true;
				}
				else if(strlen($_POST["uname"]) < 4){
					$err_uname="*Username should be at least 4 characters";
					$hasError=true;
				}
				else if(strpos($_POST["uname"]," ")){
					$err_uname="*Space is not allowed";
                    $hasError=true;

				}
				else{
					$uname=htmlspecialchars($_POST["uname"]);
				}
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
				else if(strlen($_POST["pass"]) < 4){
					$err_password="*Password should be at least 4 characters";
					$hasError=true;
				}
				/*else if(ctype_upper($_POST["pass"])==true || ctype_lower($_POST["pass"])==true ){ 
					$err_password="*Characters should contain combination of uppercase and lowercase";
					$hasError=true;
				}*/
				else{
					$password=$_POST["pass"];
				}
				if(empty($_POST["email"])){
					$err_email="*Email address required";
					$hasError=true;
				}
				else if(!strpos($_POST["email"],"@")){
					$err_email="*Characters must contain @";
                    $hasError=true;

				}
				else if(!strpos($_POST["email"],".",$s+1)){
					$err_email="*Characters must contain atleast 1 dot after @";
                    $hasError=true;

				}
				else{
					$email=htmlspecialchars($_POST["email"]);
				}
				if(empty($_POST["phone"])){
					$err_phone="*Phone number required";
					$hasError=true;
				}
				else if(!is_numeric($_POST["phone"])){
					$err_phone="*Only numerical value is accepted";
					$hasError=true;
				}
				else{
					$phone=htmlspecialchars($_POST["phone"]);
				}
					
			}
		?>
		
	
		<fieldset>
			
			<center><legend><h1>Admin Registration</h1></legend></center>
			<center>
			<form action="" method="post">
				<table>
					
					<tr>
						<td><span> Name</span></td> 
						<td>: <input type="text" value="<?php echo $name;?>" name="name">
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					
					<tr>
						<td><span> Username</span></td> 
						<td>: <input type="text" value="<?php echo $uname;?>" name="uname">
						<span><?php echo $err_uname;?></span></td>
						
					</tr>
					
				
					<tr>
						<td>Password</td>
						<td>: <input type="password" value="<?php echo $password;?>" name="pass">
						<span><?php echo $err_password;?></span></td>
					</tr>
					
					<tr>
						<td> Confirm Password </td>
						<td>: <input type="password" value="<?php echo $password;?>" name="pass">
						<span><?php echo $err_password;?></span></td>
						
					</tr>
					
					<tr>
						<td> Email</td>
						<td>: <input type="text" value="<?php echo $email;?>" name="email">
						<span><?php echo $err_email;?></span></td>
						
					</tr>
					
					<tr>
						<td> Phone</td>
						<td>: <input type="text" placeholder="code" value="<?php echo $phone;?>" name="phone">
						<span><?php echo $err_phone;?></span></td>
					</tr>
					
					<tr>
						<td><span>Gender</span></td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
					</tr>
					
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="register"></td>
					</tr>
					
				</table>
				 
				
			</form>
			</center>
		</fieldset>
		
	</body>
</html>