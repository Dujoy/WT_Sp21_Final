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
			
			$hasError=false;		
			
		    if($_SERVER['REQUEST_METHOD'] == "POST"){
				if(empty($_POST["uname"])){
					$err_uname="*Product Id Required";
					$hasError=true;
				}
				else if(strlen($_POST["uname"]) < 5){
					$err_uname="*Product id should be at least 5 characters";
					$hasError=true;
				}
				else if(strpos($_POST["uname"]," ")){
					$err_uname="*Space is not allowed";
                    $hasError=true;

				}
				else if(!is_numeric($_POST["uname"])){
					$err_uname="*Only numerical value is accepted";
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
				else if(strlen($_POST["pass"]) < 8){
					$err_password="*Password should be at least 8 characters";
					$hasError=true;
				}
				else if(ctype_upper($_POST["pass"])==true || ctype_lower($_POST["pass"])==true ){ 
					$err_password="*Characters should contain combination of uppercase and lowercase";
					$hasError=true;
				}
				else{
					$password=$_POST["pass"];
				}
			}
			
		?>
	
		<fieldset>
			
			<center><legend><h1> Edit Product </h1></legend></center>
			<center>
			<form action="" method="post">
				<table>
				
				    <tr>
						<td><span> Product Id </span></td> 
						<td>: <input type="text" value="<?php echo $uname;?>" name="uname">
						<span><?php echo $err_uname;?></span></td>
					</tr>
					
					
					<tr>
						<td><span>Product Name </span></td> 
						<td>: <input type="text" value="<?php echo $name;?>" name="name">
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					
				
					<tr>
					
						<td>Password</td>
						<td>: <input type="password" value="<?php echo $password;?>" name="pass">
						<span><?php echo $err_password;?></span></td>
						
					</tr>
					
					
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="Edit"></td>
					</tr>
					
				</table>

			</form>
			</center>
		</fieldset>
		
	</body>
</html>