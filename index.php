<!DOCTYPE html>
<html lang ="fr">
    <head>
        <meta charset="UTF-8">
        <title>BadMood</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Noto+Sans">

        <!-- Bibilotheque de logo svg par exemple pour le bouton menu sandwich-->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Useful site to find informations if you need help about mental disorders.">
    </head>
    <body>
        <?php include("header.php")?>
        <main>
        <div class='imageCard'>
            <div class="textOnImage">
                <p class="presentation1">
                    Vous ou un de vos proches se sent stressé, mal dans sa peau, en proie à des troubles du comportement ?<br>
                    Nous vous proposons des professionnels compétents vers qui vous tourner ainsi que les gestes à adopter.
                </p>
                <p class="mentionImg">
                    @cristian_newman
                </p>
            </div>
        </div>
            <div class="gridMain">
                <div class='ytFrameCard'>
                    <iframe id="ytplayer"
                            src="https://www.youtube.com/embed/0Yr4hyFSJPk?autoplay=0&mute=1&controls=2&origin=http://example.com">
                    </iframe>
                </div>
                <div class="methodesCard">
                    <h2 class="h2Title">METHODES</h2>
                    <p>
                        Témoignages, articles <br> et professionnels de santé 
                    </p>
                    <div class="childrenAdults">
                        <a class="childrenCard" href="page_enfant.php">
                            Enfants
                        </a>
                        <a class="adultsCard"  href="page_adulte.php">
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
                    <a class="aArticleCard" href="page_infoSysteme.php">
                        Prise en charge, assurance maladie, <br> divers praticiens
                    </a>
                </div>
            </div>
        </main>
            <?php include('footer.php');?>
            <script src="script.js"></script>
    </body>
</html>
