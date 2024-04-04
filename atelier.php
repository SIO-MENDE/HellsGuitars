<?php
    session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Hell's Guitars</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="subpage">
<div id="page-wrapper">

<!------------>
<!-- HEADER -->
<!------------>
    <?php include("inc/header.inc.php"); ?>
    
<!------------->
<!-- CONTENU -->
<!------------->
    <section id="content">
        <div class="container">
            <div class="row">                
                
            <!-- SIDEBAR -->
                <div class="col-3 col-12-medium">
                    <?php include("inc/menu.inc.php"); ?>
                </div>
                
            <!-- CONTENU PRINCIPAL -->
                <div class="col-9 col-12-medium imp-medium">
                    <section>
                        <h2>L'Atelier</h2>
                        <p>Hell's Guitars est un magasin mais aussi un atelier réparation/lutherie. Nous pratiquons régulièrement depuis plusieurs années la réparation, l’entretien et le réglage de vos instruments.Du recordage de votre instrument dans les règles de l’art à la pose d’un micro sur votre folk, nous nous occupons de répondre à vos envies en vous proposant des solutions adaptées à vos exigences dans des délais brefs.Notre atelier et réputé pour le sérieux et la rigueur de ses actes. Un carnet de suivi entretien permet à notre atelier de conserver un historique sur les instruments, leurs révisions et leurs spécificités.</p>
                        <img src="images/pic/atelier.jpg" style="float:left;padding-right:20px;"/>
                        Voici une liste non exhaustive des prestations proposées par notre atelier :
                            <ul class='puce'>
                                <li>Recordage tous types de guitares et basses</li>
                                <li>Nettoyage complet de votre instrument</li>
                                <li>Pose de tous types de micros</li>
                                <li>Changement d’ accastillage</li>
                                <li>Re-cablage complet</li>
                                <li>Révision complète</li>
                                <li>etc.</li>
                            </ul>
                        <p>La plupart des travaux ne nécessite pas la prise de rendez-vous, vous pouvez nous apporter votre instrument et le récupérer le lendemain ou le sur-lendemain dans le pire des cas.</p>
                        <h3>Nous contacter</h3>
                        <p>Pour obtenir un devis personnalisé, merci de nous contacter à l'adresse : <a href="mailto:atelier@hellsguitars.fr">atelier@hellsguitars.fr</a></p>
                    </section>
                </div>
                
            </div>
        </div>
    </section>

<!------------>
<!-- FOOTER -->
<!------------>
    <?php include("inc/footer.inc.php"); ?>
    
</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>