<?php
	$Nom= "";
	$Utilite= "";
	$Ajouter= "";
	$IdAppli= "";
	$IdAppliCategorie = "";
	
	$Nom = $_GET['Nom'];
	$Utilite= $_GET['Utiliter'];


	
	$db = mysqli_connect('localhost', 'root', '');

	// on sélectionne la base
	mysqli_select_db($db,'GestionNotes');

	// on crée la requête SQL
	$sql = "INSERT INTO Applis (Nom,Utilite,IdAppliCategorie) VALUES('".$Nom."','".$Utilite."'".$IdAppliCategorie."');";
	
	// on envoie la requête
	$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
	

	// on ferme la connexion à mysql
	mysqli_close($db);
	
	header('Location: index.php')
 ?>