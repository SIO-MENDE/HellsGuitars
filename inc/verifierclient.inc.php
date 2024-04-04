<?php
session_start();

// -------------------------------------------------------------------
//  vérification des informations saisies dans sidentifierclient.php -
// -------------------------------------------------------------------

//On inclut les paramètres de connexion à la bd
include('cnx.inc.php');

try {
    //connexion à la base de données
    $connexion = new PDO($DSN,$USER,$PWD);
    
    //la requete compte le nb de ligne correspondant au couple login/mdp
    $req = "select * from clients where mailC=? and passwordC=?;";
    
    //préparation de la requete
    $traitement = $connexion->prepare($req);
    
    //liaison des marqueurs avec les valeurs saisies dans le formulaire
    $traitement->bindValue(1, $_POST['mail']);
    $traitement->bindValue(2, $_POST['pwd']);
    
    //execution de la requete préparée
    $traitement->execute();
    
    //j'extrait la première ligne du résultat contenu dans l'objet $traitement
    //en utilisant sa méthode fetch(). Elle renvoie TRUE si il ya bien un résultat
    //et FALSE s'il n'y a aucun résultat
    if ($ligne=$traitement->fetch()) {
        //alors il y a bien 1 résultat
        $_SESSION['user']="client";
        $_SESSION['nocli']=$ligne['idC'];
        header('location:../clientpanel.php');
    } else {
        //aucun résultat pour le couple login/mdp saisi
        header('location:../erreur.php?err=client');    
    }
}
catch (PDOException $e){
    die("Source : ".$DSN." Erreur : ".$e->getMessage());
}