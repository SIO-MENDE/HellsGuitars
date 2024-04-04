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
                        <h2>Les Cours</h2>
                        <p>Nos profs ont été choisis pour leur qualité pédagogique et leur rigueur. Ils sauront vous embarquer dans cette formidable aventure que constitue l’apprentissage ou le perfectionnement de la pratique guitaristique (jouer de la guitare quoi).</p>
                        <img src="images/pic/cours.jpg" style="float:left;padding-right:20px;"/>
                        <p>Les cours de guitares se déroulent dans des boxs adaptés et toujours près de l’atelier et du magasin pour pallier aux éventuels bobos se déroulant lors de la session de cours. Nous sommes toujours à vos côtés !</p>
                        <p>Lors des cours de guitares, nous pouvons aussi vous proposer de vous prêter un instrument. Nous savons qu’il n’est pas toujours aisé de venir avec sa guitare. Bref, vous êtes mieux qu’à la maison dans notre magasin.</p>
                        <img src="images/pic/cours2.jpg" style="float:right;padding-left:20px;"/>
                        <p>Que vous commenciez avec une guitare classique, une folk ou sur une électrique il faut envisager l’apprentissage de la guitare sur plusieurs année. Mais chaque élève a son propre rythme de progression. Notre objectif  principal est que vous ressentiez tout le plaisir que peut procurer la pratique de la guitare.</p>
                        <p>De la simple “tournerie” sur acoustique au plus débridé des shreds en passant par un bon delta blues, chaque style trouvera son prof à RockShop. Alors, prêt pour le plus merveilleux de voyage ?</p>
                        <h3>Nous contacter</h3>
                        <p>Pour obtenir un planning personnalisé et les tarifs, merci de nous contacter à l'adresse : <a href="mailto:cours@hellsguitars.fr">cours@hellsguitars.fr</a></p>
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