<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CART</title>
</head>
<body>
	<div>장바구니 페이지입니다.</div>
<?php
	$color = $_POST['product_color'];
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if(!$userid) {
?>
	<script>alert("로그인을 해주세요.");window.location.href = "index.php";</script>
<?php
	}
	else{
		echo $userid."<br>";
		$modelnum = $_GET['modelnum'];
	}
	$con = mysqli_connect("localhost", "root", "", "sample");
		mysqli_query($con, "set session character_set_connection=utf8;");
		mysqli_query($con, "set session character_set_results=utf8;");
		mysqli_query($con, "set session character_set_client=utf8;");
	$sql = "insert into cart (modelnum, userid, color) 
	VALUES ('$modelnum','$userid','$color')";
	
	mysqli_query($con, $sql);
	mysqli_close($con);
	echo "
		<script>
			alert('장바구니에 추가되었습니다.');
			location.href = 'index.php';
		</script>
	";
?>
?>

</body>
</html>