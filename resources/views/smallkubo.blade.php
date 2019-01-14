@extends('layouts.app')

@section('title')
	Clubhouse Dormitory Photos of Casa De Tobias Mountain Resort
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
<div class="main-content">
<h2 style="text-align:center">Small Kubo</h2>

<div class="jumbotron">


<div class="row">
  <div class="column">
    <img src="images/smallkuboimg/kubo1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/smallkuboimg/kubo2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/smallkuboimg/kubo3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="images/smallkuboimg/kubo4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>
</div>
</div>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="images/smallkuboimg/kubo1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="images/smallkuboimg/kubo2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="images/smallkuboimg/kubo3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="images/smallkuboimg/kubo4.jpg" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
<div class="row">
    <div class="col-sm-3 p-4">
      <img class="demo cursor" src="images/smallkuboimg/kubo1.jpg" style="width:80%" onclick="currentSlide(1)" alt="kubo1">
    </div>
    <div class="col-sm-3 p-4">
      <img class="demo cursor" src="images/smallkuboimg/kubo2.jpg" style="width:80%" onclick="currentSlide(2)" alt="kubo2">
    </div>
    <div class="col-sm-3 p-4">
      <img class="demo cursor" src="images/smallkuboimg/kubo3.jpg" style="width:80%" onclick="currentSlide(3)" alt="kubo3">
    </div>
    <div class="col-sm-3 p-4">
      <img class="demo cursor" src="images/smallkuboimg/kubo4.jpg" style="width:80%" onclick="currentSlide(4)" alt="kubo4">
    </div>
  </div>
</div>
</div>


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

<div class="main-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1>About Small Kubo</h1>
        <p>The house is constructed to very high standards, with well thought through attention to details, and great ventilation. On the first floor, the loft bedroom, located below the eaves, has a large window offering a great view of the palm-fringed beach. The beautiful roof thatch is left exposed and contributes to the very cosy feel of the room.
  A few steps down from the bedroom lead to the bathroom, which is located to the back of the house, half open to nature whilst still very sheltered. The bathroom is fitted with both a modern shower and a traditional Thai style ong (water jar). The stairs continue down wrapping around the side of the house and terminate in the pantry area, equipped with sink and table. In turn, this room opens up onto the outside veranda though wooden sliding doors on two sides. The outdoor veranda is fitted with benches, easy chairs, a hammock and Thai cushions. Its slightly elevated position means it has great sea views and ventilation, perfect for lulling away the afternoon from the hammok </p>
      </div>
      <div class="col-lg-4">
        <h2>Summary</h2>
        <ul>
          <li>2 Person Capacity</li>
          <li>1 Bed(s)</li>
          <li>Couple size</li>
          <li>1,500php per day</li>
        </ul>
        <a href="/rooms" class="btn btn-primary">Go Back</a>
        <a href="/booknow" class="btn btn-success">BOOK NOW</a>
      </div>
    </div>
  </div>
</div>


@endsection
