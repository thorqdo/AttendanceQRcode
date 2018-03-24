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
	$qery= mysqli_query($link,"SELECT taikhoan.id, giangvien.hoten, giangvien.mscb FROM taikhoan INNER JOIN giangvien ON taikhoan.id=giangvien.id_tk where username = '$myusername' and password = '$mypassword'"); 
	$kq = mysqli_fetch_array($qery,MYSQLI_ASSOC);
	
	if($row['username'] == $myusername && $row['password'] == $mypassword){
	
	echo "Welcome: ".$row['username'];
	echo " ".$kq['hoten'];
	
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
	
	 <!-- Bootstrap core CSS -->
    <link href="http://www.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
	<style type="text/css">
		body{
			padding: 0;
			padding-top: 50px;
			font-family: "Lato", sans-serif;
			position: relative;
			margin: 0;
			font-size: 12px;
			background-color:#47476b
			font-weight: 400;
		}
		div{
			display:block;
		}
		.pink{
			color: #20303c!important;
			background-color:#ffb3ff
		}
	</style>
	</head>
	
	
		
	
	
	
	<body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">CLACHE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
		  <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">Log Out <span class="sr-only">(current)</span></a>
            </li>
			</ul>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
		
		<a href="#" type="button">Create a Class</a>
		
		<a href="classList.php" type="button">Start Checking!</a>
		
	</main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="http://www.getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="http://www.getbootstrap.com/dist/js/bootstrap.min.js"></script>
  

</body>
</html>