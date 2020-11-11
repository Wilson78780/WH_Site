<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="Page_Accueil/Page_Accueil.css">
</head>

<body>
    <!--Header-->
    <?php include "Page_Accueil/Header.php" ?>

    <!--Centre de la page d'Accueil-->
    <div style="margin-left: 30px; margin-bottom: 50%">
        <span id="Image_PA">
                <img src="Image/Page_Accueil/Page_Accueil.jpg" height="80%" width="100%">
        </span>
        <span id="Text_PA">
            <div>
                <h1>Les actualités sont là !</h1>
                <p id="Ptit_Text_PA">
                    Vous êtes en création d'entreprise, étudiant, ou vous voulez s'implement vous informer. <br>
                    Ici vous trouverai les base de la fiscalité française, de droit social, de l'aide en juridique et en comptabilité.
                </p>
            </div>
        </span>
    </div>

    <!--Suite en blanc-->
    <div class="Suite">
        <span class="contrainer">

        </span>
    </div>


    <!--Connexion-->
    <div id=Bloc_Connexion>
        <div id="modal-header text-center">
            <h2 id="Connexion"> Connexion</h2>
        </div>
        <form method="POST">
            <p>
                <label class="control-label">Nom utilisateur</label> <br>
                <input name="username" type="text" class="form-control" placeholder="....@gmail.com">
            </p>
            <p>
                <label class="control-label">Mot de passe</label> <br>
                <input name="password" type="password" class="form-control" placeholder="Entrez mot de passe">
            </p>
            <div style="padding-top: 2%">
                <input id="Bouton" id="submit" class="btn btn-primary btn-block" type="submit" value="Se connecter">
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function affichage() {
            document.getElementById("Bloc_Connexion").style.display = "block";
        }
    </script>

    <!--Footer-->
    <?php include "Page_Accueil/Footer.php" ?>



</body>
</html>
