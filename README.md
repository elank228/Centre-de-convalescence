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

Tables relationnelles (patients, chambres, personnel)

Clés primaires et étrangères

Contraintes d’intégrité (NOT NULL, UNIQUE, CHECK)

`Triggers pour :`

Vérifier la disponibilité d’une chambre avant admission

Mettre à jour automatiquement le statut d’une chambre

Enregistrer les logs d’activités

Fonctions stockées pour :

Calculer la durée de séjour

Générer des rapports automatiques

Gérer les procédures d’admission et de sortie

Vues pour simplifier les requêtes complexes

`Backend (PHP)`

Le backend sera développé en PHP et assurera :

La connexion sécurisée à la base de données

Le traitement des formulaires

La gestion des sessions utilisateurs

L’authentification (administrateur, médecin, infirmier)

L’appel des procédures stockées

La gestion des erreurs

Le backend jouera un rôle central dans la logique métier et la communication entre la base de données et l’interface utilisateur.

🔹 Frontend (HTML + CSS)

L’interface utilisateur sera développée en HTML et CSS afin d’offrir :

Une navigation claire et intuitive

Des formulaires dynamiques pour la gestion des patients

Un tableau de bord administratif

Une visualisation des chambres disponibles

Un design responsive adapté aux différents écrans

## 4. Modélisation UML

Le projet inclura :
* Diagramme de cas d’utilisation
* Diagramme de classes
* Diagramme de séquence
* Modèle Entité-Relation (MER)
* Ces schémas permettront de structurer le système avant son implémentation technique et d’assurer une cohérence globale dans le développement.
* Un tableau de bord
