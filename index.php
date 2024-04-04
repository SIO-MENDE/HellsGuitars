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
                        <h2>Le magasin</h2>
                        <p>Venez profiter d'un large choix d’instruments neufs et de notre zone d’essai unique dans la Lozère.</p>
                        <img src="images/pic/magasin.jpg" style="float:left;padding-right:20px;"/>
                        <h3>Où nous trouver ?</h3>
                        <p>Hell's Guitars<br>
                        26 rue Pados<br>
                        48000 Mende</p>
                        <h3>Horaires d'ouverture</h3>
                        <p>Du lundi au samedi<br>
                            de 09:00 à 18:30 non stop</p>
                        <p>Sur 120m², nous vous accueillons dans notre magasin afin de vous présenter une offre complète de guitares et basses. Chaque univers est organisé pour vous permettre de voir, choisir et tester en toute tranquillité le matériel. Une zone d'essai insonorisée est à votre disposition pour essayer votre futur instrument dans des conditions optimales. Un coin détente permettra même aux accompagnateurs de patienter pendant les essais.</p>                        
                        <p>Que vous soyez débutant, confirmé, ou professionnel, Hell's guitars vous propose une sélection d'instruments et d'accessoires adaptée à vos besoins.</p>
                        <h2>Les Services</h2>
                        <p>Bien plus qu’un simple magasin, Hell's Guitars est un lieu de vie autour de la musique et plus particulièrement autour de la guitare.</p>
                        <h3>L'Atelier</h3>
                        <p>Du simple recordage à la révision complète de votre instrument, nous vous proposons une prise en charge personnalisée, sérieuse et rigoureuse.</p>
                        <h3>Les cours</h3>
                        <p>Nous proposons des cours de guitare avec de véritables professionnels.</p>
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