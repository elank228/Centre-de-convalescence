# TP – Centre de convalescence

`L’application informatique à créer devra faciliter l’étude du plan d’occupation des lits d’un centre de convalescence. Un tableau de bord (informations concentrées sur un seul écran) doit permettre de :`

savoir comment attribuer un lit à un nouveau convalescent

effectuer des statistiques sur l’occupation des lits..

aider au service des repas

__Le centre de convalescence possède NE(=3) étages.__

Nous supposons ici que les convalescents sont répartis dans les chambres selon que ce sont des enfants, des adultes femmes ou des adultes hommes.

Il y a donc 4 classes de chambres : les chambres d’enfants, de femmes, d’hommes et les chambres vides.

L’étage 0 est réservé aux enfants. Les étages 1 et 2 accueillent indifféremment des hommes et des femmes.

__Chaque étage comporte 15 chambres réparties comme suit :__

* Le rez de chaussée comprend 10 chambres à deux lits et 5 chambres à 3 lits.

* Les 1er étage et 2ème étage comprend 10 chambres individuelles et 5 chambres doubles.

* Une chambre peut être dans l’un des trois états suivants :

* Vide : tous les lits sont vides (Nblits=0)

* Pleine : tous les lits sont pleins (Nblits=NL)

* Partiellement occupée : elle comporte au moins un lit occupé et au moins un lit vide (1<= Nblits <NL)

* Une chambre pleine ou partiellement occupée ne comporte que des convalescents de même catégorie. Ainsi, un nouveau convalescent, un enfant par exemple, ne peut être placé que dans une chambre vide ou dans une chambre partiellement occupée par des enfants.

## Lors de l’arrivée d’un convalescent, on privilégie :

`Le placement en chambre partiellement occupée dans le cas d’un enfant`

`Le placement en chambre vide dans le cas d’un adulte de préférence à l’étage 1 s’il s’agit d’une femme, et à l’étage 2 s’il s’agit d’un homme.`

Description de la structure d’information retenue

La gestion envisagée s’appuie sur les conventions d’informations suivantes :

Classes des chambres : les quatres classes possibles sont codées à l’aide d’entiers :
* 1 : enfant
* 2 : femme
* 3 : homme
* 4 : vide

`Ensemble des chambres : Une chambre est caractérisée par son numéro d’étage, sa classe et le nombre de lits occupés, Nblits, qu’elle comporte. NC désigne le nombre de chambres que comportent le centre de soins.`

# Travail demandé :

Vous devez créer un tableau de bord pour un centre de convalescence présentant les taux d’occupation du centre, ainsi que la répartition des chambres selon la classe, selon son taux de remplissage.

# De plus, vous devrez gérer :

l’arrivée, ainsi que le départ d’un convalescent. (uniquement arrivée ou départ sans identifier la personne)
Et l’application devra afficher le nombre de présents pour le service des repas.

## Conseil n°1

Ecrire une fonction stockée Taux_Remplissage renvoyant le taux de remplissage du centre de soins, c’est-à-dire le rapport entre le nombre de lits occupés et le nombre total de lits.
A décliner en Taux_Remplissage_Etage ou Taux_Remplissage_Classe

## Conseil n° 2 – Départ d’un convalescent

Gérer le départ d’un convalescent à partir du numéro de chambre de la personne quittant le centre de soins et mettre à jour la collection CHAMBRES afin d’indiquer qu’un lit est devenu libre. Prévoir la mise à jour de la table chambre à l’aide d’un trigger !

## Conseil n° 3 – Arrivée d’un convalescent

On étudie maintenant la question d’attribution d’un lit à un nouveau convalescent. On doit respecter les contraintes imposées par le centre de convalescence :
On cherche à attribuer un lit dans une chambre partiellement occupée de même classe que le nouveau convalescent en priorité.
Si deux ou plusieurs chambres de la classe considérée sont partiellement occupées, on attribuera un lit dans l’une des chambres ayant le maximum de lits occupés.
L’attribution d’un lit est impossible si les deux conditions suivantes sont vérifiées simultanément :
La chambre est pleine : tous les lits des chambres de la classe du convalescent sont occupés.
Et Il n’y a plus de chambres vides
Prévoir une fonction stockée `Recherche` recevant les paramètres Classe et renvoyant le NuméroChambre attribuée ou zéro en cas d’impossibilité.
Prévoir un trigger Arrivée permettant de mettre à jour la table CHAMBRE si cela est possible.

## Conseil n° 4 Imprimé pour le service des repas.

Il s’agit d’établir une liste de relevés d’étages, par ordre croissant de n° d’étage. Pour chaque étage, le nombre de repas à servir. Un visuel clair (indicateurs de couleur) doit permettre de repérer les chambres non vides avec leur nombre d’occupants pour faciliter la distribution des repas.
