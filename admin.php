<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manager Mode</title>
	<link rel="stylesheet" type="text/css" href="./css/common.css">
	<link rel="stylesheet" type="text/css" href="./css/member.css">
	<script>
      function check_input()
   {
      if (!document.product_form.model.value) {
          alert("모델명을 입력하세요.");    
          document.product_form.model.focus();
          return;
      }
      if (!document.product_form.price.value) {
          alert("가격을 입력하세요.");    
          document.product_form.price.focus();
          return;
      }
      if (!document.product_form.type.value) {
          alert("종류를 입력하세요");    
          document.product_form.type.focus();
          return;
      }
      if (!document.product_form.upload.value) {
          alert("이미지를 추가해주세요.");    
          document.product_form.upload.focus();
          return;
      }
      document.product_form.submit();
      alert("상품 등록이 완료되었습니다.")
   }
	</script>
</head>
<body>
	<header>
		<?php include "header.php"; ?>
		<?php include "head.php"; ?>
	</header>
	<style>
		.product_form{
			display:inline-block;
			/*border: 1px solid gray;*/
			margin-left: 300px;
			font-size: 20px;
			line-height: 30px;
		}
		h2{
			border-bottom:1px solid gray;
			margin-bottom:15px;
		}
		body {font-family: Verdana, sans-serif;}
	</style>
	<div id="main_content" style="height:670px">	
	<div id="join_box">
	<form name="product_form" method="post" action="product_insert.php" enctype="multipart/form-data" class="">
	<h2>상품 추가</h2>
	<div class="form"><div class="col1">모델명</div><div class="col2"><input type="text" name="model"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">가격</div><div class="col2"><input type="text" name="price"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">종류</div><div class="col2"><input type="text" name="type"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">사이즈</div><div class="col2"><input type="text" name="size"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">색깔</div><div class="col2"><input type="text" name="color"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">원자재</div><div class="col2"><input type="text" name="material"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">상품구성</div><div class="col2"><input type="text" name="composition"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">브랜드</div><div class="col2"><input type="text" name="brand"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">제조사</div><div class="col2"><input type="text" name="manufacturer"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">원산지</div><div class="col2"><input type="text" name="madein"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">상품정보</div><div class="col2"><input type="text" name="information"></div></div><div class="clear"></div>
	<div class="form"><div class="col1">이미지 경로</div><div class="col2"><input type="file" name="upload"></div></div><div class="clear"></div>
	<span style="margin-left:402px"><img src="image/productplus.jpg" onclick="check_input();"></span>
	</form>
	</div>
	</div>
</body>
<footer style="height:300px">
	<?php include "footer.php"; ?>
</footer>
</html>
