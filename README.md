# TP2 - Cadriciel Web

Ce projet est lié au TP2 "Cadriciel Web" réalisé dans le cadre du cours.

## Informations de Connexion

Pour vous connecter au site, utilisez les informations suivantes :

- Adresse e-mail : victorvcham@gmail.com
- Mot de passe : 2000-01-01

## Lignes de Commande (Partie TP1)

### Créer un Projet Laravel

Pour créer un nouveau projet Laravel nommé "Maisonneuve{votre matricule}", utilisez la commande suivante. Remplacez `{votre matricule}` par votre numéro de matricule.

```bash
composer create-project --prefer-dist laravel/laravel Maisonneuve{votre matricule} "8.*"
```

**Note :** Pour le cours "webdev", utilisez le projet vide Laravel compatible.

### Créer des Modèles et des Tables avec Migration

Pour créer les modèles et les tables avec migration, utilisez les commandes suivantes :

```bash
php artisan make:model Ville -m
php artisan make:model Etudiant -m
php artisan migrate
```

### Créer des Données de Test

Pour créer des données de test, vous pouvez suivre ces étapes :

1. Créez des factories pour les modèles Ville et Etudiant :

```bash
php artisan make:factory VilleFactory
php artisan make:factory EtudiantFactory
```

2. Utilisez Tinker pour créer les données de test. Par exemple, pour créer 15 enregistrements de Ville et 100 enregistrements d'Etudiant :

```bash
php artisan tinker
>>> \App\Models\Ville::factory()->times(15)->create();
>>> \App\Models\Etudiant::factory()->times(100)->create();
```

### Créer des Contrôleurs

Pour créer des contrôleurs, utilisez la commande suivante (par exemple, pour créer le contrôleur Etudiant) :

```bash
php artisan make:controller EtudiantController
```

## Lignes de Commande (Partie TP2)

### Mise à Jour des Mots de Passe pour les Utilisateurs

Pour attribuer les mots de passe aux utilisateurs créés avec les données existantes de la table étudiants, suivez ces étapes :

1. Créez une migration pour la mise à jour des mots de passe :

```bash
$ php artisan make:migration update_temporary_password
```

2. Exécutez la migration :

```bash
$ php artisan migrate --path=database/migrations/2023_10_12_041417_update_temporary_password.php
```

Dans l'application WorkBench, exécutez les requêtes SQL pour transférer les données des étudiants vers les utilisateurs.

### Créer le Controller CustomAuthController

Pour créer le contrôleur CustomAuthController, utilisez la commande suivante :

```bash
$ php artisan make:controller CustomAuthController -m User
```

### Créer le Controller LocalizationController

Pour créer le contrôleur LocalizationController, utilisez la commande suivante :

```bash
$ php artisan make:controller LocalizationController
```

### Créer le Middleware Localization

Pour créer le middleware Localization, utilisez la commande suivante :

```bash
$ php artisan make:middleware Localization
```

### ForumPost

Pour créer le modèle, la migration, la factory, les données de test et le contrôleur pour ForumPost, suivez ces étapes :

```bash
$ php artisan make:model ForumPost -m
$ php artisan migrate --path=database/migrations/2023_10_09_211857_create_forum_posts_table.php
$ php artisan make:factory ForumPostFactory
$ php artisan tinker
>>> \App\Models\ForumPost::factory()->times(100)->create();
$ php artisan make:controller ForumPostController
```

### Document

Pour créer le modèle, la migration et le contrôleur pour Document, suivez ces étapes :

```bash
$ php artisan make:model Document -m
$ php artisan migrate --path=database/migrations/2023_10_09_212301_create_documents_table.php
$ php artisan make:controller DocumentController
```

## Liens Utiles

- [GitHub Repository](https://github.com/victo-or/laravel-tp2)
- [Site Web](https://e2296796.webdev.cmaisonneuve.qc.ca/Maisonneuve2296796/)
```

