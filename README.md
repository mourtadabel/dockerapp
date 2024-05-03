 # 1 - Conteneurisation de l’application 

   Ajouter mes fichiers Dockerfile dans le dossier:
  - un fichier Dockerfile-sql pour l'image db
  - fichier Dockerfile pour l'image php

   Construire l'image Docker pour PHP 
- docker build -t dockerapp_php:latest -f Dockerfile

  Construire l'image Docker pour la base de données db 
- docker build -t dockerapp_db:latest -f Dockerfile-sql

   Exécuter le conteneur db
- docker run --name dockerapp_db -e MYSQL_ROOT_PASSWORD=root -d dockerapp_sql:latest

   Exécuter le conteneur PHP
- docker run --name dockerapp_php --link dockerapp_sql:db -p 80:80 -d dockerapp_php:latest


 # 2- Mise en place de Docker Compose : 

   ajouter un fichier docker-compose.yml
  - ce fichier contient mes différents services php et db
    qui permet à mon contenaire php de communiquer avec le contenaire db
    
   contruire mes images 
  - docker compose build
  
   lancer les contenaires et faire tourner l'application
  - docker compose up -d




# Infos utiles : 
on pourra voir mes contenaires avec : 
  - docker ps
on pourra arréter le contenaire avec :
  - docker-compose down 
