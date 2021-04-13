<html>
	<head></head> 
	<body>
		<?php
		    $name="";
			$err_name="";
			$uname="";
			$err_uname="";
			
			
		    if($_SERVER['REQUEST_METHOD'] == "POST"){
				if(empty($_POST["name"])){
					$err_name="*Name Required";
					$hasError=true;
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["id"])){
					$err_uname="*Phone number required";
					$hasError=true;
				}
				else if(!is_numeric($_POST["id"])){
					$err_uname="*Only numerical value is accepted";
					$hasError=true;
				}
				else{
					$uname=htmlspecialchars($_POST["id"]);
				}
			}
			
		?>
	
		<fieldset>
			
			<center><legend><h1> Search Product </h1></legend></center>
			<center>
			<form action="" method="post">
				<table>
					
					<tr>
						<td><span>Product Name</span></td> 
						<td>: <input type="text" value="<?php echo $name;?>" name="name">
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					
					<tr>
						<td><span>Product Id</span></td> 
						<td>: <input type="text" placeholder="code" value="<?php echo $uname;?>" name="id">
						<span><?php echo $err_uname;?></span></td>
						
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