<html>
<head>
	<meta charset="utf-8">
	<title>board_menu</title>
</head>
<body>
	<header>
		<?php include "header.php"; 
			  include "head.php";	?>
	</header>
<style>
	img{
		margin-left: 15%;
	}
	body {font-family: Verdana, sans-serif;}
</style>
	<?php
		$choice = $_GET["choice"];
		if($choice == "company")
			echo "<img src='image/bn_company.jpg'>";
		else if($choice == "cueguide")
			echo "<img src='image/bn_guide.jpg'>";
		else if($choice == "notice")
			echo "안녕";
	?>

<footer style="height:300px">
	<?php include "footer.php"; ?>
</footer>
</body>
</html>