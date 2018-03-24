<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
	
	
	<!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
	*{
		box-sizing: border-box;
	}
	div{
		display:block;
	}
	body{
		    padding: 0;
			padding-top: 50px;
			font-family: 'Open Sans',sans-serif;
			position: relative;
			margin: 0;
			font-size: 12px;
	}
		.wrapper{
			position: absolute;
			top: 90px;
			left: 0;
			right: 0;
			text-align: center;
			margin-bottom: 10px;
			
		}
		.box{
			margin: 0 auto;
			padding: 35px 0 30px;
			float: none;
			width: 420px;
			box-shadow: 0 0 6px 2px rgba(0,0,0,.1);
			border-radius: 5px;
			background: rgba(255,255,255,.65);
		}
		.content-wrap {
			width: 98%;
			margin: 0 auto;
		}
		input{
			    font-size: 15px;
				height: 40px;
				border-color: #b2bfc7;
				padding-left: 12px;
				max-width: none;
				box-shadow: inset 0 0 1px rgba(0,0,0,.075);
				font-family: "Open Sans",Arial;
				margin: 0;

		}
		.form-control{
			    display: block;
				width: 90%;
				height: 34px;
				padding: 6px 12px;
				font-size: 14px;
				line-height: 1.42857143;
				color: #555;
				background-color: #fff;
				background-image: none;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
				transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		}
		input, button {
				text-rendering: auto;
				letter-spacing: normal;
				word-spacing: normal;
				text-transform: none;
				text-indent: 0px;
				text-shadow: none;
				text-align: start;
				margin: 1.5em;
		}
		.btn{
			position: relative;
			padding: 6px 12px;
			font-size: 14px;
			font-weight: 600;
			line-height: 20px;
			white-space: nowrap;
			vertical-align: middle;
			cursor: pointer;
			user-select: none;
			background-repeat: repeat-x;
			background-position: -1px -1px;
			background-size: 110% 110%;
			border: 1px solid rgba(27,31,35,0.2);
			border-radius: 0.25em;
			color: #fff;
			background-color: #28a745;
			background-image: linear-gradient(-180deg, #34d058 0%, #28a745 90%);
			display: block;
			width: 90%;
			text-align: center;
		}
		
	</style>
</head>

<body> 

	<div class="wrapper">
		<h1 >CLACHE</h1>
		<div class="box">
			<div class="content-wrap">
				<form action ="svproccess.php" method="POST">
				<input id="username" class="form-control" autofocus="autofocus" type='text' name='username' placeholder="Username">
				<input id="password" class="form-control" autofocus="autofocus" type='password' name='password' placeholder='Password'>
				<button class="btn" type="submit" >
					Log In
				</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>