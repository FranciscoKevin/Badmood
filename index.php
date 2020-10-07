<!DOCTYPE html>
<html lang ="fr">
<head>
	<meta charset="UTF-8">
    <title>BadMood</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="script.js"></script>


    <!-- Bibilotheque de logo svg par exemple pour le bouton menu sandwich-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Useful site to find informations if you need help about mental disorders.">
</head>
<body>
    <?php include("header.php")?>
    <div class='imageCard'>
        <div class="textOnImage">
            <p class="presentation1">
                Vous ou un de vos proches vous sentez stressé, mal dans votre peau, en proie à des troubles du comportement?
            </p>
            <p class="presentation2">
                Nous sommes ici pour vous aider et vous rediriger vers un professionnel compétent.
            </p>
            <div class="mentionImgIndex">
                <p class="mentionImg">
                    @cristian_newman
                </p>
            </div>
        </div>
    </div>
    <main>

        <div class="gridMain">
            <div class='ytFrameCard'>
                <iframe id="ytplayer" type="text/html" width="640" height="360" frameborder="0"
                        src="https://www.youtube.com/embed/0Yr4hyFSJPk?autoplay=0&mute=1&controls=2&origin=http://example.com">
                </iframe>
            </div>
            <div class="methodesCard">
                <h2 class="h2Title">METHODES</h2>
                <p>
                    Témoignages, articles </br> et professionnels de santé 
                </p>
                <div class="childrenAdults">
                    <a class="childrenCard" target=”_blank” href="page_enfant.php">
                    Enfants
                    </a>
                    <a class="adultsCard" target=”_blank” href="page_adulte.php">
                    Adultes
                    </a>  
                </div>
            </div>
            <div class="helpCard">
                <h2 class="h2Title">BESOIN D'AIDE</h2>
                <a class="aArticleCard" target=”_blank” href="https://fr.wikihow.com/g%C3%A9rer-une-personne-angoiss%C3%A9e">
                    Comment prévenir une crise, en cas d'urgence téléphoner au <br>
                    0 800 858 858 (numéro gratuit)
                </a>
            </div>
            <div class="systemCard">
                <h2 class="h2Title">LE SYSTEME DE SANTE FRANCAIS</h2>
                <a class="aArticleCard" target=”_blank” href="page_infoSysteme.php">
                    <p>
                        Prise en charge, assurance maladie, <br> divers praticiens
                    </p>
                </a>
            </div>
        </div>
    </main>
        <?php include('footer.php');?>
         
</body>
</html>
