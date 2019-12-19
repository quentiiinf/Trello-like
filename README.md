# exo-ipi-jquery

Application Jquery/ajax trello-like pour évalutation de compétences IPI Jquery CDEV201

## Features 
* Les mots de passes envoyés à l'API sont hashés en sha256.
* Possibilité d'ajouter des ToDoList.
* Possibilité d'ajouter des tâches dans les ToDoList.
* La connexion au site est permanente jusqu'à la déconnexion, pas besoin de se reconnecter à chaque actualisation grâce au backend.
* Le backend utilise un framework maison.
* Les pages d'inscription et de connexion ne sont pas accessibles si on est déjà authentifié. Nous sommes automatiquement redirigés vers la page d'accueil si on tente d'y accéder (middleware backend du framework).
* Les pages de déconnexion et la page d'accueil permettant d'afficher les ToDoList ne sont pas accessibles. Nous sommes automatiquement redirigés vers la page de login si on tente d'y accéde (middleware backend du framework)

* Possibilité de modifier le nom des ToDoList ou des tâches.
* Possibilité de supprimer les tâches ou ToDoList.
* Possibilité de déplacer les tâches et les ToDoList pour changer l'ordre d'affichage.
* On peut également déplacer des tâches d'une ToDoList à une autre.
* Une fois la modification de l'ordre effectuée (features précédent), un bouton de sauvegarde permet de rendre le changement persistant même après une actualisation
* Pour annuler la modification de l'ordre des éléments qu'on vient de modifier, il existe également un bouton "annuler"
* Les boutons "annuler" et "sauvegarder" n'apparaissent que si on a modifié l'ordre.
* Animation : Un smiley apparait (de bas en haut) lors de la connexion ou de l'inscription avant d'être redirigé

## Framework maison

### Routes

`/route.php`

### Contrôleurs

Répertoire `/app/controller/`. Sur cette application, les contrôleurs ne font que renvoyer la vue sans traitements

### Vue

Répertoire `/view`

### Assets (js, css, etc)

Les assets se situent dans le répertoire `/public`. 

Le code javascript développé pour ce projet se situe dans `/public/js/project/` et `/public/css/style.css`. Le reste des fichiers sont des librairies. 

### Middleware

Les middleware se situe dans `/app/middleware`. Ils permettent d'effectuer des traitements avant le chargement des pages (par exemple vérifier que l'utilisateur est bien connecté et le rediriger si besoin...)

Le fichier `/middleware.php` permet d'ajouter un middleware à toutes les routes

## Installation de l'application 

* Cloner ce répo
* Requière PHP 7.4
* installer composer et effectuer un composer update sur le projet. 
* Modifier le fichier config.php en conséquence
* Modifier le fichier route.php pour que les routes match l'url (pour la démo la route login serait : 'exo-ipi-jquery/public/login')

## Démo

[http://5.196.105.199/exo-ipi-jquery/public/](http://5.196.105.199/exo-ipi-jquery/public/)

