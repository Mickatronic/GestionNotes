<<?php
//Page Acceuil
	session_start();	
?>
<html>

  <head>
  <style>
  .navbar-brand2
  {
	position: absolute;
	width: 100%;
	left: 0;
	text-align: center;
	margin: auto;
	margin-top:10px;
  }
  </style>
    <title>Création De Mes Fiches</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.js"></script>
	
  </head>
  
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  
	  	    <a class="navbar-brand" href="Index.php">Accueil</a>
			
    </div>
	<?php
		if (isset ($_SESSION["Nom"]))
		{
	?>
	<div class="navbar-brand2">Création De Mes Fiches</div>
	<div class="navbar-form navbar-left">
		<a href="MonEspace.php" class="btn btn-primary">Mon Espace</a>
		<a href="MonProfil.php" class="btn btn-info">Mon Profil</a>
		
	</div>
	<div class="navbar-form navbar-left">
		<a class="col-xs-offset-1" href="Index.php"></a>
	</div>
	<div  class="navbar-form navbar-right" role="search">
		<a href="deconnexion.php" class="btn btn-danger">deconnexion</a>
		<a href="Aide.php" class="btn btn-warning">Aide</a>
	</div>
	
	<?php
	}
	else
	hearder ("Location: index.php");
	{
	?>
	

	
	
	<?php 
	}
	?>	  

	 
   </div>
   </nav>
  
  </body>
</html>