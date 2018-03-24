
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		
		<!-- Bootstrap core CSS -->

		<style class="anchorjs"></style>
		<link href="http://www.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" >
		
		
		<!-- MY CSS -->
		
		<style type="text/css">
		body{
			margin: 0;
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
			font-size: 25px;
			font-weight: 400;
			line-height: 1.5;
			color: #0a0f0f;
			text-align: center;
			background-color: #fff;
		}
		div{
			display: block;
		}
		.wrapper{
			margin: 5 auto;
			padding: 15px;
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
			width: 1390px;
			box-shadow: 0 0 6px 2px rgba(0,0,0,.1);
			border-radius: 5px;
			background: rgba(255,255,255,.65);
		}
			table {
				display: table;
				border-collapse: separate;
				border-spacing: 2px;
				border-color: black;
				color: #000;
				border: 3px black;
			}
			.table {
				width: 93%;
				max-width: 100%;
				margin: 1rem;
				margin-bottom: 1.5rem;
				border: 3px black;
				 border-collapse: collapse;
			}
			
			.tab-wrapper{
				width: 100%;
				padding: 1.5rem;
				margin-right: 10;
				margin-left: 10;
				border-width: .2rem;
				position: relative;
				margin: 1rem -15px 0;
				
				
			}
			a{
				color:#0a0f0f!important;
			}
		</style>
	<head>
	<body>
		<div class ="wrapper box">
			<h1>Class List</h1>
			<div class="tab-wrapper ">
				
					<?php
						//connect to db and select
						$link = mysqli_connect("localhost", "root","", "clache");
						//query
						$result = mysqli_query($link,"SELECT lop.malop, hocphan.tenhp, lop.hki, lop.namhoc FROM lop INNER JOIN hocphan ON lop.mahp = hocphan.mahp");
						if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
							echo "<table class= table>";
							echo "<tr> <th>Class ID</th> <th>Subject</th> <th>Semester</th> <th>Year</th>";
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['malop']."</td>";
								echo "<td>".$row['tenhp']."</td>";
								echo "<td>".$row['hki']."</td>";
								echo "<td>".$row['namhoc']."</td>";
								echo "<td>";
								echo "<a href=showqr.php>Start</a>";
								echo "</td>";
								echo "</tr>";
								//<img src=qrcode.php?text=".$row['malop']."&size=200&padding=20 alt=QR CODE>
							}
							echo "</table>";
								
						
							mysqli_close($link);
						
					?>
				
			
				
					
			</div>
		
		</div>
	</body>
</html>