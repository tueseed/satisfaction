<html xmlns="http://www.w3.org/1999/xhtml">
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
<style type="text/css">
@media print{
.print_text {
	font-size:26px;
	font-family:"Angsana New";
}
}
#container-fluid{
margin-bottom: 10px;
}

.form-group2{
    text-align: center;
}
.form-froup3{
	align: center;
	margin-bottom: 100px;
}
</style>
</head>
<body>
<?php
	session_start();
	if(!$_SESSION["NAME"])
        {
            echo '<script type="text/javascript">';
            echo 'window.location.href="login.php";';
            echo '</script>';
        }
?>
<div class="w3-container w3-purple">
    <div class="w3-row">
        <div class="w3-col w3-container l12 w3-center">  
            <h1>ระบบประเมินความพึงพอใจ การไฟฟ้าส่วนภูมิภาคอำเภอโพธาราม</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12">
            <div class="form-group2">
                <h2>กรุณาประเมินความพึงพอใจ</h2>
            </div>
        </div>
    </div>
	<div class="row">
        <div class="col-lg-12">
            <div class="form-group2">
                <h5><?php echo $_SESSION["NAME"]." ".$_SESSION["LAST_NAME"]." ".$_SESSION["POSITION"]?></h5>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-lg-4 offset-4">
		<input type="button"  class="btn btn-success btn-block" onclick="window.location.href='https://satisfaction-ptr.herokuapp.com/insert.php?result=5'" value="พอใจมาก"/>
		<input type="button" class="btn btn-primary btn-block" onclick="window.location.href='https://satisfaction-ptr.herokuapp.com/insert.php?result=4'" value="พอใจ"/>
		<input type="button" class="btn btn-info btn-block" onclick="window.location.href='https://satisfaction-ptr.herokuapp.com/insert.php?result=3'" value="ปานกลาง"/>
		<input type="button" class="btn btn-warning btn-block" onclick="window.location.href='https://satisfaction-ptr.herokuapp.com/insert.php?result=2'" value="ไม่พอใจ"/>
		<input type="button" class="btn btn-danger btn-block" onclick="window.location.href='https://satisfaction-ptr.herokuapp.com/insert.php?result=1'" value="ไม่พอใจมาก"/>
		</div>
	</div>
</div>





</body>
</html>
