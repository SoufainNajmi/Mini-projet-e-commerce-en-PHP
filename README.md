# Mini E-commerce Project in PHP
Developed an e-commerce application in native PHP featuring product catalog management, category and user administration, as well as order processing and shopping cart functionality
Features

# Front Office:

Display products by category

Product details

Add, edit, and remove items from the shopping cart

Order checkout

# Back Office:

Administrator login

User management

Category management (add, edit, delete)

Product management (add, edit, delete)

Order tracking
# Structure du projet
ecommerce-php-natif/
│
├── config/
│   └── config.php            # Connexion PDO + paramètres globaux
│
├── database/
│   └── database.sql          # Script de création des tables + données de test
│
├── assets/                   # Ressources statiques
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── app.js
│   └── images/
│       └── products/         # Images des produits
│
├── includes/                 # Fichiers réutilisables (templates / helpers)
│   ├── header.php
│   ├── footer.php
│   └── functions.php         # Fonctions utilitaires (totaux du panier, etc.)
│
├── front/                    # FRONT OFFICE
│   ├── index.php             # Page d’accueil (liste des catégories / produits)
│   ├── category.php          # Produits par catégorie
│   ├── product.php           # Détails d’un produit
│   ├── cart.php              # Affichage panier
│   ├── add_to_cart.php       # Traitement ajout panier
│   ├── update_cart.php       # MAJ / suppression panier
│   ├── checkout.php          # Formulaire commande + enregistrement
│   └── thank_you.php         # Page confirmation
│
├── admin/                    # BACK OFFICE
│   ├── index.php             # Page de login admin
│   ├── dashboard.php         # Tableau de bord
│   │
│   ├── users/                # Gestion des utilisateurs
│   │   ├── list.php
│   │   ├── create.php
│   │   └── edit.php
│   │
│   ├── categories/           # Gestion des catégories
│   │   ├── list.php
│   │   ├── create.php
│   │   └── edit.php
│   │
│   ├── products/             # Gestion des produits
│   │   ├── list.php
│   │   ├── create.php
│   │   └── edit.php
│   │
│   ├── orders/               # Gestion des commandes
│   │   ├── list.php
│   │   └── details.php
│   │
│   └── logout.php
│
├── .gitignore                # (optionnel) Ignorer /vendor, /node_modules etc.
└── README.md                 # Documentation projet

