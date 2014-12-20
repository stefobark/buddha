@extends('layout')

@section('content')
<div id="wrap">
	<div id="myCarousel" class="carousel slide" data-interval="9000" data-ride="carousel">
	<!-- Carousel indicators -->
	  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>   
	 <!-- Carousel items -->
	  <div class="carousel-inner">
			<div class="active item">
				
				 <div class="carousel-caption">
				  {{ HTML::image('img/tarot.png', 'tarot for buddhists') }}
				 </div>
				</div>
					<div class="item">
				 <div class="carousel-caption">
				  {{ HTML::image('img/interwebs.png', 'profound random number generation') }}
				 </div>
				 </div>
				<div class="item">
				 <div class="carousel-caption">
				  <a href="/users/create" >{{ HTML::image('img/scoreboard.png', 'karmic scoreboard') }}</a>
				 </div>
				</div>
			</div>
	  </div>
	  <!-- Carousel nav -->
	  <a class="carousel-control left" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="carousel-control right" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>

				

</div>
