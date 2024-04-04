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
                    <h2>S'inscrire sur Hell's Guitars</h2>
                    <p>Inscrivez-vous pour commander en ligne votre nouvelle guitare et profiter de services personnalisés</p>
                    <p>
                        <form action="inc/enregistrementclient.inc.php" method="post">                                                            
                            <fieldset>
                                <legend>informations personnelles</legend>
                                <label for='nom'>Nom</label>
                                <input type="text" name="nom" required autofocus maxlength="40"><br>
                                <label for='prenom'>Prénom</label>
                                <input type="text" name="prenom" required maxlength="20"><br>                                          
                                <label for='adresse'>Adresse</label>
                                <input type="text" name="adresse" required maxlength="40"><br>
                                <label for='cp'>Code postal</label>
                                <input type="text" name="cp" required pattern="[0-9]{5}" maxlength="5"><br>
                                <label for='ville'>Ville</label>
                                <input type="text" name="ville" required maxlength="40"><br>
                            </fieldset>
                            <fieldset>
                                <legend>informations de connexion</legend>
                                <label for='mail'>Adresse e-mail</label>
                                <input type="mail" name="mail" required maxlength="50"><br>
                                <label for='pwd1'>Mot de passe</label>
                                <input type="password" name="pwd1" maxlength="32"><br>
                                <label for='pwd2'>Confirmez</label>
                                <input type="password" name="pwd2" maxlength="32"><br>
                                <label>&nbsp;</label>
                                <input class="formButton" type="submit" value="S'inscrire">
                                <input class="formButton" type="reset" value="Effacer"/>
                            </fieldset>						
                        </form>
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