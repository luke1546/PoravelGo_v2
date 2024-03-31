<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <style>
.scale {
  transform: scale(1);
  -webkit-transform: scale(1);  /*크롬*/
  -moz-transform: scale(1);   /*firefox*/
  -ms-transform: scale(1);  
  -o-transform: scale(1);     /*오페라*/
  transition: all 0.3s ease-in-out;   /* 부드러운 모션을 위해 추가*/
  margin:100px;
}
.scale:hover {
  transform: scale(1.1);
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
}
</style>
<div class="scale">
<img src="image/LNG.jpg" onclick="location.href='index.php'">
</div>
</body>
</html>