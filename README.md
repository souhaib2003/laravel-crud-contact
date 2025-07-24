# laravel-crud-contact

Une application CRUD Laravel simple. 

## Technologies utilisées

- Laravel 12.x
- PHP 8.2
- MySQL

## Emplois

- Créer un contact
- Modifier un contact
- Supprimer un contact
- Afficher tous les contacts

## Routes principales

Méthode         URL                       Description    

GET             /contacts                 Afficher tous les contacts
GET             /contacts/Create          Créer un contact
POST            /contacts                 Enregistre un nouveau contact
GET             /contacts/{id}            Affiche un contact spécifique
GET             /contacts/{id}/edit       Modifier un contact
DELETE          /contacts/{id}            Supprimer un contact

## Comment exécuter le projet 

1. Exécutez « composer install »
2. Préparez un fichier « .env » avec les informations de la base de données
3. Exécutez « php artisan migrate »
4. Démarrez le serveur avec « php artisan serve »
5. Accédez à « http://localhost:8000/contacts »

## Ce que j’ai appris 

- Utiliser Blade pour créer des vues dynamiques
- Organiser les routes et les contrôleurs



