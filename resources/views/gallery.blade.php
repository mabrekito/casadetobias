@extends('layouts.app')

@section('title')
	Gallery of Photos of Casa De Tobias Mountain Resort
@endsection


@section('content')

<div class="main-content">
<div class="gallery-intro">
	<div class="jumbotron">
		<img src="/images/bgGallery2.jpg" width="100%">
	</div>
</div>
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
    <img src="images/casa1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
    <img src="images/casa2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
    <img src="images/casa3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
    <img src="images/casa4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
    <img src="images/casa5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
    <img src="images/casa6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
    <img src="images/casa7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
    <img src="images/casa8.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
</div>

	<div class="row">
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa9.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa10.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa11.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa12.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
	  </div>
	</div>
	<div class="row">
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa13.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa14.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa15.jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa16.jpg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
	  </div>
	<div class="row">
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa17.jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa18.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa19.jpg" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa20.jpg" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
	  </div>
	</div>

	<div class="row">
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa21.jpg" style="width:100%" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa22.jpg" style="width:100%" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa23.jpg" style="width:100%" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa24.jpg" style="width:100%" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
	  </div>
	</div>
	<div class="row">
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa25.jpg" style="width:100%" onclick="openModal();currentSlide(25)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa26.jpg" style="width:100%" onclick="openModal();currentSlide(26)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa27.jpg" style="width:100%" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa28.jpg" style="width:100%" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
	  </div>
	</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-6 col-sm-6 pt-3">
			<img src="images/casa29.jpg" style="width:100%" onclick="openModal();currentSlide(29)" class="hover-shadow cursor">
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 pt-3">
			<img src="images/casa30.jpg" style="width:100%" onclick="openModal();currentSlide(30)" class="hover-shadow cursor">
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 pt-3">
			<img src="images/casa31.jpg" style="width:100%" onclick="openModal();currentSlide(31)" class="hover-shadow cursor">
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 pt-3">
			<img src="images/casa32.jpg" style="width:100%" onclick="openModal();currentSlide(32)" class="hover-shadow cursor">
		</div>
	</div>
	<div class="row">
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa33.jpg" style="width:100%" onclick="openModal();currentSlide(33)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa34.jpg" style="width:100%" onclick="openModal();currentSlide(34)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa35.jpg" style="width:100%" onclick="openModal();currentSlide(35)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa36.jpg" style="width:100%" onclick="openModal();currentSlide(36)" class="hover-shadow cursor">
	  </div>
	</div>

	<div class="row">
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa37.jpg" style="width:100%" onclick="openModal();currentSlide(37)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa38.jpg" style="width:100%" onclick="openModal();currentSlide(38)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa39.jpg" style="width:100%" onclick="openModal();currentSlide(39)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa40.jpg" style="width:100%" onclick="openModal();currentSlide(40)" class="hover-shadow cursor">
	  </div>
	</div>

	<div class="row">
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa41.jpg" style="width:100%" onclick="openModal();currentSlide(41)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa42.jpg" style="width:100%" onclick="openModal();currentSlide(42)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa43.jpg" style="width:100%" onclick="openModal();currentSlide(43)" class="hover-shadow cursor">
	  </div>
	  <div class="col-lg-3 col-md-6 col-sm-6 pt-3">
	    <img src="images/casa44.jpg" style="width:100%" onclick="openModal();currentSlide(44)" class="hover-shadow cursor">
	  </div>
	</div>
		
</div>
<div id="myModal" class="modal">
  <span class="close-modal cursor" onclick="closeModal()">&times;</span>
  <div class="container">
	  <div class="modal-content">

		  <div class="mySlides">
			  <div class="numbertext">1 / 44</div>
			  <img src="images/casa1.jpg" style="width:100%">

		  </div>

		  <div class="mySlides">
			  <div class="numbertext">2 / 44</div>
			  <img src="images/casa2.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">3 / 44</div>
			  <img src="images/casa3.jpg" style="width:100%">

		  </div>

		  <div class="mySlides">
			  <div class="numbertext">4 / 44</div>
			  <img src="images/casa4.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa5.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa6.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa7.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa8.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa9.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa10.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa11.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa12.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa13.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa14.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa15.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa16.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa17.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa18.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa19.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa20.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa21.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa22.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa23.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa24.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa25.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa26.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa27.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa28.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa29.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa30.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa31.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa32.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa33.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa34.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa35.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa36.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa37.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa38.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa39.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa40.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa41.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa42.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa43.jpg" style="width:100%">
		  </div>

		  <div class="mySlides">
			  <div class="numbertext">5 / 44</div>
			  <img src="images/casa44.jpg" style="width:100%">
		  </div>

		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>

	  </div>
  </div>
</div>
</div>
@endsection
