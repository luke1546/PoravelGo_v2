<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/topnav.css">
<title>ROYALQ CuePage</title>
</head>
<body>
<header>
    <?php include "header.php";?>
    <?php include "head.php";?>
</header>
<style>
    body {font-family: Verdana, sans-serif;}
    .grid_products1{
        display: grid;
        grid-template-rows: 1fr 1fr;
        margin-left: 80%;
        width: 300px;
        height: 450px;
    }
    .grid_products2{
        display: grid;
        grid-template-columns: 320px 320px 320px 320px;
        margin-top: 30px;
    }
    .sort{
        font-size: 18px;
        border: 1px solid black;
        padding: 10px;
    }
</style>

    <?php
        function register_day()
        {
            if($_GET['sort'] == "num asc")
                $sort = "num desc";
            else
                $sort = "num asc";
            return $sort;
        }
        function price()
        {
            if($_GET['sort'] == "price asc")
                $sort = "price desc";
            else
                $sort = "price asc";
            return $sort;
        }
        function model()
        {
            if($_GET['sort'] == "model asc")
                $sort = "model desc";
            else
                $sort = "model asc";
            return $sort;
        }
        $type = $_GET['type'];
    ?>

    <span onclick="<?=$sort = register_day()?>" style="margin-left: 15%" class="sort"><a href="sale_page.php?type=<?=$type?>&sort=<?=$sort?>">
    <?php
        if($_GET['sort']=='num asc')
            echo "최근등록순";
        else
            echo "상품등록순" 
    ?>
    </a></span>
    <span onclick="<?=$sort = price()?>" class="sort"><a href="sale_page.php?type=<?=$type?>&sort=<?=$sort?>">
    <?php
        if($_GET['sort']=='price asc')
            echo "높은가격순";
        else
            echo "낮은가격순" 
    ?>
    </a></span>
    <span onclick="<?=$sort = model()?>" class="sort"><a href="sale_page.php?type=<?=$type?>&sort=<?=$sort?>">
    <?php
        if($_GET['sort']=='model asc')
            echo "모델명 내림차순";
        else
            echo "모델명 오름차순" 
    ?>
    </a></span>
    <div class="grid_products2">
    <?php
        $sort = $_GET['sort'];
        $conn = mysqli_connect( 'localhost', 'root', '', 'sample' );
        mysqli_query($conn, "set session character_set_connection=utf8;");
        mysqli_query($conn, "set session character_set_results=utf8;");
        mysqli_query($conn, "set session character_set_client=utf8;");
        if($type=="all")
            $sql = "SELECT * FROM product order by $sort;";
        else
            $sql = "SELECT * FROM product where type='$type' order by $sort;";
        $result = mysqli_query( $conn, $sql );

        if (mysqli_num_rows($result) > 0) {
            while( $row = mysqli_fetch_array( $result ) ) {
                $num = $row['num'];
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
                $p_type = $row['type'];
                ?>
                <div class="grid_products1">
                <span><img src="<?=$image?>" onclick="location.href='sale.php?num=<?=$num?>';" style="width:300px; height:300px;"></span>
                <div>
                <div style="font-size:16px"><?=$model?></div>
                <div style="color:gray">색상 : <?=$color?></div>
                <div style="font-size:18px"><?=$price?>₩</div>
                </div>
                </div>
                <?php
            }
        }
        mysqli_close($conn);
    ?>
</div>
</body>
</html>