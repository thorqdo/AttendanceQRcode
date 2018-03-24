<?php
//get value from form$idclass = $_POST['malop'];$idclass = stripslashes($idclass);where malop = '$idclass'
//connect to db and select
						$link = mysqli_connect("localhost", "root","", "clache");
						//query
						$result = mysqli_query($link,"SELECT lop.malop, hocphan.tenhp, lop.hki, lop.namhoc FROM lop INNER JOIN hocphan ON lop.mahp = hocphan.mahp ");
						if (mysqli_connect_errno())
							{
								echo "Failed to connect to MySQL: " . mysqli_connect_error();
							}
							$row = mysqli_fetch_array($result);
							
			
?>

<html>
<head>
<meta charset="UTF-8">
		
		<!-- Bootstrap core CSS -->

		<style class="anchorjs"></style>
		<link href="http://www.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet" >
		
</head>

<body>


<div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Class <?php echo $row['malop']; ?></h2>
          <p class="lead"><?php echo $row['tenhp']; echo " Se: "; echo $row['hki'];echo " Ye ";  echo $row['namhoc']; ?></p>
        </div>
        <div class="bg-light box-shadow mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
		<img src="qrcode.php?text='<?php echo $row['malop'];echo $row['tenhp']; ?>'&size=500&padding=20" alt="QR CODE">
		</div>
      </div>
</body>

</html>