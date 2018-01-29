<?php
	$msg="";
	include('connexion.php');
	include('menu1.php')
?>

 <!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="Viewport" content="witdth=device-width, initial-scale=1">
		<meta neme="description" content="c'est un blog">
		<meta name="author" content="">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	

		<title>cv</title>

	</head>

	<body>

		<div class="container" style=" padding:10px;background-color: beige;">
			<div class="row">

				<?php
				
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=db_cvs;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}

					
					$req = $bdd->prepare('SELECT id, nom,prenoms,naissance,resume,email,telephone,mdp,specialisation,photo FROM codeuses WHERE id=?');
					$req->execute(array($_GET['cv']));
					$donnees = $req->fetch();
					?>
					<div class="col-md-1"></div>
					<div class="col-md-3" style="color: magenta;"><?php echo htmlspecialchars($donnees['nom']);?><?php echo htmlspecialchars($donnees['prenoms']);?><br>
					Né le <?php echo htmlspecialchars($donnees['naissance']);?><br>
					<?php echo htmlspecialchars($donnees['telephone']);?><br>
					<?php echo htmlspecialchars($donnees['email']);?></div>
					<div class="col-md-1"></div>
					<div class="col-md-3" style="color: magenta; text-align: center;" ><?php echo htmlspecialchars($donnees['resume']);?></div>
					<div class="col-md-1"></div>
					<div class="col-md-2" style="color: magenta;"><img src="upload/<?php echo $donnees['photo'];?>"  alt="" class="img-rounded" width="150px" height="150px"  /><br><?php echo htmlspecialchars($donnees['specialisation']);?></div>
					<div class="col-md-1"></div>
				</div></div><br><br>

			

				<div class="container" style="opacity: 0.85; padding:10px; background-color: beige;">
			<div class="row">
						<h2 style="color: magenta; text-align: center;">Mes expériences</h2>
					<?php
				
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=db_cvs;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}

					
					$req = $bdd->prepare('SELECT id,titre,debut,fin,entreprise,id_codeuses FROM experiences WHERE id=?');
					$req->execute(array($_GET['cv']));
					$donnees = $req->fetch();
					?>


					<div class="col-md-1"></div>
					<div class="col-md-3"><?php echo htmlspecialchars($donnees['debut']);?>-<?php echo htmlspecialchars($donnees['fin']);?><?php echo htmlspecialchars($donnees['titre']);?></div>
					<div class="col-md-1"></div>
					<div class="col-md-4"><?php echo htmlspecialchars($donnees['titre']);?></div>
					<div class="col-md-1"></div>
					<div class="col-md-2"><?php echo htmlspecialchars($donnees['entreprise']);?></div>


			</div>
		</div><br><br>

			<div class="container" style="opacity: 0.85; padding:10px; background-color: beige;">
			<div class="row">
					<h2 style="color: magenta; text-align: center;">Mes diplômes</h2>
				<?php
				
					try
					{
						$bdd = new PDO('mysql:host=localhost;dbname=db_cvs;charset=utf8', 'root', '');
					}
					catch(Exception $e)
					{
					        die('Erreur : '.$e->getMessage());
					}

					
					$req = $bdd->prepare('SELECT id,anne,libelle,ecole,id_codeuses FROM codeuses WHERE id=?');
					$req->execute(array($_GET['cv']));
					$donnees = $req->fetch();
					?>

					<div class="col-md-1"></div>
					<div class="col-md-2><?php echo htmlspecialchars($donnees['anne']);?></div>
					<div class="col-md-1"></div>
					<div class="col-md-4"><?php echo htmlspecialchars($donnees['ecole']);?></div>
					<div class="col-md-1"></div>
					<div class="col-md-2"><?php echo htmlspecialchars($donnees['libelle']);?></div>
					<div class="col-md-1"></div>

				</div>
			</div>

				

					
		
		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body>
</html>