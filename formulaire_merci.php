<!DOCTYPE html>
<html lang ="fr">
<head>
	<meta charset="UTF-8">
    <title>BadMood - Page de contact</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="formulaire_merci.css">
    <link rel="stylesheet" href="footer.css">
    
    <!-- Bibilotheque de logo svg par exemple pour le bouton menu sandwich-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Useful site to find informations if you need help about mental disorders.">
</head>
<body>
    <?php include("header.php")?>
        <main>
            <div class="messageContainer">
                <h1 class="message"> <?php echo $_POST['prenom']; ?>, merci pour votre message, nous y répondrons dès que possible.</h1>
                <p>Cette fenêtre se fermera automatiquement dans quelques secondes.</p>
            </div>
        </main>
        <?php include("footer.php")?>    
    <script type="text/javascript">
    var delai=4; // Delai en secondes
    var url='index.php'; // Url de destination
    setTimeout("document.location.replace(url)", delai + '000');
    </script>  
</body>
</html>