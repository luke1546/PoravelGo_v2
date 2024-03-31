<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/common.css">
<title>ROYALQ CuePage</title>
</head>
<body>
<header>
    <?php include "header.php";
          include "head.php";   ?>
</header>
<style>
    body {font-family: Verdana, sans-serif;}
    .grid_sale{
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .c1{
        display: inline-block;
        width: 100px;
        line-height: 40px;
    }
    .c2{
        display: inline-block;
        width: 500px;
    }
    .button_put {
    background-color: white;
    border: 1px solid gray;
    color: black;
    padding: 15px 90px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
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
    .button_put:hover {
        border: 1px solid black;
    }
    .button_buy:hover {
        background-color: #666666;
    }
</style>
<script>
    function buy(){
        alert("결제가 완료되었습니다.");
    }
</script>
    <?php
        $num = $_GET['num'];
        $conn = mysqli_connect( 'localhost', 'root', '', 'sample' );
        mysqli_query($conn, "set session character_set_connection=utf8;");
        mysqli_query($conn, "set session character_set_results=utf8;");
        mysqli_query($conn, "set session character_set_client=utf8;");

        $sql = "SELECT * FROM product where num=$num;";
        $result = mysqli_query( $conn, $sql );
      
        if (mysqli_num_rows($result) > 0) {
            while( $row = mysqli_fetch_array( $result ) ) {
                $model = $row[ 'model' ];
                $size = $row['size'];
                $color = $row['color'];
                $material = $row['material'];
                $composition = $row['composition'];
                $brand = $row['brand'];
                $manufacturer = $row['manufacturer'];
                $madein = $row['madein'];
                $information = $row['information'];
                $image = $row['image'];
                $price = $row['price'];
                $type = $row['type'];
            }
        }
        $color = explode(',',$color);
        mysqli_close($conn);
    ?>
    <div style="font-size:25px; text-align:center; margin-right:120px;margin-bottom:100px;margin-top:70px;"><?=$model?></div>
    <div class="grid_sale">
    <div style="margin-left:30%;"><img src="<?=$image?>" style="width:600px; height:600px;"></div>
    
    <div>
    <div style="font-size: 30px;"><?=$price?> ₩</div>
    <div class="c1">배송</div><div class="c2"><br>택배(주문시 결제)<br>3,500₩</div>
    <div></div>
    <div class="c1">상품정보</div><div class="c2"><?=$information?></div>
    <div></div>
    <div class="c1">재질</div><div class="c2"><?=$material?></div>
    <div></div>
    <div class="c1">브랜드</div><div class="c2"><?=$brand?></div>
    <div></div>
    <div class="c1">제조사</div><div class="c2"><?=$manufacturer?></div>
    <div></div>
    <div class="c1">원산지</div><div class="c2"><?=$madein?></div>
    <div></div>
    <div class="c1">품질보증기간</div><div class="c2">1년</div>
    <div></div>
    <div class="c1">AS책임자 전화번호</div><div class="c2">043-233-1546</div>
    <div></div>
    <div class="c1">상품옵션</div>
    <form name="form1" method="post">
    <div>
        <select name="product_color" style="width:500px; height:30px">
        <option value="" selected>-색상 선택-</option>
        <?php
            for($i=0; $i<count($color); $i++){
        ?>
        <option value="<?=$color[$i]?>"><?=$color[$i]?></option>
        <?php
            }
        ?>
        </select>
    </div>
    <div style="text-align: right; width:480px; margin:20px"><span style="font-size:20px;">총 결제금액 </span><span style="font-size:30px;"><?=$price+3500?>₩</span></div>
    <div></div>
    <span><input type="submit" value="장바구니" class="button_put" formaction="cart_insert.php?modelnum=<?=$num?>"></span>
    <span><input type="submit" value="구매하기" class="button_buy" onclick="buy()" formaction="index.php"></span>
    </form>

    </div>

    </div>


</body>
<footer style="height:300px; margin-top:100px">
    <?php include "footer.php" ?>
</footer>
</html>