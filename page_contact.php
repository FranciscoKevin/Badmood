<!DOCTYPE html>
<html lang ="fr">
<head>
	<meta charset="UTF-8">
    <title>BadMood - Page de contact</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<header>
		<!---- MENU NAVIGATION ----->
			<a href="index.html"><h1>BadMood</h1></a>
			<nav>
				<div class="bouton-menu">
					<div class="barre bar1"></div>
					<div class="barre bar2"></div>
					<div class="barre bar3"></div>
				</div>
		      	<div class="menu-deroulant">
			        <a href="#home">Home</a>
			    	<a href="#about">About</a>
			    	<a href="#contact">Contact</a>
		      	</div>
		     </nav>
		     
  </header>
    <main>
        <section class="generalSection">
            <img src="img/img_contact.jpg" alt="" class=backgroundImage>
            <h1>Contact</h1>
            <p>
                Une question? <br>
                Un bug sur notre site? <br>
                N'hésitez pas à nous contacter via le formulaire suivant, nous vous répondrons dès que possible.
            </p>
            <form target ="_self" action="formulaire_merci.php" method="GET" class= formulaire autocomplete="on" target="self">
                <div class="nom">
                    <label for="nom">Votre nom</label>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div class="formulaire">
                    <label for="prenom">Votre prénom</label>
                    <input type="text" name="prenom" id="prenom" required>
                </div>
                <div class="formulaire">
                    <label for="email">Votre email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="formulaire">
                    <label for="message">Votre message</label>
                    <textarea name="message" id="message" cols="50" rows="20" required spellcheck="true" wrap="hard"></textarea>
                </div>
                <div class="formulaire">
                    <input type="submit" value="Envoyer" onclick="window.location.href = 'index.html'";>
                </div>
            </form>
        </section>
        <section>        
            <div>
                <h1>Qui sommes-nous?</h1>
                <p>
                    L'association BadMood est composée d'une dizaine de bénévoles, tous issus d'études en comportement psychologique et/ou impactés par des comportements psychologiques dans leur entourage. Notre but est de vous apporter conseil et soutien,et de vous rediriger vers les spécialistes les plus compétents en fonction de votre besoin.
                </p>
        </section>    
            </div>    
    </main>
    <script src="script.js"></script>
</body>
</html>
