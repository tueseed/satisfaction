
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
<title>ประเมินความพึงพอใจ</title>
<!-- css -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="tagsinput.css" rel="stylesheet" type="text/css">
<script src="tagsinput.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head> 
<body>
<?php
	require('connect-db.php');
	$U = $_POST['textuser'];
	$P = $_POST['textpass'];
	$sql = "SELECT * FROM tbl_admin_psq WHERE user = '".$U."' and pass = '".$P."'";
	$result = mysqli_query($conn,$sql);
	$objResult = mysqli_fetch_array($result);
	if(!$objResult)
	{
		echo "ชื่อผู้ใช้ หรือรหัสผ่านไม่ถูกต้อง หรือไม่มีในระบบ " ;
		echo '<br>กลับสู่หน้า  <a href = "https://satisfaction-ptr.herokuapp.com/login.php"> เข้าสู่ระบบ </a>';
		break;
    }
	else
	{
		session_start();
		$_SESSION["NAME"] = $objResult["name"];
		$_SESSION["LAST_NAME"] = $objResult["lastname"];
		$_SESSION["POSITION"] = $objResult["position"];
		echo '<script type="text/javascript">';
      	echo 'window.location.href="index.php";';
      	echo '</script>';
	}
	/*ob_end_flush();*/
	?>
	
</body>
</html>