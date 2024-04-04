<?php
// ------------------------------------------------------------------
//  vérification des informations saisies dans sidentifieradmin.php -
// ------------------------------------------------------------------

//Utilisation des sessions
session_start();

//On inclut les paramètres de connexion à la bd
include('cnx.inc.php');

//On récupère les saisies du formulaire precedent
$no=$_POST['nom'];
$pr=$_POST['prenom'];
$ad=$_POST['adresse'];
$cp=$_POST['cp'];
$vi=$_POST['ville'];
$ma=$_POST['mail'];

//Comparaison des deux mots de passe saisi
if ($_POST['pwd1']==$_POST['pwd2']) {
    //si ok : on récupère ce mot de passe
    $pw=$_POST['pwd1'];

    try {
        //connexion à la base de données
        $connexion = new PDO($DSN,$USER,$PWD);

        //préparation de la requete
        $traitement = $connexion->prepare("INSERT INTO clients (nomC,prenomC,adresseC,cpC,villeC,mailC,passwordC) VALUES (?,?,?,?,?,?,?);");

        //liaison des marqueurs avec les valeurs saisies dans le formulaire
        $traitement->bindValue(1, $no);
        $traitement->bindValue(2, $pr);
        $traitement->bindValue(3, $ad);
        $traitement->bindValue(4, $cp);
        $traitement->bindValue(5, $vi);
        $traitement->bindValue(6, $ma);
        $traitement->bindValue(7, $pw);

        //execution de la requete préparée
        $ok = $traitement->execute();    

        //$ligne est un tableau avec une seule case (indice 0)
        //cette case contient le résultat de la requete exécutée plus haut
        if ($ok==TRUE) {
            //si l'insertion à bien marché
            $_SESSION['user']="client";
            $_SESSION['nocli']=$connexion->lastInsertId();
            echo $_SESSION['nocli'];
            header('location:../clientpanel.php');
        } else {
            //sinon : l'insertion rencontre un problème        
            header('location:../erreur.php?err=nouveauclient');
        }
    }
    catch (PDOException $e){
        die("Source : ".$DSN." Erreur : ".$e->getMessage());
    }
    
}
else {
    //sinon : redirection vers une page d'erreur avec la paramètre 'pwd'
    header('location:../erreur.php?err=pwd');
}