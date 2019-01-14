@extends('layouts.app')

@section('title')
	Gallery of Photos of Casa De Tobias Mountain Resort
@endsection

@section('content')
<style>
{
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 60px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

<div class="container">
<article class="gallery-intro">
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col-sm-6 gallery-font">
				<h1>Gallery</h1>
			</div>
			<div class="col-sm-6">
				<p>The only trip you will reget is the one you didn't take.</p>
			</div>
		</div>
	</div>
</div>
</article>
<div class="main-content">
</div>
<div class="row">
  <div class="col-sm">
    <img src="images/casa1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="col-sm">
    <img src="images/casa2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="col-sm">
    <img src="images/casa3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="col-sm">
    <img src="images/casa4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div class="main-content">

<div class="row">
  <div class="col-sm">
    <img src="images/casa5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="col-sm">
    <img src="images/casa6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="col-sm">
    <img src="images/casa7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="col-sm">
    <img src="images/casa8.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
</div>
</div>

<div class="main-content">

	<div class="row">
	  <div class="col-sm">
	    <img src="images/casa9.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa10.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa11.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa12.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
	  </div>
	</div>
</div>

<div class="main-content">
	<div class="row">
	  <div class="col-sm">
	    <img src="images/casa13.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa14.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa15.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa16.jpg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
	  </div>
	</div>
</div>

<div class="main-content">
	<div class="row">
	  <div class="col-sm">
	    <img src="images/casa17.jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa18.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa19.jpg" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa20.jpg" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
	  </div>
	</div>
</div>

<div class="main-content">
	<div class="row">
	  <div class="col-sm">
	    <img src="images/casa21.jpg" style="width:100%" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa22.jpg" style="width:100%" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa23.jpg" style="width:100%" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa24.jpg" style="width:100%" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
	  </div>
	</div>
</div>

<div class="main-content">
	<div class="row">
	  <div class="col-sm">
	    <img src="images/casa25.jpg" style="width:100%" onclick="openModal();currentSlide(25)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa26.jpg" style="width:100%" onclick="openModal();currentSlide(26)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa27.jpg" style="width:100%" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa28.jpg" style="width:100%" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
	  </div>
	</div>
</div>

<div class="main-content">
	<div class="row">
	  <div class="col-sm">
	    <img src="images/casa29.jpg" style="width:100%" onclick="openModal();currentSlide(33)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa30.jpg" style="width:100%" onclick="openModal();currentSlide(34)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa31.jpg" style="width:100%" onclick="openModal();currentSlide(35)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa32.jpg" style="width:100%" onclick="openModal();currentSlide(36)" class="hover-shadow cursor">
	  </div>
	</div>
</div>

<div class="main-content">
	<div class="row">
	  <div class="col-sm">
	    <img src="images/casa37.jpg" style="width:100%" onclick="openModal();currentSlide(37)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa38.jpg" style="width:100%" onclick="openModal();currentSlide(38)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa39.jpg" style="width:100%" onclick="openModal();currentSlide(39)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa40.jpg" style="width:100%" onclick="openModal();currentSlide(40)" class="hover-shadow cursor">
	  </div>
	</div>
</div>

<div class="main-content">
	<div class="row">
	  <div class="col-sm">
	    <img src="images/casa41.jpg" style="width:100%" onclick="openModal();currentSlide(41)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa42.jpg" style="width:100%" onclick="openModal();currentSlide(42)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa43.jpg" style="width:100%" onclick="openModal();currentSlide(43)" class="hover-shadow cursor">
	  </div>
	  <div class="col-sm">
	    <img src="images/casa44.jpg" style="width:100%" onclick="openModal();currentSlide(44)" class="hover-shadow cursor">
	  </div>
	</div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 44</div>
			<div class="container">
				<img src="images/casa1.jpg" style="width:100%">
			</div>

    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 44</div>
			<div class="container">
				<img src="images/casa2.jpg" style="width:100%">
			</div>
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 44</div>
			<div class="container">
				<img src="images/casa3.jpg" style="width:100%">
			</div>
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 44</div>
			<div class="container">
				<img src="images/casa4.jpg" style="width:100%">
			</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa5.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa6.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa7.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa8.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa9.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa10.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa11.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa12.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa13.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa14.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa15.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
      <div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa16.jpg" style="width:100%">
				</div>
    </div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa17.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa18.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa19.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa20.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa21.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa22.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa23.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa24.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa25.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa26.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa27.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa28.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa29.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa30.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa31.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa32.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa33.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa34.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa35.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa36.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa37.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa38.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa39.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa40.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa41.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa42.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa43.jpg" style="width:100%">
				</div>
		</div>

		<div class="mySlides">
			<div class="numbertext">5 / 44</div>
				<div class="container">
					<img src="images/casa44.jpg" style="width:100%">
				</div>
		</div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>


    <div class="caption-container">
      <p id="caption"></p>
    </div>
<div class="row">


</div>
  </div>
</div>
</div>
	<!-- <div class="row">
		<div class="col-sm-4 center">
				<img id="myImg" src="images/casa1.jpg" class="img-responsive img-thumbnail" alt="Casa de Tobias">
		</div>
		<div class="col-sm-4 center">
				<img src="images/casa2.jpg" class="img-responsive img-thumbnail" alt="Casa de Tobias">
		</div>
		<div class="col-sm-4 center">
				<img src="images/casa3.jpg" class="img-responsive img-thumbnail" alt="Casa de Tobias">
		</div>
	</div>
</div> -->
<!-- The Modal -->

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
@endsection
