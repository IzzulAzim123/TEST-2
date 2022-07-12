<?php

include 'config.php';
$sql="insert into registration (name, username, email, phone_num) values 
('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[phone_num]')";
if(!mysqli_query($con,$sql)){
		die ('Error: ' .mysqli_error($con));
	}
	else {
echo "<script type='text/jscript'>alert('You have been registered!')</script>";
header('refresh:0 url=index.html');
	}

?>