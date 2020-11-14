<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="Droit_Social.css">
</head>

<body contenteditable="false">

    <!--Titre-->
    <span>
        <a href="../../index.php"> <img src="../../Image/Cours/Logo_Droit.png" height="30%" width="30%" id="logo"> </a>
    </span>
    <h1 style="margin: 0" id="Titre">
        DROIT SOCIAL
    </h1>

    <!--Liste vidéos tuto-->
    <!--Test-->
    <!-- Slideshow container -->
    <div style="margin-bottom: 5%">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../../Image/Cours/Droit_Social.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../../Image/Cours/IR_Categorie.png"  style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../../Image/Cours/Revenu_foncier.png"  style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>


    <!--Cours 1-->
    <div style="background-color: #83013a">
        <div id="Cours">
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
        <div id="Cours2">
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
        <!--Cours 3-->
        <div id="Cours3">
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
    </div>


    <!--Footer-->
    <?php include "../../Page_Accueil/Footer.php" ?>



</body>
</html>
