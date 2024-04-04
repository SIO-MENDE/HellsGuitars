<?php
    session_start();
// ------------------------------------------------------------------
//  page sécurisée : on vérifie qu'une session client soit présente -
// ------------------------------------------------------------------

if ( isset($_SESSION['user']) && ($_SESSION['user']=='client')) {
    // Si la variable session 'user' a pour valeur 'client' :
    // on affiche alors le panel d'admin, soit tout le code ci-dessous
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
                        <h2>Espace client</h2>
                        <p>
                            <h3>Fonctionnalités à développer :</h3>                   
                            <ul class='puce'>
                                <li>Voir ses infos personnelles</li>
                                <li>Pouvoir les modifier</li>
                            </ul>
                        </p>  
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
    <?php
}
else {
    // sinon : la variable session user n'est pas défini ou différente de 'client'
    // on renvoie à la page index
    header('location:index.php');
}