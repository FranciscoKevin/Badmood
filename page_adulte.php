<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BadMood - Page renseignements adultes</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="page_adulte.css">
    <link rel="stylesheet" href="footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    
    <!-- Bibilotheque de logo svg par exemple pour le bouton menu sandwich-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Useful site to find informations if you need help about mental disorders.">
</head>
<body>
<?php include("header.php")?>
    <main class="mainBox">
        <div class="imageAdult"> <!-- photo début page -->
            <h1 class="titleTrouble">Les Troubles chez les adultes</h1>
            <p class="mentionMessage">Image par PDPics de Pixabay</p>
        </div>
            <section class="blocContainerMentalyCareAdult"> <!-- repèrer "symptôme"-->
                <div class="bloc element-0"></div>
                <div class="bloc element-1">
                <div class="liste"><p>
                    Des symptômes peuvent être révélateurs d'un mal-être, d'une inhibition 
                    des potentialités d'épanouissement ou d'un dysfonctionnement interpersonnel.
                    <br><br>
                    C'est pourquoi, il est utile de les entendre comme un signal d'alarme, comme les 
                    manifestations d'un besoin de changement ou/et d'aide. Il est possible d'agir et d'y remédier.<br><br>
                </p>
                <p>
                    Le mal être peut s'exprimer de façon très différentes selon les personnes. Cependant voici les "grandes lignes" qui peuvent être un bonne indice :
                        <br><br>
                        <li>mal être physique (fatigue, atonie ou maladies...)</li>
                        <li>mal-être émotionnel (susceptibilité, manque d'estime de soi, anxiété, difficulté à gérer sa colère)</li>
                        <li>mal-être social : travail, relations familiales, sociales... </li>
                <p><br><br>
                    Cependant il est important d'avoir en tête, que seule des professionnels de santé qualifiés 
                    peuvent construire un portait mental de la personne suite à de nombreuses séances.
                    <br><br>
                    Votre mal être n'est pas une fatalité ! <br><br>
                    <b>Martellons-le, il est possible d'agir et d'y remédier.</b> 
                </p>
                </div>
                </div>
                    <div class="bloc element-2"> <!-- Témoignage -->
                        <div class="video">
                        <iframe width="560" height="100%" src="https://www.youtube.com/embed/a6MQiB-ic3s" 
                         allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                        gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                        </div>
                        <div class="videoText">
                            <p>Vous pouvez retrouver des témoignages de personne souffrantes de 
                                troubles ou de leurs entourages <a target="_blank" href="https://fondationdouglas.qc.ca/temoignage/"><b>ici</b></a>.</p>
                        </div>
                    </div>
                    <div class="bloc element-3"> <!-- partie prise de rendez-vous-->
                        <p>
                            Vous souhaitez prendre rendez-vous avec des professionnels de santé pour commencer à aller mieux? 
                        </p>
                        <p>
                            Nous vous conseillons d'en parler à votre médecin qui pourra vous orienter vers les professionnels les plus adaptés pour votre problème.
                        </p>
                    </div>    
                    <div class="bloc element-5">
                        <p class="rdv"><a target="_blank" href="https://www.doctolib.fr/psychologue/antony-antony">Rendez-vous avec un psychologue près de chez vous.</a></p>
                    </div>
                    <div class="bloc element-6">
                        <p class="rdv"><a target="_blank" href="https://www.doctolib.fr/psychiatre/antony-antony">Rendez-vous avec un psychiatre près de chez vous.</a></p>        
                    </div>
                    <div class=" imageAdult2 bloc element-4"> <!-- photo fin de page-->
                        <p class="mentionPhotoAdulte">Image par Алина Осипова de Pixabay</p>
                    </div>
            </section>
    </main>
    <?php include('footer.php');?>
    <script src="script.js"></script>
</body>
</html>
