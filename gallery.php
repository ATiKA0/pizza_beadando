<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pizza</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<?php
		include("header.php");
	?>
	<div class="slideshow-container">

	  <!-- A képek -->
	  <div class="mySlides fade">
		<div class="numbertext">1 / 4</div>
		<img src="media/1.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
		<div class="numbertext">2 / 4</div>
		<img src="media/2.jpg" style="width:100%">
	  </div>

	  <div class="mySlides fade">
		<div class="numbertext">3 / 4</div>
		<img src="media/3.jpg" style="width:100%">
	  </div>
	  
	  <div class="mySlides fade">
		<div class="numbertext">4 / 4</div>
		<img src="media/4.jpg" style="width:100%">
	  </div>

	  <!-- Gombok -->
	  <a class="prev" onclick="tolas(-1)">&#10094;</a>
	  <a class="next" onclick="tolas(1)">&#10095;</a>
	</div>
	<br>

	<!-- A pontok -->
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
	  <span class="dot" onclick="currentSlide(3)"></span>
	  <span class="dot" onclick="currentSlide(4)"></span>
	</div>
	 <section style="padding: 30px"></section>

	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function tolas(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		}
	</script>
	<footer>
		<ul>
			<li><a>Tel.: +36(69) 302 589</a></li>
			<li><a>E-mail: pizza@pizza.hu</a></li>
		</ul>
	</footer>
</body>
</html>