<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/mainpage_image.css">
<link rel="stylesheet" type="text/css" href="./css/slideshow.css">
</head>
<body>
<header>
  <?php include "head.php";?>
</header>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext" style="color:black;">1 / 4</div>
  <a href="sale_page.php?type=cue&sort=num asc">
    <img src="image/slide1.jpg" style="width:100%; margin-top:23px;">
  </a>
  <div class="text" style="color:black; font-size:20px">기본큐대</div>
</div>

<div class="mySlides fade">
  <div class="numbertext" style="color:black;">2 / 4</div>
  <a href="sale_page.php?type=ball&sort=num asc">
    <img src="image/slide2.jpg" style="width:100%; margin-top:23px;">
  </a>
  <div class="text" style="color:black; font-size:20px">당구공</div>
</div>

<div class="mySlides fade">
  <div class="numbertext" style="color:black;">3 / 4</div>
  <a href="sale_page.php?type=table&sort=num asc">
  <img src="image/slide3.jpg" style="width:100%;">
</a>
    <div class="text" style="color:black; font-size:20px;" >당구대</div>
</div>
<div class="mySlides fade">
  <div class="numbertext" style="color:black;">4 / 4</div>
  <a href="sale_page.php?type=etc&sort=num asc">
    <img src="image/slide4.jpg" style="width:100%; margin-top:23px;">
  </a>
  <div class="text" style="color:black; font-size:20px">기타 당구용품</div>
</div>
<a class="prev" onclick="clickleft()">&#10094;</a>
<a class="next" onclick="clickright()">&#10095;</a>
</div>
<br>


<div style="text-align:center;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides"); //이미지
  var dots = document.getElementsByClassName("dot");        //점들
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";                       //이미지들을 모두 안보이게 처리
  }
  slideIndex++;                                             //인덱스증가
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", ""); //점들을 모두 회색으로
  } 
  slides[slideIndex-1].style.display = "block";                   //인덱스에 해당하는 이미지 출력
  dots[slideIndex-1].className += " active";                      //인덱스에 해당하는 점 활성화
  setTimeout(showSlides, 3000); // Change image every 3 seconds   //3초 설정
}

function clickright(){
  var i;
  var slides = document.getElementsByClassName("mySlides"); //이미지
  var dots = document.getElementsByClassName("dot");        //점들
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";                       //이미지들을 모두 안보이게 처리
  }
  slideIndex++;                                             //인덱스증가
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", ""); //점들을 모두 회색으로
  } 
  slides[slideIndex-1].style.display = "block";                   //인덱스에 해당하는 이미지 출력
  dots[slideIndex-1].className += " active";                      //인덱스에 해당하는 점 활성화
}

function clickleft(){
  var i;
  var slides = document.getElementsByClassName("mySlides"); //이미지
  var dots = document.getElementsByClassName("dot");        //점들
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";                       //이미지들을 모두 안보이게 처리
  }
  slideIndex--;                                             //인덱스증가
  if (slideIndex == 0) {slideIndex = slides.length}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", ""); //점들을 모두 회색으로
  } 
  slides[slideIndex-1].style.display = "block";                   //인덱스에 해당하는 이미지 출력
  dots[slideIndex-1].className += " active";                      //인덱스에 해당하는 점 활성화
}
</script>
<style>

</style>
<div style="text-align:center; margin:50px; font-size:50px; margin-top:100px;">
  BEST PRODUCT
</div>
<div id="grid1">
<div>
  <a href="sale.php?num=9">
  <img src="image/carbonq.jpg" class="scale">
  </a>
  <br>
  카본큐 개인큐상급자 하이퍼포먼스<br>
  <a href="LNG.php">H</a>CCP 7021 (카본상대 + 듀랄하대)3쿠션큐
</div>
<div>
  <a href="sale.php?num=10">
  <img src="image/12pieceq.jpg" class="scale">
</a>
  <br>
  12쪽상대 개인큐상급자 하이퍼포먼스<br>
  HCCP 7021 (12쪽상대 카본튜브 +듀랄하대)3쿠션큐
</div>
</div>

<div style="background-color:#d3d3d3; width:1903px; height:600px">
<div style="text-align:center; margin:50px; font-size:50px;">
  SPECIAL ART
</div>
<div id="grid2">
  <a href="sale.php?num=11">
  <div class="container">
  <img src="image/laserlegend.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text2">당구큐대 개인큐 레이저아트 시리즈01 Legend<br>
      80,000 KRW<br>개인큐에 레이저 아트를 각인해 드리는 <br>서비스 입니다.</div>
  </div>
  </div>
  </a>

  <a href="sale.php?num=12">
  <div class="container">
  <img src="image/laserflower.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text2">당구큐대 개인큐 레이저아트 시리즈02 Flower<br>
      80,000 KRW<br>개인큐에 레이저 아트를 각인해 드리는 <br>서비스 입니다.</div>
  </div>
</div>
</a>

<a href="sale.php?num=13">
<div class="container"> 
  <img src="image/laserinitial.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text2">당구큐대 개인큐 영문 레이저 이니셜 서비스<br>
      20,000 KRW<br>개인큐에 영문 이니셜을 각인해 드리는<br>서비스 입니다.</div>
  </div>
</div>
</a>
</div>
</div>
<!-- SPECITAL ART -->

<div style="text-align:center; margin:50px; font-size:50px;">
  MD'S CHOICE
</div>

<div id="grid3">
<div>
  <a href="sale.php?num=14">
  <img src="image/md_extension.jpg" class="scale">
  </a>
</div>

<div id="grid4">
<div>
  <a href="sale.php?num=15">
  <img src="image/md_qtip.jpg" class="scale">
</a>
</div>
<div id="grid5">
<div>
  <a href="sale.php?num=16">
  <img src="image/md_qtiprepair.jpg" class="scale">
</a>
</div>
<div>
  <a href="sale.php?num=17">
  <img src="image/md_choke.jpg" class="scale">
</a>
</div>
</div>
</div>
</div>

<!-- MD'S CHOICE -->

</body>
<footer style="height:300px;">
        <?php include "footer.php";?>
</footer>
</html>

