# Projet WordPress - Site E-commerce pour Articles de Sport et Fitness

## **Introduction**
Ce projet vise à développer un site e-commerce dédié à la vente d'articles de sport et de fitness en utilisant WordPress. Grâce à l'intégration de WooCommerce et d'autres plugins, le site offre une expérience utilisateur moderne, avec des fonctionnalités comme le tri des produits, des fiches produits détaillées et un système de recherche avancée.

---

## **Table des matières**
1. [Introduction](#introduction)
2. [Installation de WordPress](#installation-de-wordpress)
   - Installation de XAMPP
   - Mise en place de la base de données MySQL
   - Installation de WordPress
3. [Installation de Plugins](#installation-de-plugins)
   - WooCommerce
   - TI WooCommerce Wishlist
   - Contact Form 7
   - Elementor
4. [Configuration et Personnalisation](#configuration-et-personnalisation)
   - Création de catégories et sous-catégories
   - Intégration de produits
   - Navigation et recherche
5. [Fichier de base de données](#fichier-de-base-de-données)

---

## **Installation de WordPress**

### Étape 1 : Téléchargement et Installation de XAMPP
1. Téléchargez XAMPP depuis [Apache Friends](https://www.apachefriends.org/).
2. Installez XAMPP et démarrez les modules **Apache** et **MySQL**.

### Étape 2 : Mise en place de la base de données MySQL
1. Accédez à phpMyAdmin via [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Créez une base de données nommée `articles_sport_fitness`.

### Étape 3 : Téléchargement et Installation de WordPress
1. Téléchargez WordPress depuis [WordPress.org](https://wordpress.org/).
2. Décompressez les fichiers dans le répertoire `htdocs` de XAMPP.
3. Configurez le fichier `wp-config.php` pour connecter la base de données.
4. Lancez l'installation via [http://localhost/nom_du_projet](http://localhost/nom_du_projet).

---

## **Installation de Plugins**

### WooCommerce
- Accédez à **Extensions** > **Ajouter**.
- Recherchez et installez **WooCommerce**.
- Configurez les paramètres (paiements, livraisons, devises, etc.).

### TI WooCommerce Wishlist
- Installez ce plugin pour permettre aux utilisateurs de créer des listes de souhaits.
- Configurez les options en fonction des besoins du site.

### Contact Form 7
- Créez des formulaires de contact pour permettre aux visiteurs de poser des questions.

### Elementor
- Utilisez **Elementor** pour créer et personnaliser des pages telles que la page d’accueil, les pages produit et le footer.

## Ingenidev, Maroc - Changer le symbole de la devise MAD
- Par défaut, WooCommerce utilise le symbole de la devise Dirham marocain (MAD) sous "د.م". Ce plugin Ingenidev le remplace par "MAD".

---

## **Configuration et Personnalisation**

### Création de catégories et sous-catégories
- Exemples de catégories principales :
  - **Fitness** : Haltères, tapis de yoga, bandes de résistance.
  - **Sports d'équipe** : Ballons, protège-tibias.
  - **Accessoires de sport** : Sacs, gourdes, montres connectées.

### Intégration de produits
- Ajoutez au moins 15 produits répartis dans différentes catégories.
- Pour chaque produit :
  - Ajoutez une image de haute qualité.
  - Fournissez une description complète et engageante.
  - Définissez les attributs et variations (ex : tailles, couleurs).

### Navigation et recherche
- Configurez un menu clair et intuitif.
- Ajoutez des filtres par catégorie, prix et popularité.
- Permettez le tri des produits (prix croissant/décroissant, popularité, etc.).

---

## **Fichier de base de données**

1. Accédez à phpMyAdmin via [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Sélectionnez la base de données `projectbd`.
3. Cliquez sur l'onglet **Importer**.
4. Importez le fichier SQL fourni (`projectbd.sql`).
5. Vérifiez que les tables et les données ont été correctement importées.

---

## **Conclusion**
Ce projet propose une plateforme e-commerce robuste et moderne, adaptée à la vente d'articles de sport et de fitness. Vous pouvez personnaliser davantage le site pour répondre à des besoins spécifiques ou intégrer des fonctionnalités supplémentaires.
