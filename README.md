# TP1

## Membres :

<p>
Madoumier Sylvain - Chef de Projet<br/>
Devoyon Gatien - Dev Back-End<br/>
Liotier Romain - Dev Front-End<br/>
Menu Teddy - Dev Front-End<br/>
</p>

## Premiere Installation FrameWork LARAVEL

### Prérequis

<p>
Vérifier que WSL soit installer sur le poste 
</p>
<p>
En cas de besoin, installer un Ubuntu pour executer les commandes suivantes
</p>

### Installation FrameWork LARAVEL

<p>
Ouvir le terminal WSL ou Ubuntu et entrer la commande suivante :
</p>

```
curl -s https://laravel.build/example-app | bash
```
<p>
La partie "exemple-app" dans l'url peut etre modifier comme ont le souhaite, la seul condition est que le nom ne contienent que des caractères alpha-numerique, des tirets et des underscores.<br/>
Le répertoire de l'application Laravel sera créé dans le répertoire présiser dans la commande prédément executé.
</p>

### Mise en place des containers DOCKER

<p>
Une fois le projet créé avec la commande curl,<br/>
il faut se déplacer dans le dossier du projet afin de lancer l'application Laravel Sail<br/>
Laravel Sail permet grace à une seul ligne de commande d'intéragir avec Docker et de créer les containers avec leur parametres par défault Laravel.
</p>

```
cd exemple-app

./vendor/bin/sail up
```

<p>
Une fois les containers démarrés dans Docker, on peut accèder à l'application directement depuis le navigateur à l'adresse : https://localhost .
</p>