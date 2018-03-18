<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type ="text/css" href="style.css">
	
</head>

<body > 
<div align="center" class="container">
<div id="login" class="formlgin px-3" style="width:300px">
		<form action ="process.php" method="POST">
			<h2> LOG IN</h6>
				<div class="auth-form-body mt-3">
				<input type="text" id="username" class="form-control" name="username" placeholder="Username">
				<br>
		
				<input type="password" id="password" class="form-control" name="password" placeholder="Password">
		<br>
				<img alt="" src="res/test.png" width="240" height="240">
			<br>
			
				<input type="submit" class ="btn btn-block btn-primary" value="Login">
			</div>
			
	</div>
	</div>
</body>

</html>