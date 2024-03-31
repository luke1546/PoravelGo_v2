<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<header>
	<?php
		include "header.php";
     	include "head.php";
     ?>
</header>
<style>
	body {font-family: Verdana, sans-serif;}

	.title{
		padding-bottom: 50px;
		font-size: 30px;
		text-align: center;
		margin-right: 150px;
	}
	.grid_cart{
		display: grid;
		grid-template-columns: 105px 1fr;
		padding-bottom:0px;
		line-height: 30px;
		margin-left: 10px;
	}
	.cart_image{
		width: 100px;
		height: 100px;
	}
	.product_title{
		font-size: 17px;
		margin-left: 10px;
	}
	.product_option{
		border: 1px solid gray;
		margin: 10px;
	}
	.grid_option{
		/*width: 620px;*/
		display: grid;
		grid-template-columns: 300px 300px;
		margin-top: 10px;
		margin-right: none;
	}
	.cover{
		border:1px solid black;
		width:820px;
		margin-left:300px;
		margin-bottom: 20px;
	}
	.grid_edge{
		display: grid;
		grid-template-columns: 1120px 400px;
	}
	.result{
		border: 1px solid black;
		margin-left: 20px;
		height: 200px;
		font-size: 17px;
		color: #333333;
		line-height: 40px;
	}
	.grid_option2{
		margin-top: 20px;
		display: grid;
		grid-template-columns: 1fr 1fr;
	}
	.button_buy {
    background-color: #333333;
    border: 1px solid black;
    color: white;
    padding: 15px 90px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
    .button_buy:hover {
        background-color: #666666;
    }
    .grid_option3{
    	display: grid;
    	grid-template-columns: 798px 30px;
    }
    .cancel{
    	padding:6px;
    	border:white;
    	background-color: white;
    }
    .cancel:hover{
    	background-color: gray;
    }
</style>

<div class="title">장바구니</div>
<?php
	$sumprice=0;
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if(!$userid) {
?>
	<script>alert("로그인을 해주세요.");window.location.href = "index.php";</script>
<?php
	}
	else{
		$i = 0;
        $conn = mysqli_connect( 'localhost', 'root', '', 'sample' );
        mysqli_query($conn, "set session character_set_connection=utf8;");
        mysqli_query($conn, "set session character_set_results=utf8;");
        mysqli_query($conn, "set session character_set_client=utf8;");

        $sql1 = "SELECT * FROM cart where userid='$userid';";
        $result = mysqli_query( $conn, $sql1 );
      
        if (mysqli_num_rows($result) > 0) {
            while( $row = mysqli_fetch_array( $result ) ) {
            	$num[$i] = $row['num'];
                $modelnum[$i] = $row[ 'modelnum' ];
                $color[$i] = $row['color'];
                $i++;
            	}
        	}
    	}

    	?>
    	<div class="grid_edge">
        <div>
    	<?php
    	if (mysqli_num_rows($result) > 0){
        for($i=0; $i<count($modelnum); $i++)
        {
        $sql2 = "SELECT * FROM PRODUCT WHERE num='$modelnum[$i]'";
        $result = mysqli_query( $conn, $sql2 );
      
        if (mysqli_num_rows($result) > 0) {
            while( $row = mysqli_fetch_array( $result ) ) {
                $model = $row[ 'model' ];
                $size = $row['size'];
                $material = $row['material'];
                $composition = $row['composition'];
                $brand = $row['brand'];
                $manufacturer = $row['manufacturer'];
                $madein = $row['madein'];
                $information = $row['information'];
                $image = $row['image'];
                $price = $row['price'];
                $type = $row['type'];
                $sumprice += $price;
            	}
        	}
        ?>
        <div class="cover">
       	<div class="grid_option3">
        <div class="product_title"><?=$model?></div>
        <div>
        	<input type="button" value="X" class="cancel" onclick="location.href='cart_delete.php?num=<?=$num[$i]?>&id=<?=$userid?>'">
        </div>
    	</div>
        <div class="grid_cart">
        	<div><img class="cart_image" src="<?=$image?>"></div>
        	<div>
        		<div class="grid_option">
        		<div>
        			<div><span class="product_option">사이즈</span><?=$size?></div>
        			<div><span class="product_option">색상</span><?=$color[$i]?></div>
        			<div><span class="product_option">수량</span>1개</div>
        		</div>
        		<div>
        			<div><span class="product_option">상품금액</span><?=$price?>₩</div>
        			<div><span class="product_option">할인금액</span>-</div>
        			<div><span class="product_option">할인적용금액</span><?=$price?>₩</div>
        		</div>
        		</div>
        	</div>
        </div>
    	</div>
        <?php
		}
		?>

		</div>
		<div>
		<div class="result grid_option2">
			<div style="margin-left: 10px; margin-top:20px">
			<div>총 상품금액</div>
			<div>총 배송비</div>
			<div style="border-bottom:1px solid gray;">총 할인</div>
			<div style="font-size:20px; font-weight:bold;">총 결제금액</div>
			</div>
			<div style="text-align: right; margin-right:10px; margin-top:20px;">
			<div><?=$sumprice?>₩</div>
			<div>3500₩</div>
			<div style="border-bottom:1px solid gray;">0₩</div>
			<div style="font-size:20px; font-weight:bold;"><?=$sumprice+3500?>₩</div>
			</div>
		</div>
		<div style="margin-left:150px"><input type="button" value="결제하기" class="button_buy" onclick='alert("결제가 완료되었습니다.")'></div>
		</div>
		</div>
<?php
		}
		else{
?>
			<div style="margin-left: 300px; font-size:30px; border:1px solid black; padding:100px; width:900px; text-align: center;">장바구니에 담긴 상품이 없습니다.</div>
<?php
		}
		mysqli_close($conn);
?>
</body>
<footer style="height:300px; width: 1903px; margin-top:100px">
    <?php include "footer.php" ?>
</footer>
</html>