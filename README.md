# MaisonKDR — Restaurant Gastronomique

Site WordPress d'un restaurant gastronomique fictif créé dans le cadre du Laboratoire 2 — Outils Complémentaires à la Programmation Web.

## Informations du projet

- **Groupe** : Groupe 1 — Restaurant & Gastronomie
- **Nom du restaurant** : MaisonDKH
- **Slogan** : Créez, savourez, partagez
- **Site en ligne** : https://restaurant-gastronomie.alwaysdata.net/wordpress
- **Admin WordPress** : https://restaurant-gastronomie.alwaysdata.net/wordpress/wp-admin
- **Dépôt GitHub** : https://github.com/lesliePOO/MaisonKDR
- **Hébergeur** : Alwaysdata (plan gratuit)
- **WordPress** : Version 6.9.4
- **Langue** : Français | Fuseau horaire : UTC+1 (Cameroun)

## Hébergement — Alwaysdata

Le site est hébergé sur **Alwaysdata**, un hébergeur français proposant un plan gratuit avec :
- Sous-domaine gratuit : `restaurant-gastronomie.alwaysdata.net`
- PHP 8.0+, MySQL, Apache
- HTTPS/SSL activé automatiquement
- Accès FTP pour le transfert de fichiers
- Gestionnaire de fichiers en ligne

### Pourquoi Alwaysdata ?
- Plan gratuit suffisant pour un projet universitaire
- HTTPS inclus sans configuration supplémentaire
- Installation WordPress en 1 clic via le Marketplace
- Interface d'administration simple et en français

## Installation complète

### Étape 1 — Créer un compte Alwaysdata
1. Aller sur https://www.alwaysdata.com
2. Cliquer sur "S'inscrire" → choisir le plan gratuit
3. Créer un compte d'hébergement (ex: `restaurant-gastronomie`)
4. Le sous-domaine est automatiquement créé : `restaurant-gastronomie.alwaysdata.net`

### Étape 2 — Installer WordPress
1. Dans le panneau Alwaysdata → "Sites" → "+ Installer une application"
2. Choisir WordPress dans le Marketplace
3. Remplir le formulaire :
   - Adresse : `restaurant-gastronomie.alwaysdata.net/wordpress`
   - Titre : `Restaurant Gastronomie`
   - Email admin : votre email
4. Cliquer "Installer"

### Étape 3 — Configurer WordPress
1. Se connecter à `/wp-admin`
2. Réglages → Général : titre "MaisonDKH", slogan "Créez, savourez, partagez"
3. Réglages → Permaliens → "Titre de la publication"
4. Réglages → Lecture → Page d'accueil statique → sélectionner "ACCUEIL"
5. Activer HTTPS dans les URLs

### Étape 4 — Installer les plugins
Aller dans Extensions → Ajouter une extension et installer :

| Plugin | Rôle |
|---|---|
| Yoast SEO | Référencement naturel |
| Contact Form 7 | Formulaire de réservation |
| WooCommerce | Boutique take-away |
| Custom Post Type UI | CPT Plats |
| Elementor | Constructeur de pages |
| UpdraftPlus | Sauvegardes automatiques |
| Limit Login Attempts Reloaded | Sécurité connexion |

### Étape 5 — Activer le thème enfant
1. Cloner le dépôt : `git clone https://github.com/lesliePOO/MAISONKDR.git`
2. Via FileZilla, se connecter au serveur FTP :
   - Hôte : `ftp-restaurant-gastronomie.alwaysdata.net`
   - Utilisateur : `restaurant-gastronomie`
3. Uploader le dossier `wp-content/themes/maisondkh-child/` vers `/www/wordpress/wp-content/themes/`
4. Dans WordPress → Apparence → Thèmes → Activer **MaisonDKH Child**

### Étape 6 — Configurer WooCommerce
1. Devise : XAF (Franc CFA)
2. Adresse : Douala, Cameroun
3. Mode de paiement : Paiement à la livraison
4. Créer les catégories : Entrées, Plats, Desserts
5. Ajouter minimum 8 produits avec photos et prix

### Étape 7 — Créer le CPT Plats
1. CPT UI → Ajouter un type de publication : `plat`
2. CPT UI → Ajouter une taxonomie : `categorie_plat`
3. Créer les catégories : Entrées, Plats, Desserts
4. Ajouter les plats avec photos depuis la médiathèque

### Étape 8 — Sécurité
1. UpdraftPlus : sauvegarde hebdomadaire fichiers + base de données
2. Limit Login Attempts : protection contre les attaques par force brute
3. HTTPS activé sur toutes les URLs
4. wp-config.php sécurisé par Alwaysdata

## Structure du dépôt
MAISONDKH/
├── wp-content/
│   └── themes/
│       └── maisondkh-child/
│           ├── style.css        # Charte graphique (couleurs, typo)
│           ├── functions.php    # CPT Plat + taxonomies + styles
│           └── page-menu.php    # Template page Menu interactive
├── .gitignore                   # Exclusions Git (wp-config.php, uploads)
├── LICENSE                      # Licence GPL-3.0
└── README.md                    # Ce fichier

## Branches Git

| Branche | Rôle | Responsable |
|---|---|---|
| main | Production | Tous |
| feature/menu | Thème enfant, CPT, Menu, Galerie | Étudiant 2 |
| feature/reservation | SEO, Formulaires, Rapport | Étudiant 3 |
| feature/theme-enfant | Création initiale thème | Étudiant 1 |

## Charte graphique

| Élément | Valeur |
|---|---|
| Couleur principale | Or `#C9A84C` |
| Couleur accent | Vert sauge `#7A9E7E` |
| Fond | Crème `#FAF8F3` |
| Texte | Noir élégant `#1A1A18` |
| Police titres | Cormorant Garamond (serif) |
| Police corps | Josefin Sans |

## Fonctionnalités du site

### 🍽 Page Menu
- Template PHP personnalisé `page-menu.php`
- 6 catégories : Entrées, Plats, Desserts, Boissons Chaudes, Boissons Froides, Vins & Cocktails
- Navigation par onglets interactive
- Photos optimisées pour chaque plat
- Prix en XAF (Franc CFA)

### 🛒 Boutique WooCommerce
- Boutique take-away en ligne
- Minimum 8 produits avec photos
- Paiement à la livraison
- Devise XAF

### 📸 Galerie
- Galerie WordPress native
- Photos des plats du restaurant
- Effet hover au survol

### 🔒 Sécurité
- HTTPS activé
- Limite de tentatives de connexion
- Sauvegardes hebdomadaires automatiques

### 📊 SEO
- Yoast SEO configuré
- Balises meta sur chaque page
- Sitemap XML

## Auteurs

| Membre | Rôle | Branche |
|---|---|---|
| Étudiant 1 (Edwige Kersley) | Installation, hébergement, WooCommerce, sécurité | feature/theme-enfant |
| Étudiant 2 (Richarda Ngankam) | Thème enfant, CPT Plats, Galerie, Menu | feature/menu |
| Étudiant 3 | SEO, Yoast, Contact Form 7, Rapport PDF | feature/reservation |

## Licence

Ce projet est sous licence **GPL-3.0** — voir le fichier LICENSE.