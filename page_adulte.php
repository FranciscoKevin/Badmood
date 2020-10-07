<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>BadMood - Page renseignements adultes</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="parent.css">
    <link rel="stylesheet" href="footer.css">
    
    <!-- Bibilotheque de logo svg par exemple pour le bouton menu sandwich-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Useful site to find informations if you need help about mental disorders.">

</head>
<body>
<?php include("header.php")?>
    <main class="mainBox">
        <section class="imageAdulteTriste"> <!-- photo début page -->
            <div class="imageAdulteTop">
                <p class="mentionMessageAdulte">Image par PDPics de Pixabay</p>
            </div>
        </section>
        <section class="mentalyCareAdulte"> <!-- repèrer "symptôme"-->
            <h1>Les Troubles chez les adultes</h1>
            <div class="signalAlarm">
                <p>
                    Des symptômes peuvent être révélateur d'un mal-être, d'une inhibition 
                    des potentialités d'épanouissement ou d'un dysfonctionnement interpersonnel.
                    <br>
                    C'est pourquoi, il est utile de les entendre comme un signal d'alarme, comme les 
                    manifestations d'un besoin de changement ou/et d'aide. Il est possible d'agir et d'y remédier.
                </p>
            </div><br>
            <div class="listeGrandEcran">
                    <p> Le mal être peut s'exprimer de façon très différentes selon les personnes. 
                        Cependant voici les "grandes lignes" qui peuvent être un bonne indice :<br><br>
                        <ul>
                            <li>- mal être physique (fatigue, atonie ou maladies...)</li>
                            <li>- mal-être émotionnel (susceptibilité, manque d'estime de soi, anxiété, difficulté à gérer sa colère)</li>
                            <li>- mal-être social : travail, relations familiales, sociales... </li>
                        </ul>
                    </p>
            </div>
            <div class="listePetitEcran">
                    <p>
                        <a href="http://www.la-psychologie.com/signes-alarme-symptomes.htm">cliquez par ici</a>, 
                        si vous désirez obtenir une liste non exhautive des signes de mal être.
                    </p>
            </div><br>
            <div class="rappelSante">
                    <p>
                        Cependant il est important d'avoir en tête, que seule des professionnels de santé qualifiés 
                        peuvent construire un portait mental de la personne suite à de nombreuses séances.
                        <br>
                        Votre mal être n'est pas une fatalité ! <br>
                        Martellons-le, il est possible d'agir et d'y remédier. 
                    </p>
            </div> 
            <div class="temoignageAdulte"> <!-- Témoignage -->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/a6MQiB-ic3s" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                    gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <p>Vous pouvez retrouver des témoignages de personne souffrantes de troubles ou de leurs entourages <a href="https://fondationdouglas.qc.ca/temoignage/">ici</a>.</p>
            </div><br>
            <div class="rdvAdulte"> <!-- partie prise de rendez-vous-->
                    <p>
                        Si vous souhaitez prendre rendez-vous avec des professionnels de santé pour commencer à aller mieux. Nous vous conseillons 
                        d'en parler à votre médicin qui pourra vous orienter vers les professionnels les plus adaptés pour votre problème.
                    </p>
                    <br><br>
                    <p>vous pouvez aussi vous référer à notre page <a>professionnels de santé</a> pour trouver la personne la plus adapté à vos soucis</p>
                    <p>rendez-vous avec un psychologue près de chez vous : <a href="https://www.doctolib.fr/psychologue/antony-antony">cliquez ici</a></p>
                    <p>rendez-vous avec un psychiatre près de chez vous : <a href="https://www.doctolib.fr/psychiatre/antony-antony">cliquez ici</a></p>        
            </div>
        </section>
        <section class="imageAdulteHopeness"> <!-- photo fin de page-->
            <div class="imageAdulteBottom">
                <p class="mentionPhotoAdulte">Image par Алина Осипова de Pixabay</p>
            </div>
        </section>
    </main>
    <?php include('footer.php');?>
</body>
</html>
