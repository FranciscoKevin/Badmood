<!DOCTYPE html>
<html lang ="fr">
<head>
	<meta charset="UTF-8">
    <title>BadMood - Merci!</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php include("header.html"); ?>
    <main>
        <div>
            <h3 class="message"> <?php echo $_GET['prenom']; ?>, merci pour votre message, nous y répondrons dès que possible.</h3>
            <p>Cette fenêtre se fermera automatiquement dans quelques secondes.</p>
        </div>
    </main>



<?php include("footer.html"); ?>

<script type="text/javascript">
var delai=3; // Delai en secondes
var url='index.html'; // Url de destination
setTimeout("document.location.replace(url)", delai + '000');
</script>
</body>
</html>