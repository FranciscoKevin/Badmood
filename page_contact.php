<!DOCTYPE html>
<html lang ="fr">
<head>
	<meta charset="UTF-8">
    <title>BadMood - Page de contact</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="page_contact.css">
    <link rel="stylesheet" href="footer.css">
    
    <!-- Bibilotheque de logo svg par exemple pour le bouton menu sandwich-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Useful site to find informations if you need help about mental disorders.">
</head>

<body>
    <?php include("header.php")?>
    <main class="mainContainer">
        <section class="formulaireSection"> 
            <fieldset>                    
              <legend class=titleContact><h1>Contact</h1></legend>
                    <p class="pTitleContact">
                        Une question? <br>
                        Un bug sur notre site? <br>
                        N'hésitez pas à nous contacter via le formulaire suivant, nous vous répondrons dès que possible.
                    </p>
                    <form target ="_self" action="formulaire_merci.php" method="POST" class= "formulaire" autocomplete="on">
                        <div class="formulaire">
                        <input type="text" name="nom" id="nom" required placeholder="Votre nom">
                        </div>
                        <div class="formulaire">
                            <input type="text" name="prenom" id="prenom" required placeholder="Votre prénom">
                        </div>
                        <div class="formulaire">
                            <input type="email" name="email" id="email" required placeholder="Votre email">
                        </div>
                        <div class="formulaire">
                            <textarea class="textareastyle" name="message" id="message" cols="50" rows="20" required spellcheck="true" wrap="hard" placeholder=" Votre message"></textarea>
                        </div>
                        <div class="sendButton">
                            <input class="button" type="submit" value="Envoyer">
                        </div>
                    </form>
                </fieldset>
        </section>
        <section class="quiSommesNousContainer">        
            <div class="quiSommesNous">
                <a id="ancre"></a>
                <h1>Qui sommes-nous?</h1>
                <p>
                    L'association BadMood est composée d'une dizaine de bénévoles, tous issus d'études en comportement psychologique et/ou impactés par des comportements psychologiques dans leur entourage. Notre but est de vous apporter conseil et soutien,et de vous rediriger vers les spécialistes les plus compétents en fonction de votre besoin.
                </p>
            </div>    
        </section>    

    </main>
<?php include("footer.php")?>    
<script src="script.js"></script>

</body>
</html>