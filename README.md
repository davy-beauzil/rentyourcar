## Lien du projet
http://rentyoucar.davy-beauzil.fr/

## Contexte : 
Le site RentYourCar a pour but de mettre à disposition en location les véhicules que propose l’entreprise.
Cette dernière doit pouvoir alors gérer ces véhicules afin d’en ajouter, les modifier ou les supprimer.

Le projet a été réalisé dans le cadre du passage du BTS SIO, à quatre développeurs, avec une répartition des tâches de façon à ce que tout le monde touche à tout (pour valider l'examen).

## Début du projet :
Au départ, nous avons réalisé un projet de base identique pour chaque membre du groupe de travail disponible sur un serveur GIT afin que chacun puisse travailler sur la même base de travail, et puisse partager le travail une fois terminé.
Ce projet a été réalisé sous Laravel 8, avec une base de données MySQL.

## Travail réalisé personnellement :
Dans un premier temps, je me suis occupé de créer les migrations nécessaires à ma partie (véhicules et modèle de véhicule).

Une fois que la base de données était prête, j’ai créé une page de gestion des véhicules/modèles.
Je voulais faire différents formulaires pour chaque action à faire (créer, modifier, lire et supprimer).
Cependant, cela impliquait de répéter le même travail quatre fois de suite, ce qui n’est pas vraiment optimisé.

Après réflexion, vers la 3ème séance, j’ai choisi de réaliser un formulaire unique qui se gérère en fonction de ce que souhaite faire l’utilisateur, le tout en Javascript. C’est une méthode selon moi plus conviviale pour l’utilisateur, mais après réflexion, plus difficile à mettre en place pour le développeur car le code devient rapidement imcompréhensible et difficilement modifiable.
Cette partie là a été fonctionnelle à la fin des 7 semaines.

Ayant du temps supplémentaire à notre disposition, nous avons pu ajouter du contenu à notre site pour qu’il soit plus complet.
J’ai alors personnellement travaillé sur la création de pages permettant de voir dans des tableaux les récapitulatifs des véhicules, modèles et locations présents dans la base de données.

Les deux parties sur lesquelles j’ai pu travailler (CRUD véhicules & modèles / tableaux récapitulatifs) sont disponibles que par des utilisateurs ayant les droits d’administrateur. Un simple client qui se connecte ne peut bien évidemment pas consulter ses informations ou ajouter des véhicules en base de données.

## Procédures mises en place :
À chaque fin de séance, nous mettions en commun le travail que nous avions réalisé sur le serveur GIT afin que pour la séance prochaine, nous reprenions le travail sur une base propre et commune.
Vers la fin du projet, nous travaillions plus à résoudre quelques bugs, donc la mise en commun du travail était plus fréquente.

Le fait d’avoir tous le projet à jour permettait à chacun de faire un check-up et si besoin faire remonter les bugs à corriger.



