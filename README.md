# GRH
Projet Web
Système de gestion de réservation d’hôtel utilisant

PHP et MySQL

Objectif :
Créer un système de gestion de réservations d’hôtel (GRH) en utilisant PHP et MySQL. Ce
projet tient des registres des réservations, des clients, et des services hôteliers.
Indications:
a) Un client est caractérisé par un nom, un prénom, une CIN, une adresse et un numéro
de téléphone. En plus, un client a le doit d’effectuer une ou plusieurs réservations.
b) Une chambre est caractérisée par son numéro, sa catégorie et son prix.
c) Une chambre peut faire l’objet de plusieurs réservations à des périodes différentes. On
ne peut pas trouver deux réservations pour la même chambre et la même période.
d) L’hôtel possède des chambres de différentes catégories : simple, double ou suite.
e) Le prix de la chambre varie en fonction de sa catégorie.
f) La facturation se calcule sur la base de la catégorie de la chambre réservée et du
nombre de nuitées = date_fin – date_debut.
De plus, le système GRH comporte deux modules à savoir l’administrateur et l’utilisateur.
Module Utilisateur :
1. Accueil: Il s’agit d’une page d’accueil pour les utilisateurs.
2. Galerie: Dans cette section, l’utilisateur peut voir la galerie de l’hôtel.
3. Services: Dans cette section, les utilisateurs peuvent afficher les services fournis par
l’organisation.

4. Inscription: L’utilisateur peut s’inscrire via la page d’inscription en s’enregistrant lui-
même auprès de l’hôtel afin de devenir un client.

5. Connexion: C’est la page de connexion au système (au module utilisateur).
6. Réserver une chambre: Dans cette section, le client peut effectuer une réservation.
7. Mon compte: Après l’inscription, l’utilisateur peut avoir son propre compte où il
peut mettre à jour son profil et afficher les détails de la réservation de la chambre
d’hôtel.


Module Administrateur :
1. Page Index: Dans cette section, l’administrateur peut voir le total des réservations
effectuées ainsi que le nombre total d’utilisateurs (clients) enregistrés.
2. Gestion chambre: Dans cette section, l’administrateur peut gérer les chambres (ajout,
suppression, mise à jour).
3. Catégorie de chambre: Dans cette section, l’administrateur peut gérer la catégorie
(ajouter, supprimer).
4. Réservations effectuées: Dans cette section, l’administrateur peut afficher les détails
des réservations effectuées par les clients.
5. Utilisateurs enregistrés: Dans cette section, l’administrateur peut afficher les détails
des utilisateurs enregistrés.
6. Facture: Dans cette section, l’administrateur affiche les détails des factures des
clients.
