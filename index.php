<!DOCTYPE html>
<html lang ="fr">
<head>
	<meta charset="UTF-8">
    <title>BadMood</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">

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
    <div class="gridCard">
        <div class='ytFrameCard'>
                <iframe id="ytplayer" type="text/html" width="640" height="360" frameborder="0"
                        src="https://www.youtube.com/embed/0Yr4hyFSJPk?autoplay=0&mute=1&controls=2&origin=http://example.com">
                </iframe>
        </div>
        <div class='methodesCard'>             
            <div class='indexTitles'>
                <h2 class="h2Title">METHODES</h2>
            </div>
            <article class="methodes">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam laoreet felis vel eros convallis condimentum. Vestibulum nunc mauris, venenatis vel lobortis eget, scelerisque nec turpis. 
                    Vivamus pharetra vel diam placerat tempus.
                    Suspendisse potenti. Nam at lectus eu nisl congue vestibulum ut eget turpis. 
                    Proin interdum neque erat, eget vestibulum libero tristique sed. Vivamus consequat rutrum nisl et aliquam. 
                    Morbi enim diam, malesuada nec consectetur eget, consectetur eget turpis.
                </p>
        
            </article>
        </div>
        <div class='helpCard'>
            <div class='indexTitles'>
                <h2 class="h2Title">BESOIN D'AIDE</h2>
            </div>
            <article class="needHelp">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam laoreet felis vel eros convallis condimentum. Vestibulum nunc mauris, venenatis vel lobortis eget, scelerisque nec turpis. 
                    Vivamus pharetra vel diam placerat tempus.
                    Suspendisse potenti. Nam at lectus eu nisl congue vestibulum ut eget turpis. 
                    Proin interdum neque erat, eget vestibulum libero tristique sed. Vivamus consequat rutrum nisl et aliquam. 
                    Morbi enim diam, malesuada nec consectetur eget, consectetur eget turpis.
                </p>
            </article>
        </div>
        <div class='systemCard'>
            <div class='indexTitles'>
                <h2 class="h2Title"><a href="page_infoSysteme.php" class="systemeLink">LE SYSTEME DE SANTE FRANCAIS</a></h2>
            </div>
            <article class="system">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nam laoreet felis vel eros convallis condimentum. Vestibulum nunc mauris, venenatis vel lobortis eget, scelerisque nec turpis. 
                    Vivamus pharetra vel diam placerat tempus.
                    Suspendisse potenti. Nam at lectus eu nisl congue vestibulum ut eget turpis. 
                    Proin interdum neque erat, eget vestibulum libero tristique sed. Vivamus consequat rutrum nisl et aliquam. 
                    Morbi enim diam, malesuada nec consectetur eget, consectetur eget turpis.
                </p>
            </article>
        </div>
    </div>
	</section>
        <?php include('footer.php');?>
</body>
</html>
