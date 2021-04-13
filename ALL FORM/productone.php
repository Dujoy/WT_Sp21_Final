<?php
   require_once "db.php";
   function insertUser($id,$username,$password){
	 $query="insert into product values ('$id','$username','$password')";
	 execute($query);//data base er sathe conncet kore then insert kore
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
			$bname="";
			$err_bname="";
			
			$hasError=false;
			
		    if($_SERVER['REQUEST_METHOD'] == "POST"){
				insertUser($_POST["uname"],$_POST["bname"],$_POST["name"]);
				if(empty($_POST["uname"])){
					$err_uname="*Product Id Required";
					$hasError=true;
				}
				else if(strlen($_POST["uname"]) < 4){
					$err_uname="*Product id should be at least 2 characters";
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
				else if(strpos($_POST["name"]," ")){
					$err_name="*Space is not allowed";
                    $hasError=true;
				}
				else{
					$name=htmlspecialchars($_POST["name"]);
				}
				if(empty($_POST["bname"])){
					$err_bname="*Name Required";
					$hasError=true;
				}
				else{
					$bname=htmlspecialchars($_POST["bname"]);
				}
			}
			
		?>
	
		<fieldset>
			
			<center><legend><h1> Add Product </h1></legend></center>
			<center>
			<form action="" method="post">
				<table>
				
                    <tr>
						<td><span> Product Name </span></td> 
						<td>: <input type="text" value="<?php echo $name;?>" name="name">
						<span><?php echo $err_name;?></span></td>
						
					</tr>
					
					<tr>
						<td><span> Brand Name </span></td> 
						<td>: <input type="text" value="<?php echo $bname;?>" name="bname">
						<span><?php echo $err_bname;?></span></td>
					</tr>
					
					<tr>
						<td><span> Id </span></td> 
						<td>: <input type="text" value="<?php echo $uname;?>" name="uname">
						<span><?php echo $err_uname;?></span></td>
					</tr>
					
					
				
					
					
					<tr>
					    <td><span>Catagory Name </span></td> 
						<td>:
						  <select>
								<option>Catagory</option>
								
								<?php
								    $month = array("Male","Female","Child");
									foreach($month as $v){
										echo "<option>$v</option>";
									}
								?>
							</select>
						
						</td>
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