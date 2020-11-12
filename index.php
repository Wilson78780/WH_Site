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
    <div style="margin-left: 30px; margin-bottom: 40%">
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

    x<!--Suite en blanc-->
    <div class="Suite">

        <!--fiscalité-->
        <div class="Fiscalite">
            <div id="Image_Fiscalite">
                <figure>
                    <a href="Cours/Fiscalite/Fiscalite.php" style="box-shadow: 8px 8px 12px #aaa">
                        <img src="Image/Cours/Fiscalite.png" alt="Fiscalité" width="100%" height="100%">
                    </a>
                    <figcaption class="legende">COURS DE DROIT FISCAL</figcaption>
                </figure>
            </div>
            <div class="Texte" style="float: left; color: #162035">
                    Vous avez besoin d'informations sur la fiscalité française,<br>
                    pour apprendre, approfondir, ou mieux comprendre. <br>
                    alors ces videos explicatives sont faite pour vous.
            </div>
        </div>

        <!--Droi social-->
        <div class="Droit_Social">
            <div id="Image_droit">
                <figure>
                    <a href="Cours/Droit_Social/Droit_Social.php" style="box-shadow: 8px 8px 12px #aaa">
                        <img src="Image/Cours/Droit_Social.png" alt="Droit social" width="100%" height="100%">
                    </a>
                    <figcaption class="legende">COURS DE DROIT FISCAL</figcaption>
                </figure>
            </div>
            <div class="Texte" style="padding-top: 15%; color: #a50048">
                    Besoin de savoir d'informations sur la fiscalité française, pour apprendre, approfondir, ou mieux comprendre. alors ces videos explicatives sont faite pour vous.
            </div>
        </div>
    </div>
-

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
