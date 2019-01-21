@extends('layouts.app')

@section('title')
	Room Photos of Casa De Tobias Mountain Resort
@endsection

@section('content')
	<div class="main-container">
		<div class="container">
			<img src="images/dormitory/dormitorybanner.jpg" alt="casaRoomBanner" class="img-responsive img-fluid">
		</div>
	</div>
	<div class="main-container">
		<div class="container">
			<div class="jumbotron">
				<h1>ROOMS</h1>
				<p>Energy is the currency of the universe. When you ‘pay’ attention to something, you buy that experience.
					So when you allow your consciousness to focus on someone or something that annoys you, you feed it your energy, and it reciprocates the experience of being annoyed. Be selective in your focus because your attention feeds the energy of it and keeps it alive. Not just within you,
					but in the collective consciousness as well..</p>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<h2>Clubhouse Dormitory</h2>

						<div class="card" style="width:300px">
							<img class="card-img-top" src="images/casasmallroom.jpg" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">Clubhouse Dormitory</h4>
								<p class="card-text">8 person capacity</p>
								<a href="/dormitory" class="btn btn-primary">See More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<h2>Small Kubo</h2>

						<div class="card" style="width:300px">
							<img class="card-img-top" src="images/casasmallkubo.jpg" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">Small Kubo</h4>
								<p class="card-text">2 person capacity</p>
								<a href="/smallkubo" class="btn btn-primary">See More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12">
						<h2>Big Kubo House</h2>

						<div class="card" style="width:300px">
							<img class="card-img-top" src="images/casabigkubo.jpg" alt="Card image" style="width:100%">
							<div class="card-body">
								<h4 class="card-title">Big Kubo House</h4>
								<p class="card-text">4 - 6 people capacity</p>
								<a href="/bigkubo" class="btn btn-primary">See More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

@endsection
