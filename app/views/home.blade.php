@extends('layout')

@section('content')
<div id="wrap">
	<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
	<!-- Carousel indicators -->
	  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
	  </ol>   
	 <!-- Carousel items -->
	  <div class="carousel-inner">
			<div class="active item">
				 <h2>Slide 1</h2>
				 <div class="carousel-caption">
					<h3>First slide label</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				 </div>
			</div>
			<div class="item">
				 <h2>Slide 2</h2>
				 <div class="carousel-caption">
					<h3>Second slide label</h3>
					<p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
				 </div>
			</div>
			<div class="item">
				 <h2>Slide 3</h2>
				 <div class="carousel-caption">
					<h3>Third slide label</h3>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
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
	<div class="container">
		<div class="row">
			<div class="col-md-4" style="outline: 1px solid #58ACFA">
				<h3 class="text-center">bill comments</h3><br /><br /><br /><br /><br /><br /><br />
			</div>
			<div class="col-md-8" style="outline: 1px solid #58ACFA">
				<p>People are saying things about bills. Join them. Or else.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8" style="outline: 1px solid #58ACFA">
				<p>People are saying things about politicians. You better join them, god damnit!</p>
			</div>
			<div class="col-md-4" style="outline: 1px solid #58ACFA">
				<h3 class="text-center">politician comments</h3><br /><br /><br /><br /><br /><br /><br />
			</div>
		</div>
		<div class="row">
			<div class="col-md-4" style="outline: 1px solid #58ACFA">
				<h3 class="text-center">best explanations</h3><br /><br /><br /><br /><br /><br /><br />
			</div>
			<div class="col-md-8" style="outline: 1px solid #58ACFA">
				<p>Everyone loves these explanations. You could be loved, too. If you're clever enough.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="outline: 1px solid #58ACFA">
				<h3 class="text-center">Some awesome graph</h3><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			</div>
		</div>
	</div>
	
</div>
