# Le projet Hell's Guitars

[![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)](http://forthebadge.com)  [![forthebadge](http://forthebadge.com/images/badges/powered-by-electricity.svg)](http://forthebadge.com)

Hell’s Guitars est un magasin de vente de guitares de la ville de Mende. Le magasin propose aussi des services de lutherie (réglages, réparation, …) et des professeurs dispensent des cours de pratique de l’instrument. Son gérant Franck Black souhaite diversifier ses supports de vente et être maintenant présent sur Internet. Durant son stage de fin de première année, le stagiaire Steve Morse a déjà réalisé une ébauche de l’application. La base de données, la structure des fichiers, la charte graphique ainsi que certaines fonctionnalités sont donc fournies et déjà fonctionnelles.

## Les objectifs

### AFFICHAGE DES CATALOGUES DES PRODUITS
Cette version doit rendre opérationnels les liens de la section « instruments en vente » du menu. Elle permettra ainsi d’afficher :
-	Le catalogue des guitares électriques
-	Le catalogue des guitares folks
-	Le catalogue des guitares classiques
-	Le catalogue des basses
Ces catalogues afficheront une vue tabulaire des produits de la catégorie choisie avec leur référence, nom, descriptif, image et prix TTC (le taux de TVA est actuellement de 20% en France).

### AJOUTER UN BOUTON/LIEN « AJOUTER AU PANIER »
A côté de chaque instrument et seulement lorsqu’un client est connecté, un lien ou un bouton doit permettre d’ajouter 1 exemplaire de l’instrument choisi à son panier d’achat virtuel.
Pour l’instant ce bouton ou lien ne fera rien. Le panier virtuel sera implémenté dans la version 2 du site.

### DEVELOPPEMENT DE L’ESPACE CLIENT
Cet espace est accessible aux clients uniquement après authentification lorsqu’ils cliquent sur « Mon compte ». Ici, sur une même page, un client doit pouvoir :
-	visualiser ses informations personnelles (nom, prénom, adresse complète, mail)
-	modifier son nom, son prénom et son adresse complète
-	modifier son mot de passe

## Installation

Dans le dossier database vous trouverez un script SQL pour créer votre base de données.
Veillez à placer les scripts dans le répertoire de publication de votre Wamp.

## Auteurs
* **Benjamin Becker** _bbecker48_ [@bbecker48](https://github.com/bbecker48)

## License

Ce projet est sous licence ``exemple: WTFTPL`` - voir le fichier [LICENSE.md](LICENSE.md) pour plus d'informations
