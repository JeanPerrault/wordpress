# Création d'un thème WordPress

## 1. Le répertoire du thème.

Les thèmes de Wordpress sont stockés dans le répertoire `wp-content/themes/`.

Avant de créer les fichiers de votre thème, vous devez créer un répertoire
pour votre thème.
Ex: Mon répertoire s'appelle `my_theme`. 

## 2. Les fichiers de base.

### 2.1. Les fichiers minimum

Un thème doit avoir au moins deux fichiers, créés directement à la racine de 
votre répertoire thème, pour être fonctionnel :

- index.php      _Fichier principal du thème._
- style.css      _Feuille de style principale du thème._

### 2.2. Les fichiers par défaut de Wordpress

Wordpress utilise certain nom de fichier pour fonctionner

- single.php     _Affiche le contenu d'un article._
- archive.php    _Affiche la liste des catégories du site._
- searchform.php _Affiche le formulaire de recherche._
- search.php     _Affiche le résultat de la recherche._
- 404.php        _Page de fichier introuvable._
- comments.php   _Affiche la liste des commentaires._
- footer.php     _Contenu du Pied HTML._
- header.php     _Contenu de l'Entête HTML._
- sidebar.php    _Contenu de la Sidebar HTML._
- page.php       _Affiche (par défaut) le contenu d'une page._

### 2.3. Ajouter des fonctionnalités

Les fonctions du thème et instructions pour Wordpress sont centralisées dans
le fichier :

- functions.php

