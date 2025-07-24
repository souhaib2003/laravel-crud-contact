# laravel-crud-contact

Une application CRUD Laravel simple. (crud)

## 🚀 Technologies utilisées

- Laravel 12.x
- PHP 8.2
- MySQL
  
## 📂 Structure du projet
- `/app`: logique métier
- `/routes/web.php`: routes de l’application
- `/resources/views`: vues Blade

##  🧾 Fonctionnalités

✅ Créer un contact
✅ Modifier un contact
✅ Supprimer un contact
✅ Afficher tous les contacts

## 📌 Routes principales

- `/contacts`: liste de tous les contacts
- `/contacts/create`: formulaire d’ajout
- `/contacts/{id}/edit`: modifier un contact
- `/contacts/{id}/delete`: supprimer un contact


## ▶️ Comment exécuter le projet 

1. Exécutez « composer install »
2. Préparez un fichier « .env » avec les informations de la base de données
3. Exécutez « php artisan migrate »
4. Démarrez le serveur avec « php artisan serve »
5. Accédez à « http://localhost:8000/contacts »

## Ce que j’ai appris 

- Utiliser Blade pour créer des vues dynamiques
- Organiser les routes et les contrôleurs



