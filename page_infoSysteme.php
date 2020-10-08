<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <title>BadMood - Le système de santé en France</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="infoSysteme.css">
    
    <!-- Bibilotheque de logo svg par exemple pour le bouton menu sandwich-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Useful site to find informations if you need help about mental disorders.">
</head>

<body>
    <?php include("header.php")?>
    <section class="photoSystemeTop">
            <p class="mentionPhotoSystemeTop">Image par Bethany Drouin de Pixabay</p>
    </section>
    <main class="littleBody">
        <section class="introductionSysteme">
            <div class="intro">
                <p>En France le systeme de santé à pas mal évolué depuis ces dernières années.<br>La ministre des Solidarités et de la Santé à apporté des changements en 2018 dont l'enjeu est d’améliorer les conditions de vie, l’accès aux soins et l’inclusion sociale. Ce sont les objectifs de la feuille de route santé mentale et psychiatrie pour changer le regard sur ces maladies.</p>
            </div>
            <div class="titreIntro">
                <h2>Trois grands axes d’intervention pour changer de regard sur la santé mentale ainsi qu'améliorer l’accès aux soins, leurs conditions de vie ainsi que l'inclusion sociale.</h2>
            </div>
            <div class="listIntro">
                <ul>
                    <li>Promouvoir le bien être mental, prévenir et repérer précocement la souffrance psychique, et prévenir le suicide.</li>
                    <li>Garantir des parcours de soins coordonnés et soutenus par une offre en psychiatrie accessible, diversifiée et de qualité.</li>
                    <li>Améliorer les conditions de vie et d’inclusion sociale et la citoyenneté des personnes en situation de handicap psychique.</li>
                </ul><br>
                <p>Les objectifs du système est d'apporter une vision positive de la santé mentale, déterminant essentiel de la santé, et de promouvoir une psychiatrie qui ne soit plus le parent pauvre de la médecine.</p>
            </div>
        </section>
        <section>
            <h2>Les praticiens</h2>
            <div class="diffPro">
                <p>
                    Le psychiatre est diplômé de ses études en école de médecine, suite à 5 ans de spécialisation.
                    Il est donc à ce titre médecin.<br>
                    Le psychiatre peut donc prescrire des médicaments à ses patients, s'il pense que ça 
                    pourrait avoir un impact positif.
                    <br><br>
                    Contrairement au psychologue qui n'a pas 
                    le titre de médecin, car il a suivi un parcours universitaire
                    Ne peut pas préscrire de médicaments.<br>
                    Il accompagne et aide le patient à identifier les raisons de 
                    sa souffrance et à trouver des solutions pour y remédier.
                </p><br>
           </div>
        </section>
        <section>
           <h2>Le système de remboursement</h2>
            <div class="psychiaRemb">
                <h4>Pour le psychiatre</h4>
                    <p>
                        La consultation chez un psychiatre est prise en charge à 70% par l'assurance maladie, notamment grâce 
                        à son titre de médecin. Le reste à charge est prise par votre mutuelle.
                        <br>
                        Toutefois, le patient devra suivre le parcours de soins 
                        "classique". C'est-à-dire, passer d’abord par son médecin traitant avant de prendre 
                        rendez-vous avec un psychiatre.
                    </p>
            </div>
            <div class="psychoRemb">
                <h4>En ce qui concerne le psychologue</h4>
                <p>
                    Comme les psychologues n'ont pas de titre de médecin. 
                    L'assurance maladie ne prendra pas en chage les consultations.
                    sachant qu'une consultation coûte entre 40 et 120 euro selon 
                    les praticiens, les spécialités et les villes.
                    <br>
                    Cependant il existe des solutions pour bénéficier de remboursement 
                    de votre séance chez votre psychologue.<br><br>
                    
                    En se rendant dans un établissement public (hôpital)
                    En se rendant dans un centre médico-Psychologique
                    <br>
                    Attention, seul votre médecin traitant peut vous adresser à ses proféssionnels 
                    pour obtenir un remboursement à 100 % par l'assurance maladie, mais le délai 
                    de rendez-vous peut être très long selon les régions.
                    <br>
                    Certaines mutuelles proposent un remboursement des rendez-vous chez le psychologue 
                    soit par forfait annuel ou par nombre de séances.
                    <a href="https://www.aide-sociale.fr/psychologue-remboursement/">source</a>
                </p>
            </div>
            <a href="https://solidarites-sante.gouv.fr/systeme-de-sante-et-medico-social/parcours-de-sante-vos-droits/modeles-et-documents/guide-usagers-votre-sante-vos-droits/article/fiche-6-les-soins-psychiatriques">Pour en avoir plus sur le systeme des soins</a>
        </section>
    </main>
    <section class="photoSystemeBot">
        <p class="mentionPhotoSystemeBot">Image par silviarita de Pixabay</p>
    </section>
    <?php include("footer.php")?> 
    <script src="script.js"></script>
</body>
</html>
