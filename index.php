<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="style.css" type="text/css" rel="stylesheet">

<title>GAUMART Traiteur Paris</title>
</head>

<body>
<header>
 <nav class="navbar navbar-default" role="navigation">
    	  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <div class="navbar-brand navbar-brand-centered"><div class="col-xs-12"><img id="logo" src="img/logo_gaumart.png"></div></div></div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Réceptions d'entreprise</a></li>
		        <li><a href="#">Evénements privés</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Traiteur</a></li>
		        <li><a href="#">Nos références</a></li>
		        <li><a href="#">Nous contacter</a></li>		        
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
</header>

<div class="hidden-xs" id="trait1"></div>
<div class="hidden-xs" id="trait2"></div>

<div id="carousel-example-generic" class="carousel slide" data-interval="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li id="point" data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li id="point" data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li id="point" data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li id="point" data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/Slider%207.jpg" alt="slider1" class="img-responsive center-block">
      <div class="carousel-caption"></div>
    </div>

    <div class="item">
      <img src="img/Slider%2011.jpg" alt="slider2" class="img-responsive center-block">
    </div>

    <div class="item">
      <img src="img/9.index4.jpg" alt="slider3" class="img-responsive center-block">
    </div>
      
     <div class="item">
      <img src="img/Slider%208.jpg" alt="slider4" class="img-responsive center-block">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div id="footer">
    <center><div id="ligne1"><b>- GAUMART Traiteur Paris -</b></div></center>
    <center><div id="ligne2">Mentions légales || Gateartproject  2015</div></center>
</div>
</body>
<script src="bootstrap/js/jquery-3.2.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>