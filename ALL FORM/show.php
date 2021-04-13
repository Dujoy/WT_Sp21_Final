<?php
   require_once "db.php";
   
   $query = "select * from product";
   
   $result = get($query);
?>

   <table border ="1" style="border-collapse;">
       <tr>
	     <th> Id </th>
		 <th> Name </th>
		 <th> Brand </th>
	   </tr>
<?php

   foreach($result as $row) {
	   echo "<tr>";
	   echo "<td>".$row["id"]."</td>";
	   echo "<td>".$row["name"]."</td>";
	   echo "<td>".$row["brand"]."</td>";
	   echo "</tr>";
   }
?>

   </table>