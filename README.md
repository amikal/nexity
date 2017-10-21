nexity
======

Installation du projet
----------------------

Projet sous version 2.8.28 de SF

$ composer install\
$ php app/console doctrine:database:create\
$ php app/console doctrine:schema:create\
$ php app/console server:run\

Accueil du site sur http://localhost:8000/ \
Pour enregistrer un contact http://localhost:8000/contact/create (ou alors cliquez sur un des liens dans la partie gauche (un projet immo ? ou Remplisser notre formulaire...)

TODO
----
+ Refactor deprecated functions (see debug bar)
+ Adapter encore mieux l'intégration HTML du formulaire dans TWIG (intégration des boutons radios pour les listes SELECT etc...)
+ Personnaliser mieux la validation et l'affichage des messages d'erreurs lors de la soumission du formulaire