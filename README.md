# Le projet Hell's Guitars

[![forthebadge](http://forthebadge.com/images/badges/built-with-love.svg)](http://forthebadge.com)

Hell’s Guitars est un magasin de vente de guitares de la ville de Mende. Le magasin propose aussi des services de lutherie (réglages, réparation, …) et des professeurs dispensent des cours de pratique de l’instrument. Son gérant Franck Black souhaite diversifier ses supports de vente et être maintenant présent sur Internet. Durant son stage de fin de première année, le stagiaire Steve Morse a déjà réalisé une ébauche de l’application. La base de données, la structure des fichiers, la charte graphique ainsi que certaines fonctionnalités sont donc fournies et déjà fonctionnelles.

## Installation

Dans le dossier database vous trouverez un script SQL pour créer votre base de données.
Veillez à placer les scripts dans le répertoire de publication de votre Wamp.

## Les objectifs de la version 1.0

### AFFICHAGE DES CATALOGUES DES PRODUITS
Cette version doit rendre opérationnels les liens de la section « instruments en vente » du menu. Elle permettra ainsi d’afficher :

-	Le catalogue des guitares électriques
-	Le catalogue des guitares folks
-	Le catalogue des guitares classiques
-	Le catalogue des basses
-	
Ces catalogues afficheront une vue tabulaire des produits de la catégorie choisie avec leur référence, nom, descriptif, image et prix TTC (le taux de TVA est actuellement de 20% en France).

### AJOUTER UN BOUTON/LIEN « AJOUTER AU PANIER »
A côté de chaque instrument et seulement lorsqu’un client est connecté, un lien ou un bouton doit permettre d’ajouter 1 exemplaire de l’instrument choisi à son panier d’achat virtuel.
Pour l’instant ce bouton ou lien ne fera rien. Le panier virtuel sera implémenté dans la version 2 du site.

### DEVELOPPEMENT DE L’ESPACE CLIENT
Cet espace est accessible aux clients uniquement après authentification lorsqu’ils cliquent sur « Mon compte ». Ici, sur une même page, un client doit pouvoir :

-	visualiser ses informations personnelles (nom, prénom, adresse complète, mail)
-	modifier son nom, son prénom et son adresse complète
-	modifier son mot de passe

## Les objectifs de la version 1.1

Le panel d’administration doit permettre d’accéder aux fonctionnalités suivantes :

- Ajout/Modification/Suppression de clients
- Ajout/Modification/Suppression de catégories
- Ajout/Modification/Suppression de produits

Pour l’ajout ou la modification d’un produit vous pourrez mettre en place l’upload d’une image du produit.
Vous vérifierez alors que cette image :

- respecte la taille prévue à savoir 200px*200px maximum
- a un poids maximal de 100 ko
- a comme nom la référence du produit et comme extension .jpg (ex : EPISHEUJ.jpg)
- qu’elle sera bien placée dans le dossier prévu : « images/prod/ ».

Dans le cas où le fichier uploadé ne respecte pas ces règles, vous n’autoriserez pas le chargement du fichier.

## Les objectifs de la version 2.1

### AMELIORATION DU FRONT OFFICE
- Un client doit pouvoir valider son panier et donc transformer son panier en commande (pas de
formulaire d’achat en ligne à prévoir) en commande dans la base de données
- Depuis son espace client, un client doit pouvoir visualiser les commandes passées

### AMELIORATION DU BACK OFFICE
- L’administrateur souhaite avoir accès via son panel d’administration à un état récapitulatif des
commandes passées par les clients
- Il pourra alors ici annuler une commande (c’est-à-dire la supprimer)
- Il souhaite également que soit affiché le chiffre d’affaire réalisé en ligne (somme des montants de
toutes les commandes)

## Auteurs
* **Benjamin Becker**  _bbecker48_  [@bbecker48](https://github.com/bbecker48)

## License
Ce projet est sous licence ``exemple: WTFTPL`` - voir le fichier [LICENSE.md](LICENSE.md) pour plus d'informations
