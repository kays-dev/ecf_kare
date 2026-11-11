# KARE 📦

Application web de gestion de produits connectée à une base de données NoSQL.

## 📓 CONTEXTE

Évaluation en Cours de Formation réalisée en individuel, en fin de formation Développeur Web et Web Mobile à SIMPLON.CO, en juillet 2025. Elle porte sur l'utilisation d'une base de données NoSQL.

## 🎯 FONCTIONNALITÉS

- Liste des produits
- Création, consultation, modification et suppression d'un produit

## 🛠 TECHNOLOGIES

| Technologie | Usage |
|---|---|
| PHP | Back-end, architecture MVC avec repository |
| MongoDB | Base de données NoSQL (librairie `mongodb/mongodb`) |
| Composer | Gestion des dépendances |

## 🚀 INSTALLATION

1. Cloner le projet

   ```bash
   git clone https://github.com/kays-dev/ecf_kare.git
   cd ecf_kare
   ```

2. Installer les dépendances : `composer install`
3. Créer la base et la collection avec les commandes de `createdatabase.txt`
4. Renseigner la connexion dans `lib/database.php`
5. Lancer un serveur local (`php -S localhost:8000`) et ouvrir `index.php`

## 👥 AUTEURE

Développé par **Krystal** ([@kays-dev](https://github.com/kays-dev)) — SIMPLON.CO, juillet 2025.

## 📜 LICENSE

Ce projet a été développé dans un cadre pédagogique pour mon évaluation.