# Centre-de-convalescence

__Système de Gestion d’un Centre de Convalescence__

## 1. Présentation Générale

* Ce projet consiste à concevoir et développer une application web complète dédiée à la gestion d’un centre de convalescence. L’objectif est de digitaliser l’ensemble des processus administratifs et médicaux afin d’optimiser le suivi des patients, la gestion du personnel soignant, l’organisation des chambres et la planification des soins.

* Le système permettra une gestion centralisée, sécurisée et efficace des données via une base de données relationnelle robuste, un backend dynamique et une interface utilisateur ergonomique.

## 2. Objectifs du Projet

* Gérer les dossiers des patients (admission, suivi médical, sortie)

* Organiser l’attribution des chambres

* Planifier les soins et traitements

* Gérer le personnel médical et administratif

* Assurer l’intégrité et la cohérence des données

* Fournir une interface claire et intuitive

## 3. Architecture Technique

Le projet sera structuré en trois couches principales :

`Base de données (SQL avancé)`

La base de données relationnelle représentée via un schéma UML.

`Fonctionnalités SQL avancées :`

Tables relationnelles (etage, chambres, lit)

Clés primaires et étrangères

Contraintes d’intégrité (NOT NULL, UNIQUE, CHECK)

`Triggers pour :`

Vérifier la disponibilité d’une chambre avant admission

Mettre à jour automatiquement le statut d’une chambre

Fonctions stockées pour :

Calculer la durée de séjour

Générer des rapports automatiques

Gérer les procédures d’admission et de sortie

Vues pour simplifier les requêtes complexes

`Backend (PHP)`

Le backend sera développé en PHP et assurera :

La connexion sécurisée à la base de données

Le traitement des formulaires

L’appel des procédures stockées

La gestion des erreurs

`Frontend (HTML + CSS)`

L’interface utilisateur sera développée en HTML et CSS afin d’offrir :

Une navigation claire et intuitive

Un tableau de bord administratif

Une visualisation des chambres disponibles

## 4. Modélisation UML

<img width="1115" height="215" alt="image" src="https://github.com/user-attachments/assets/5dd8d56d-a5d5-42fb-9d34-bd00ed2d7f1f" />

