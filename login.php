<?php include('connexion.php');

    if (isset($_POST['btnValider'])){

            $sql= "SELECT * FROM codeuses 
            WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."' AND mdp='".mysqli_real_escape_string($link,md5($_POST['mdp']))."' LIMIT 0,1";
            $req=mysqli_query($link,$sql);
            if (mysqli_num_rows($req)>0) {
                $data=mysqli_fetch_array($req);
                $_SESSION['variable']=$data['id'];
                header('location:index1.php');
            }else{
                echo "identifiants incorrects";
            }
        }
            include('menu.php');
 ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Connexion</title>
        <link rel="stylesheet" href="css/bootstrap.css" >
    </head>
    <body style="background-color: salmon;">
        
       


        <div class="container">

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                        <legend><center><h2>login</h2></center></legend>
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="Exemple@gmail.com" required="">
                        </div>

                        <div class="form-group">
                            <label for="">Mot de passe:</label>
                            <input name="mdp" type="password" class="form-control" id="mdp" placeholder="password" required="">
                        </div>
                        
                        <button name="btnValider" type="submit" class="btn btn-primary btn-lg btn-block">Valider</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <!-- jQuery -->
        <script src=""></script>
        <!-- Bootstrap JavaScript -->
        <script src=""></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Hello World"></script>
    </body>
</html>