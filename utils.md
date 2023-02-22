1-  composer init 
        Package name (<vendor>/<name>) [cisco/learn_poo]: salima/dwwm 
        Description []: Apprendre ma poo en php
        Author [Salima <salimazahzah@hotmail.fr>, n to skip]: 
        Minimum Stability []: 
        Package Type (e.g. library, project, metapackage, composer-plugin) []: project
        License []: MIT
        yes 

2- dans composer.json modifier le psr-4": {
            "App\\": "src/"

3- en ligne de commande mettre  composer du -o

4- git init

5- git add .

6- git commit -m"Initialisation du projet"

7- git branch -M main

8- git push origin main
git remote add origin https://github.com/Salimaz26/zinc.git
git push -u origin main


Pour vider les caches avant git add . : 
git rm -rf --cached .

Pour avoir l'index en commande: 
php -S localhost:8000 -d display_errors=1 -t public