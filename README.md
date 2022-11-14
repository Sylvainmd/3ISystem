# TP1

## Membres :


Madoumier Sylvain - Chef de Projet<br/>
Devoyon Gatien - Dev Back-End<br/>
Liotier Romain - Dev Front-End<br/>
Menu Teddy - Dev Front-End<br/>


## Premiere Installation FrameWork LARAVEL

### Prérequis


Vérifier que WSL soit installer sur le poste 

En cas de besoin, installer un Ubuntu pour executer les commandes suivantes


### Installation FrameWork LARAVEL


Ouvir le terminal WSL ou Ubuntu et entrer la commande suivante :


```
curl -s https://laravel.build/example-app | bash
```

La partie "exemple-app" dans l'url peut etre modifier comme ont le souhaite, la seul condition est que le nom ne contienent que des caractères alpha-numerique, des tirets et des underscores.<br/>
Le répertoire de l'application Laravel sera créé dans le répertoire présiser dans la commande prédément executé.


### Mise en place des containers DOCKER


Une fois le projet créé avec la commande curl,
il faut se déplacer dans le dossier du projet afin de lancer l'application Laravel Sail<br/>
Laravel Sail permet grace à une seul ligne de commande d'intéragir avec Docker et de créer les containers avec leur parametres par défault Laravel.


```
cd exemple-app

./vendor/bin/sail up
```


Une fois les containers démarrés dans Docker, on peut accèder à l'application directement depuis le navigateur à l'adresse : https://localhost .



### Gestion du projet via Git

Pour effectuer un travail colaboratif sur le projet 3ISystem, nous allons utiliser la fonction de dépot distant de GitHub.
Afin de permettre cette utilisation plusieurs étapes sont à suivre:

* 1: Création du répertoire GitHub
    La procédure de création d'un répertoire GitHub est la suivante :
     - 
* 2: Envoie du projet dans la zone tampon (Commit)

* 3: Envoie du projet vers le depot distant Github

* 4: Clonage du projet (pour les collaborateurs)

* 6: Création des branch du projet pour les differentes équipes de travail

* 5: Mise à jour du projet sur GitHub (Push - Pull)