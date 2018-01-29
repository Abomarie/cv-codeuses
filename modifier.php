<?php include('connexion.php');
    $msg="";
    /*include('menu.php');*/
    if (isset($_POST['btnValider'])){
        /*echo '<pre>';
        print_r ($_FILES['image']);die();*/
        if (move_uploaded_file($_FILES['photo']['tmp_name'], 'upload/'.$_FILES['photo']['name'])) {
            $sql= "INSERT INTO codeuses
             (nom,prenoms,naissance,resume,email,telephone,mdp,specialisation,photo)
             VALUES ('".mysqli_real_escape_string($link,$_POST['nom'])."','".mysqli_real_escape_string($link,$_POST['prenoms'])."','".mysqli_real_escape_string($link,$_POST['naissance'])."','".mysqli_real_escape_string($link,$_POST['resume'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['telephone'])."','".mysqli_real_escape_string($link,$_POST['mdp'])."','".mysqli_real_escape_string($link,$_POST['specialisation'])."',
                      '".$_FILES['photo']['name']."')";
            $result=mysqli_query($link  ,$sql);
            if ($result) {
                $msg='Insertion reussie';
            }else{
                $msg=mysqli_error($link);
            }
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
        <title>Inscription</title>
        <link rel="stylesheet" href="css/bootstrap.css" >
    </head>
    <body style="background-color: salmon;">

        <div class="container">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                        <legend><center><h2>Inscription des codeuses</h2></center></legend>
                        <span> <?php echo $msg; ?> </span>
                    
                        <div class="form-group">
                            <label for="">Nom:</label>
                            <input name="nom" type="text" class="form-control" id="nom" placeholder="Entrer votre nom">
                        </div>

                        <div class="form-group">
                            <label for="">Prénoms:</label>
                            <input name="prenoms" type="text" class="form-control" id="prenoms" placeholder="Entrer vos prénoms">
                        </div>

                        <div class="form-group">
                            <label for="">Date de Naissance:</label>
                            <input name="naissance" type="text" class="form-control" id="naissance" placeholder="Entrer votre date de naissance">
                        </div>

                        <div class="form-group">
                            <label for="">Résumé:</label>
                            <input name="resume" type="text" class="form-control" id="resume" placeholder="Entrer votre description">
                        </div>

                        <div class="form-group">
                            <label for="">Email:</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Entrer votre email">
                        </div>

                        <div class="form-group">
                            <label for="">Téléphone:</label>
                            <input name="telephone" type="text" class="form-control" id="telephone" placeholder="Entrer votre numéro de téléphone">
                        </div>

                        <div class="form-group">
                            <label for="">Mot de passe:</label>
                            <input name="mdp" type="text" class="form-control" id="mdp" placeholder="Entrer votre mot de passe">
                        </div>

                        <div class="form-group">
                            <label for="">Spécialisation:</label>
                            <input name="specialisation" type="text" class="form-control" id="specialisation" placeholder="Entrer votre specialisation">
                        </div>

                        <div class="form-group">
                            <label for="">Photo:</label>
                            <input name="photo" type="file" class="form-control" id="" placeholder="photo">
                        </div>
                        
                        <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>

        <!-- jQuery -->
        <script src=""></script>
        <!-- Bootstrap JavaScript -->
        <script src=""></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Hello World"></script>
    </body>
</html>