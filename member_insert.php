<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	$id = $_POST["id"];
	$pass = $_POST["pass"];
	$name = $_POST["name"];
	$email1 = $_POST["email1"];
	$email2 = $_POST["email2"];
	$email = $email1."@".$email2;
	$regist_day = date("Y-m-d (H:i)");
	
	$con = mysqli_connect("localhost", "root", "", "sample");
		mysqli_query($con, "set session character_set_connection=utf8;");
		mysqli_query($con, "set session character_set_results=utf8;");
		mysqli_query($con, "set session character_set_client=utf8;");
	$sql = "insert into member (id,pass,name,email,regist_day,level,point) VALUES ('$id','$pass','$name','$email','$regist_day',1,0)";
	
	mysqli_query($con, $sql);
	mysqli_close($con);
	echo "
		<script>
			location.href = 'index.php';
		</script>
	";
?>
</body>
</html>