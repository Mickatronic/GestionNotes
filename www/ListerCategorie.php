 <?php
//Page Acceuil
	session_start();	
?>
<html>
  <head>
    <title>Page d'accueil</title>
		  <?php
			include 'includes.html';
		  ?>
	
  </head>
  
  <body>
  <?php
	include 'navbar.php';
  ?>
  <div class="container">
	  <div class="">
		<fieldset>

		<!-- Form Name -->
			<legend>Lister Cat�gorie</legend>
			<form class="form-horizontal" method="GET" action="ListeCategorie.php">
				<fieldset>
					<table class="table table-striped">
						<tr>
							<td> 
								<b>IdAppliCat�gorie</b>
							</td>
							<td> <b>Nom de la cat�gorie</b>
							</td>
						</tr>
						<?php
							$db = mysqli_connect('localhost', 'root', '');

							// on s�lectionne la base
							mysqli_select_db($db,'gestionnotes');

							// on cr�e la requ�te SQL
							$sql = "SELECT * FROM ApplisCategories;";

							// on envoie la requ�te
							$req = mysqli_query($db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

							while($data = mysqli_fetch_assoc($req))
							{
								echo "<tr>";
								echo "<td>";
								echo $data["IdAppliCategorie"];
								echo "</td>";
								echo "<td>";
								echo $data["Nom"];
								echo "</td>";
								echo "</tr>";
							} 
						?>
					</table>
				</fieldset>
			</form>
		</fieldset>
	  </div>
  </div>
  </body>
</html>