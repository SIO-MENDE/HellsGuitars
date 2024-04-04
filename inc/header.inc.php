<?php    
    if (isset($_SESSION['user']) && ($_SESSION['user']=="admin")) {
        // un admin est loggé
        $lib_menu="Déconnexion";
        $page="inc/deconnexion.inc.php";        
    } else
        if (isset($_SESSION['user']) && ($_SESSION['user']=="client")) {
            // un client est loggé
            $lib_menu="Déconnexion";
            $page="inc/deconnexion.inc.php";
        }
        else {
            // la variable session n'existe pas ou sa valeur n'est ni admin ni client
            $lib_menu="S'identifier";
            $page="sidentifierclient.php";
        }
?>
<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="images/logo.png" width="270px"><h1><a href="index.php" id="logo">Hell's Guitars</a></h1>
                <nav id="nav">
                    <a href="index.php">Le magasin</a>
                    <a href="atelier.php">L'Atelier</a>
                    <a href="cours.php">Les Cours</a>
                    <a href="<?php echo $page;?>"><?php echo $lib_menu;?></a>
                </nav>
            </div>
        </div>
    </div>
</section>