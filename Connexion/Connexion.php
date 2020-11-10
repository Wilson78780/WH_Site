<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <!--Header-->
    <?php include "Header.php" ?>

    <!--Formulaire-->
    <div id="Bloc_Connexion">
        <h2 id="Connexion">Connexion</h2>

            <form method="POST">
                <p>
                    <label>Nom utilisateur</label>
                    <input name="username" type="text" placeholder="....@gmail.com">
                </p>
                 <p>
                    <label>Mot de passe</label>
                    <input name="password" type="password" placeholder="Entrez mot de passe">
                 </p>
                <input id="Bouton" id="submit" type="submit" value="Se connecter">
            </form>
    </div>



    <!--Footer-->
    <?php include "Footer.php" ?>



</body>
</html>
