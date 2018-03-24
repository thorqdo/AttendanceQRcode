<!DOCTYPE html>
<html>
<head>
	<title>Logup Page</title>
	<meta charset="utf-8">
	
	
	<!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../style.css" rel="stylesheet">
	<style type="text/css">
		.box{
			margin-top: 90px;
			
			font-family: 15px arial, sans-serif;
			padding: 35px 0 30px;
			font-size:12px;
			box-shadow: 0 0 6px 2px rgba(0,0,0,.1);
			border: 1px black;
			max-width: none;
			width: 300px;
			height: 300px;
		}
		.container-s{
			position: relative;
			top: 90px;
			left: 0;
			right: 0;
			text-align: center;
			max-width: none;
		}
		.btn{
			margin-top: 10px;
			padding-top: 10px;
			margin: auto; 
			display: block;
			width: 100px;
			text-align: center;
			font-size: 16px !important inherit;
			padding: .75em 1.25em;
			border-radius: 6px;
			max-width: none;
			background-color: 	#669973;
			cursor: pointer;
			color: white;
			position: relative;
			float: center;
		}
		input{
			width: 260px;
			margin-top: 5px;
			padding: 5px;
			border: 1px solid #ccc;
			box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
			border-radius: 4px;
			font-family:
		}
	</style>
</head>

<body > 
<div class="container" align="center">
  <div class="container-s box">
		<h1> LOG UP</h1>
		<form action ="process.php" method="POST">
			
				<span></span>
		<input id="username" autofocus="autofocus" type='text' name='username' placeholder="Username">
		<span></span>
		<input id="password" autofocus="autofocus" type='password' name='password' placeholder='Password'>
		<span></span>
		<button class="btn" type="submit" >
			Log In
		</button>
			
	</div>
	</div>
</body>

</html>