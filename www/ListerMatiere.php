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
			<legend>Lister Mati�re</legend>
			<form class="form-horizontal" method="GET" action="CleerMatiere-Validation.php">
				<fieldset>
					<table class="table table-striped">
						<tr>
							<td> 
								<b>IdClasse</b>
							</td>
							<td> 
								<b>Nom de la classe</b>
							</td>
							<td> 
								<b>IdMati�re</b>
							</td>
							<td> 
								<b>Nom de la mati�re</b>
							</td>
						</tr>
						<tr>
							<td> 
								1
							</td>
							<td> 
								TSTMG SIG
							</td>
							<td> 
								1
							</td>
							<td> 
								Fran�ais
							</td>
						</tr>
						<tr>
							<td> 
								1
							</td>
							<td> 
								TSTMG SIG
							</td>
							<td> 
								2
							</td>
							<td> 
								Math�matique
							</td>
						</tr>
						<tr>
							<td> 
								1
							</td>
							<td> 
								TSTMG SIG
							</td>
							<td> 
								2
							</td>
							<td> 
								Informatique
							</td>
						</tr>
<tr>
							<td> 
								2
							</td>
							<td> 
								TES1
							</td>
							<td> 
								3
							</td>
							<td> 
								Fran�ais
							</td>
						</tr>
						<tr>
							<td> 
								2
							</td>
							<td> 
								TES1
							</td>
							<td> 
								4
							</td>
							<td> 
								Math�matique
							</td>
						</tr>
						<tr>
							<td> 
								2
							</td>
							<td> 
								TES1
							</td>
							<td> 
								5
							</td>
							<td> 
								Economique et social
							</td>
						</tr>
					</table>
				

				</fieldset>
			</form>
		</fieldset>
	  </div>
  </div>
  </body>
</html>