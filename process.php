<?php
	//get value from form
	$myusername = $_POST['username'];
	$mypassword = $_POST['password'];
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	//$myusername = mysql_real_escape_string($myusername);
	//$mypassword = mysql_real_escape_string($mypassword);
	
	//connect to db and select
	$link = mysqli_connect("localhost", "root","", "clache");
	
	
	//query
	$result = mysqli_query($link,"select * from taikhoan where username = '$myusername' and password = '$mypassword'");
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	if($row['username'] == $myusername && $row['password'] == $mypassword){
	echo "Welcome".$row['username'];
	
	}else{
		echo"Failed to login";
	}
	
	mysqli_close($link);
	
	
	?>
	
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>WelcomeQR</title>
	</head>
	<body>
		<img src="qrcode.php?text='username'&size=120&padding=10" alt="QR CODE">
	</body>
</html>