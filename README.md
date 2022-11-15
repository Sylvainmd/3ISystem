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

* 1 - Création du répertoire GitHub<br/>
    La procédure de création d'un répertoire GitHub est la suivante :<br/>
        - Création d'un compte GitHub (si vous n'en possedez pas deja un)<br/>
        - Allez dans votre profil > Your Repositories > New<br/>
        - Dans "Repository name" attribuer un nom à votre depot (celui-ci deffinira le nom de votre projet), vous pouvez également ajouter une description mais cela n'est pas obligatoire.<br/>
        - Vous pouvez ensuite choisir entre mettre le projet à disposition de tout le monde en selectionnant "Public" ou de le garder pour vous en selecionnant "Private".<br/>
        - Concernant l'ajout d'un fichier README et du .gitignore, etant donner que nous allons utilisez le framework Laravel ces fichier sont deja présent, il n'est donc pas utile de les ajouter lors de la création de notre dépot.<br/>

* 2 - Démarrage du projet <br/>
    Une fois le framework Laravel récupérer et le dépot distant Git créer nous devons tout d'abord initialiser le projet :
    ```
    git init
    ```

    Une fois le projet initaliser nous pouvons effectuer notre premier commit :
    ```
    git add -A
    git commit -m "First Commit"
    ```

* 3 - Envoie du projet vers le depot distant Github<br/>

    Après avoir effectuer notre premier commit nous allons ensuite envoyer notre projet sur le depot distant Git :
    ```
    git remote add origin https://github.com/nom_utilisateur_Git/nom_repository
    git branch -M main
    git push -u origin main
    ```
* 4 - Clonage du projet (pour les collaborateurs)<br/>

    Quand le projet est envoyé vers le depot distant les collaborateurs peuvent maintenant le cloner afin de pouvoir faire leur modification :

    _A faire depuis le terminal GitBash en bas de VSCode_
    ```
    cd Desktop/
    git clone https://github.com/nom_utilisateur_Git/nom_repository.git
    ```

* 6 - Création des branch du projet pour les differentes équipes de travail<br/>
    Afin de facilité le travail collaboratif sur un meme projet, il est conseillé d'utiliser la fonction de "branch" qui permet de créer des projet parrallèlement afin de modifier notre code et nos fichier sans impacter la branche principale.

    Création d'une nouvelle branche :
    ```
    git branch nom
    ```

    Visualisé les branches éxistantes :
    ```
    git branch
    ```

    Changer de branche :
    ```
    git checkout nom_branch
    ```

    Synchroniser les données entre les branches:
    ```
    git merge nom_branch
    ```
    _Le nom de la branche que l'on indique dans la commande merge est celle d'ou on veut récuperer les données_

    Dans notre cas, nous avons créer deux branches secondaires, une pour la partie BackEnd et une autre pour la partie FrontEnd.

* 5 - Mise à jour du projet sur GitHub (Push - Pull)<br/>

    Quand le projet est cloner la premiere fois, il n'est pas mis a jour automatiquement quand une modification est apportée dans le dépot distant.
    Pour mettre à jour notre projet en local avec les modifications du dépot Git il faut executer la commande :
    ```
    git pull
    ```

    A l'inverse pour envoyer nos modifications vers le depot git il faut, après avoir executer les commande ```git add nom_fichier``` et ```git commit``` :
    ```
    git push
    ```

    Pour lier une branche a notre depot Git afin de pouvoir ensuite la push :
    
    ```
    git push --set-upstream origin nom_branch
    ```

* 6 - Utilisation des Tags de versions

    L'utilisation des tags permet de marquer les numéros de versions sur les commits.

    ```
    git tag v1.0.0
    ```

    Grace au -a ont indique qu'il s'agit d'un tag annoté avec l'utilisation d'un -m

    Pour lister les tags existant :
    ```
    git tag --list
    ```

    Afficher les detailles d'un tag :
    ```
    git show v1.0.0
    ```

* 7 - Revenir à une version précédente

    Pour revenir à une version précédente deux option s'offre à nous :<br/>
        - Le ```git reset``` pour réinitialiser un commit précédent dans le référenciel Git<br/>
        - Le ```git revert``` pour revenir à un commit précédent dans le référenciel Git<br/>

    
    _Source Documentaire : https://www.delftstack.com/fr/howto/git/git-go-back-to-previous-commit/ ._



## Partie Back-Office

Pour commencer la partie BackEnd, l'équipe Back-Office dois modifier trois types de fichiers, afin de faire correspondre le projet Laravel avec le schema de BDD précedant :
* Les models (app/Models)
* Les fichier de migrations (app/Http/migration)
* Et les controllers (app/Http/Controllers)

_Les models sont créés avec les fichier de migration et controllers_

Pour gérer l'accès au Back-Office nous avons utiliser la solution Breeze

### Modification apportées au projet

    Création de 3 table dans la BDD : Comment, Reply, Task <br/>
    Modifiaction des liaisons entre le projet et les BDD pour faire correspondre les commandes avec les nouvelles Tables. <br/>
    Toutes ces modifications ont pour but de créer une otpion de login sur notre site. <br/>
    _Malheursement, a cause de problèmes non résoluts, cette option n'est pas encore disponible_


## Partie Front-End