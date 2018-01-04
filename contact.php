<?php
$db = new PDO('mysql:host=localhost;dbname=gaumart', 'root','');

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		
		
				<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top ">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img alt="Brand" src="img/logo_gaumart.png" class="img-responsive center-block" style="width:1.5em;"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="reception.php">Reception d'entreprise <span class="sr-only">(current)</span></a>
						</li>
						<li><a href="prive.php">Evenement privés</a></li>
						<li><a href="traiter.php">Traiteur</a></li>
						<li><a href="ref.php">Nos references</a></li>
						<li><a href="contact.php">Nous contacter</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
 

 	 <!-- FORM CONTACT -->

 <section id="contact">
			<div class="section-content">
				<h1 class="section-header">Prenez <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Contact avec Nous</span></h1>
				<h3>GAUMART est là pour vous ! Envoyez-nous un message ou Consultez nos données de contact en-dessous !!! </h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form id="form_contact" action="contact.php" method="POST">
					<div class="col-xs-6 col-md-6 form-line">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Votre nom</label>
					    	<input type="text" class="form-control" name="nom" id="" placeholder="Ex: Jean Neymar">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Votre e-mail</label>
					    	<input type="text" class="form-control" name="mail" id="exampleInputEmail" placeholder=" exemple@exemple.com">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">N° Mobile</label>
					    	<input type="tel" class="form-control" name="telephone" id="telephone" placeholder="+33 (0)6">
			  			</div>
			  		</div>
			  		<div class="col-xs-6 col-md-6">
			  			<div class="form-group">
			  				<label for="description"> Message</label>
			  			 	<textarea cols="2"  class="form-control" id="description" name="message" placeholder="Entrer votre Message" rows="2"  ></textarea>
			  			</div>
			  			<div>

			  				<button type="submit" class="btn btn-default submit" name="valider"><i class="fa fa-paper-plane" aria-hidden="true"></i> Envoyer</button>
			  			</div>
			  			<div id="contact_gaumart">
                          <h4>Contactez moi</h4>
			  			    <p>N° de telephone : 06.69.69.69.69</p>
			  			    <p>E-mail : gaumart@exemple.com</p>
			  			</div>
			  			
					</div>
				</form>
			</div>
          </div>			
           <?php


if(isset($_POST['valider'])){
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$message = $_POST['message'];
$tel = $_POST['telephone'];

$db->exec('INSERT INTO contact VALUES (NULL,"'.$nom.'","'.$message.'","'.$mail.'","'.$tel.'")');
}

 
 ?>

		  </section>








  
	<div class="row container text-center">
		<footer id="footer">
			-GAUMART Traiteur Paris-
		</footer>
	</div>
		
				

		
		
		<script src="bootstrap/js/jquery-3.2.1.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script src="js/modernizr.custom.28468.js"></script>
		<script src="js/app.js"></script>
	</body>
</html>
