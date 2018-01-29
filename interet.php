<?php include('connexion.php');
	$msg="";
	/*include('menu.php');*/
	if (isset($_POST['btnValider'])){
			$sql= "INSERT INTO interets
			 (titre,description,id_codeuses)
			 VALUES ('".mysqli_real_escape_string($link,$_POST['titre'])."',
			 		  '".mysqli_real_escape_string($link,$_POST['description'])."',
			 		  '".mysqli_real_escape_string($link,$_POST['id_codeuses'])."')";
			$result=mysqli_query($link,$sql);
			if ($result) {
				$msg='Insertion reussie';
			}else{
				$msg=mysqli_error($link);
			}
	}
	include('menu1.php');
 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ajouter un centre d'intérêt</title>

		<link rel="stylesheet" href="css/bootstrap.css" >

	</head>
	<body style="background-color: salmon;">
		
		<table width="100%" style="margin: 30px;">
				<tr>
					<td width="22%" valign="top" style="margin-left: 20px;">
						<a href="modifier.php">Modifier le profil</a><br><br>
						<a href="creer.php">créer CV </a><br><br>
						<a href="cv.php">Afficher votre CV</a><br><br>
						<a href="experience.php">Ajouter Experience</a><br><br>
						<a href="diplome.php">Ajouter Diplome</a><br><br>
						<a href="interet.php">Ajouter Centre d'interet</a>
					</td>
					<td width="78%">
						<div class="container">

							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">

									<form action="" method="POST" role="form" enctype="multipart/form-data">
										<legend><center><h2>Ajouter un centre d'intérêt</h2></center></legend>
										<span> <?php echo $msg; ?> </span>
									
										<div class="form-group">
											<label for="">Centre d'intérêt:</label>
											<input name="titre" type="text" class="form-control" id="" placeholder="le centre d'intérêt ici">
										</div>

										<div class="form-group">
											<label for="">Description:</label>
											<input name="description" type="text" class="form-control" id="" placeholder="insérer la description">
										</div>
									
										<div class="form-group">
							<label for="">codeuses:</label>
							<select name="id_codeuses" class="form-control">
					<?php
					//recupere toutes les categories dans la bd
					$sqlville="SELECT * FROM codeuses";
					//execute la requete et on la stock dans $repcategorie
					$repville=mysqli_query($link,$sqlville);
					//mysqli_fetch_array = permet de tran sformer le resultat $repcategorie en variable de type tableau $datacat
					// la boucle while nous permet de parcourir le tableau $datacat et de recuperer les valeurs de chaques elements du tableau $datacat
					while ($dataville=mysqli_fetch_array($repville)) {
						?>
						<option value="<?php echo $dataville['id'];?>">
						<?php echo $dataville['id'].'-'.$dataville['nom'];?>
							
						</option>

						<?php
					}
					?>
								
							</select>
						</div>

									<button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
					</form>
				</div>
				<div class="col-md-2"></div>
			</div>
<br>
			<div class="row" style="margin-right: 70px;">
				<table class="table">
			 	<thead>
			 		<tr>
			 			<th>Numero</th>
			 			<th>Centre d'intérêt</th>
			 			<th>Description</th>
			 			<th>Codeuses</th>
			 			<th>Modifier</th>
			 			<th>Supprimer</th>
			 		</tr>
			 	</thead>
			 	<tbody>
						<?php 
							$n=1;
							$list=" SELECT 
										titre,
										description,
										nom
									FROM interets
									INNER JOIN codeuses
									ON codeuses.id = interets.id_codeuses";
							$res= mysqli_query($link,$list);
							while ($data = mysqli_fetch_array($res)){
								
							
						 ?>
						<tr>
							<td> <?php echo $n; ?> </td>
							<td><?php echo $data['titre']; ?></td>
							<td><?php echo $data['description']; ?></td>
							<td><?php echo $data['nom']; ?></td>
							<td><a href="">modifier</a></td>
							<td><a href="">supprimer</a></td>
						</tr>
						<?php $n++;
						 }
						?>
					</tbody>
			 	
			 </table>
			</div>
			

		</div>

					</td>
				</tr>
			</table>

		
		

		<!-- jQuery -->
		<script src=""></script>
		<!-- Bootstrap JavaScript -->
		<script src=""></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
