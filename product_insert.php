<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php
	$model = $_POST["model"];
	$size = $_POST["size"];
	$color = $_POST["color"];
	$material = $_POST["material"];
	$composition = $_POST["composition"];
	$brand = $_POST["brand"];
	$manufacturer = $_POST["manufacturer"];
	$madein = $_POST["madein"];
	$information = $_POST["information"];
	$image = "image/product/".$_FILES['upload']['name'];
	$price = $_POST["price"];
	$type = $_POST["type"];
	$dir = 'C:\xampp\htdocs\final\image\product\\';
	$file_path = $dir.$_FILES["upload"]["name"];
	
	move_uploaded_file($_FILES["upload"]["tmp_name"], $file_path);

	
	$con = mysqli_connect("localhost", "root", "", "sample");
		mysqli_query($con, "set session character_set_connection=utf8;");
		mysqli_query($con, "set session character_set_results=utf8;");
		mysqli_query($con, "set session character_set_client=utf8;");
	$sql = "insert into product (model,size,color,material,composition,brand,manufacturer,madein,information,image,price,type) 
	VALUES ('$model','$size','$color','$material','$composition','$brand','$manufacturer','$madein','$information','$image','$price','$type')";
	
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