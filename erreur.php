<?php
    session_start();

//Principe de fonctionnement :
//----------------------------
//Lorsque erreur.php est appelé, on doit lui passer en plus un paramètre
//dans l'URL nommé 'err'.
//Ce paramètre nous permettra de personnaliser le message d'erreur.
//$message doit contenir le message à afficher et
//$page_redirect contient la page vers laquelle renvoyer l'internaute après qq secondes


//$_GET['err'] permet de récupérer le paramètre contenu dans l'URL
switch($_GET['err']) {
    
    //l'erreur vient de la connexion d'un admin
    case "admin" :
        $message="Votre identifiant et/ou votre mot de passe d'administrateur sont invalides.";
        $page_redirect="sidentifieradmin.php";
        break;
    
    //l'erreur vient de la connexion d'un client
    case "client" :
        $message="L'adresse e-mail et/ou le mot de passe sont invalides.";
        $page_redirect="sidentifierclient.php";
        break;
    
    //l'erreur vient de 2 pwd différents lors de l'enregistrement d'un client
    case "pwd" :
        $message="Les deux mots de passe saisis doivent être identiques.";
        $page_redirect="enregistrerclient.php";
        break;
    
    //l'erreur vient de l'enregistrement d'un client
    case "nouveauclient" :
        $message="Les informations transmises sont erronées.";
        $page_redirect="enregistrerclient.php";
        break;
    
    //l'erreur n'est pas prévue, on retournera à l'accueil
    default:
        $message="Erreur inconue. Retour à l'accueil";
        $page_redirect="index.php";
        break;
}
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
                        <h2>Erreur</h2>
                        <p class='erreur'><?php echo $message;?></p>
                        <p><a href="javascript:history.back()">Cliquez ici</a> pour revenir à la page précédente ou patientez quelques secondes...</p>
                        <?php header( "refresh:5;url=".$page_redirect);?>    
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