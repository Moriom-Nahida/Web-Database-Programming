<?php
include("../database/config.php");
$sql="SELECT * from customer ";
$result=mysqli_query($myconn,$sql);
echo '<table border="2px" width="100%">
		<tr><th> Customer Id</th>
		<th> Name</th>
		<th> Email</th><th> ACTION</th> </tr>';
while($row=mysqli_fetch_array($result))
{
	$c_id=$row['c_id'];
	$name=$row['name'];
	$email=$row['email'];
	echo'<tr><td width="10%">'.$c_id.'</td>
			  <td width="10%">'.$name.'</td>
			  <td width="10%">'.$email.'</td>
			  <td width="20%"> <a  href="../model/edit.php ?id='.$c_id.'"><p style="color:green; "> EDIT </p></a> <td><a  href="../model/delete.php ?id='.$c_id.'"><p style="color:red; "onclick="window.confirm();"> DELETE </p></a></td>
			  </td>			  
			   </tr>';
}

?>