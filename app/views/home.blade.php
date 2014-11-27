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
				 <h2>Timeless Wisdom</h2>
				 <div class="carousel-caption">
				 {{ HTML::image('img/buddha.jpg', 'buddha') }}
					<h3>techgnosis brings Buddha to the interwebs</h3>
					<p>Channel the ancient masters for spiritual guidance.</p>
				 </div>
				</div>
				<div class="item">
				 <h2> Confront your negative tendencies.</h2>
				 <div class="carousel-caption">
				  {{ HTML::image('img/food_buddha.png', 'food buddha') }}
					<h3>Celebrate your positive qualities!</h3>
					<p><a href="/users/create">Sign up today.</a></p>
				 </div>
				</div>
				 <div class="item">
				 <h2>What is this?</a></h2>
				 <div class="carousel-caption">
					<h3><span style="color:#00CCFF;"><strong>techgnosis</strong></span> is a fun way to interact with ancient teachings. It's a bit like tarot, but based (so far) on ancient wisdom sayings from Buddhism and early Christianity (the so called "gnostic" teachings).</h3>
					<br /><br /><h3 style="text-align:left;">Create an account to:</h3>
					
					<ul style="text-align:left;">
					<li>comment on the sayings you receive in your readings.</li>
					<li>like other people's comments</li>
					<li>receive monthly summaries of your karmic scoreboard.</li>
					<li>And, as I continue to build the site, you'll get access to all sorts of crazy stuff!</li>
					</ul>
					<br/ ><br />
					<p>If there's something more you'd like to see (a specific text to add to the collection, or some other functionality), just tell me.</p>
					<p> Email me at steven.j.barker at gmail dot com!</p>
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
