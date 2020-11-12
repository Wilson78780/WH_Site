<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="Fiscalite.css">
</head>

<body>

    <!--Header-->
    <?php include "Header.php" ?>

    <!--Titre-->
    <h1 id="Titre">
        DROIT FISCAL
    </h1>

    <!--Liste vidéos tuto-->

    <!--Test-->
    <img class="mySlides" src="../../Image/Cours/Impot_Revenu_Gene.png">
    <img class="mySlides" src="../../Image/Cours/IR_Categorie.png">
    <img class="mySlides" src="../../Image/Cours/Revenu_foncier.png">
    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
        }
    </script>

    <!--Cours 1-->
    <div class="Cours">
        <div class="Bases">
            <figure class="Image">
                <img src="../../Image/Cours/Impot_Revenu_Gene.png" alt="Fiscalité" width="80%" height="80%">
            </figure>
        </div>
        <div class="Texte" style="float: left">
            Parlons dans un premier temps de l'impôt sur le revenu de manière générale. <br>
            Nous allons ensuite approfondir point par point et vous pourrez directement <br>
            regarder la vidéo qui vous intéresse le plus.
        </div>
    </div>
    <!--Cours 2-->
    <div class="Cours2">
        <div class="Bases">
            <figure class="Image">
                <img src="../../Image/Cours/IR_Categorie.png" alt="Fiscalité" width="80%" height="80%">
            </figure>
        </div>
        <div class="Texte" style="float: left">
            Dans l'impôt sur le revenus nous avons plusieurs catégories <br>
            qui ont leurs propres fonctionnement, <br>
            si l'une de c'est catégorie vous intéresse alors vous pouvez voir <br>
            les vidéos suivantes.
        </div>
    </div>
    <!--Cours 2-->
    <div class="Cours2">
        <div class="Bases">
            <figure class="Image">
                <img src="../../Image/Cours/Revenu_foncier.png" alt="Fiscalité" width="80%" height="80%">
            </figure>
        </div>
        <div class="Texte" style="float: left">
            L'une des catégorie est le revenu foncier, <br>
            Comme les revenus locatifs, mais pas que...
        </div>
    </div>













    <!--Footer-->
    <?php include "../../Page_Accueil/Footer.php" ?>



</body>
</html>
