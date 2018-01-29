<?php 
;
	include('connexion.php');
	
?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--navigateur internet Exploreur-->
		<meta name="Viewport" content="witdth=device-width, initial-scale=1">
		<meta neme="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/accueil.css">
		

		<title>les cv</title>
	</head>

	<body>
		<?php include('menu.php') ?>

		<div class="container" style="opacity: 0.85; padding:10px; ">
			<div class="row-padding">
				<h2 style="text-align: center; color: blue;">LA LISTE DES CV</h2><br><br>

				<?php
				// Connexion à la base de données
				// une autre manière de se connecter à la base de données
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=db_cvs;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}

					// On récupère les 5 derniers articles
					$req = $bdd->query('SELECT id, nom,prenoms,naissance,resume,email,specialisation,photo FROM codeuses');
					while ($donnees = $req->fetch())
					{?>


				<div class="col-md-4">
					<div class="card jumbotron">
					  <div class="card-body">
					  	<img src="upload/<?php echo $donnees['photo'];?>" width="50px" height="50px" alt="Mon Image"/><br>
					  	<h3><!-- htmlspecialchars : permet de proteger les textes -->
							<?php echo htmlspecialchars($donnees['nom']); ?>
						</h3>
					  	<p style="font-size:15px">	<?php
							// On affiche le contenu de l'article
							// nl2br Elle permet  de convertir les  retours  à la ligne en balises  HTML  <br />
							echo nl2br(htmlspecialchars($donnees['resume']));
							?>
						</p>
					  	<p class="text-right" style="font-size:15px">
					  		<a href="cv1.php?cv=<?php echo $donnees['id']; ?>">lire la suite</a></p>
					  	
					  </div>
					</div>
				</div>
				<?php
				} // Fin de la boucle des articles
					$req->closeCursor();
				?>

			</div>
		</div>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>
