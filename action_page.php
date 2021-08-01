<?php

include("connection/connect.php");  //include connection file

if(isset($_POST['submit']))
{ 
$Email = $_POST['email'];
$PhoneNo = $_POST['phone'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];
$sql="insert into contactus(Email,PhoneNo,Subject,Message) values('$Email','$PhoneNo','$Subject','$Message')";

if(mysqli_query($db,$sql))
	{
		echo "New record created successfully !";







	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
	 }
	 
}
?>