<!DOCTYPE html>
<html lang='en'>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1', user-scalable=no'>
<link href='/css/bootstrap.min.css' rel='stylesheet'>
<script src="/js/jquery-2.1.1.min.js"></script>
<script src='/js/bootstrap.min.js'></script>
</head>

<style>

.navbar-default {
	min-height: 75px;
	background: linear-gradient(to bottom, rgba(40, 40, 40, 1),  rgba(0, 0, 0, 0));
    border-style: none;
    
}
body{
background-color:black;
}
h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
   
    text-align: center;
    height: 600px !important;
}

.carousel{
	background-color: black;
    margin-top: 0px;
    height:100%!important;
}

.bs-example{
	margin: 20px;
}

.navbar .nav > li > a{
margin-top:10px;
  text-shadow: #333 0.8em 0.8em 0.8em;
}

.row{
	margin-top:50px;
	}

}
</style>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
   	<div class="navbar-header">
      	<a class="navbar-brand" href="/"><div id="test"><p style="font-size:35px; color:white; position: absolute; left:10px; top:-15px;"><img src="/img/techgnosis.png"></strong></p></div></a>
     	</div>
     	<div class="navbar-collapse collapse">
       	<ul class="nav navbar-nav navbar-right" style="position:absolute; right:50px;">
       			<li><a href="{{ URL::route('users.show') }}"><strong><div id="test"><img src="/img/profile.png"></div></strong></a></li>
        	 	<li><a href="/login"><strong><img src="/img/login.png"></strong></a></li>
         	<li><a href="{{URL::to('signout')}}"><strong><img src="/img/logout.png"></strong></a></li>
       	</ul>
     	</div><!--/.nav-collapse -->
	</div><!--/.container -->
</nav>
       @yield('content')
       
    </body>
</html>
