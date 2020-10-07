<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <title>BadMood - Page renseignements enfants</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="enfant.css">
    
    <!-- Bibilotheque de logo svg par exemple pour le bouton menu sandwich-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Useful site to find informations if you need help about mental disorders.">
</head>
<body>
    <?php include("header.php")?>
        <main class="mainBox">
            <section class="imageChild">
                <img src="https://cdn.pixabay.com/photo/2013/11/28/09/51/sad-219722_960_720.jpg" alt="enfant, triste">
                <div class="mentionPhoto">
                    <p class="mentionMessage">Image par PublicDomainPictures de Pixabay </p>
                </div>
            </section>
            <section class="mentalyCareChild">
                <h1>Les Troubles chez les enfants</h1>
                <div class="signalAlarm">
                    <p>
                        Les symptômes suivants sont souvent révélateurs d'un mal-être, d'une inhibition 
                        des potentialités d'épanouissement ou d'un dysfonctionnement interpersonnel.
                        <br><br>
                        C'est pourquoi, il est utile de les entendre comme un signal d'alarme, comme les 
                        manifestations d'un besoin de changement ou/et d'aide. Il est possible d'agir et d'y remédier.
                    </p>
                    <br>
                    <p>
                        Exemple de signaux peuvant être observer :
                        <ul>
                            <li>Troubles du sommeil ou/et appétit</li>
                            <li>Perte de contrôle de sphincters</li>
                            <li>troubles de l'appétit avec ou sans nausées ou/et vomissements</li>
                            <li>Changements de l'humeur</li>
                            <li>Repli sur soi</li>
                            <li>manque d'attention, de concentration, rêverie, avec ou 
                            sans chute des résultats scolaires, perte des acquis antérieurs</li>
                            <li>absence de confiance en soi</li>
                            <li>manifestations psycho-somatiques</li>
                        </ul>
                    </p>
                    <br>
                    <p>
                        Cependant il est important d'avoir en tête, que seule des professionnels de santé qualifiés 
                        peuvent construire un portait mental de la personne suite à de nombreuses séances.
                        <br>
                        Martellons-le, il est possible d'agir et d'y remédier. 
                    </p>
                </div>
                <div class="temoignageEnf"> <!-- Témoignage -->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/_Kz7BD98dEo" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; 
                    gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <p>Vous pouvez retrouver des témoignages de personne souffrantes de troubles ou de leurs entourages <a href="https://fondationdouglas.qc.ca/temoignage/">ici</a>.</p>
                </div>
                <br>
                <div class="rdvEnf"> <!-- partie prise de rendez-vous-->
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
            <section class="imageChild"> <!-- photo fin de page-->
                <img src="https://cdn.pixabay.com/photo/2017/07/07/04/09/girl-2480361_960_720.jpg" alt="mère, enfant, ensemble">
                <div class="mentionPhoto">
                    <p class ="mentionMessage">Image par 5540867 de Pixabay</p>
                </div>
            </section>
        <main>
        <?php include("footer.php")?>
    </body>
</html> 

