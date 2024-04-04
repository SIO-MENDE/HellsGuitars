<?php
// ---------------------------------------------------------------------------
//  le lien "Administration renvoi soit vers le formulaire d'identification  -
//  soit vers le panel d'admin si l'admin est déjà connecté                  -
// ---------------------------------------------------------------------------

    //On determine si un admin est déjà connecté
    if (isset($_SESSION['user']) && $_SESSION['user']=="admin") {
        // le lien "Administration" pointera directement vers le panel admin
        $page = "adminpanel.php";
    }
    else {
        // sinon le lien devra pointer vers le formulaire d'identification admin
        $page = "sidentifieradmin.php";
    }
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="legal.php">Mentions légales</a> |
                <a href="mailto:contact@hellsguitars.fr">Nous contacter</a> |
                <a href="<?php echo $page; ?>">Administration</a>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright -->
<div id="copyright">
    &copy; Hell's Guitars v0.1. All rights reserved. | Design: <a href="mailto:beckerbenjamin@hotmail.com">bb</a>
</div>
<!-- /Copyright -->