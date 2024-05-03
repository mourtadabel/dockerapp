 # 1 - Conteneurisation de l’application 

   Première étape est d'ajouter mes fichiers Dockerfile dans le dossier:
  - un fichier Dockerfile-sql pour la db
  - fichier Dockerfile pour php


   Ensuite construire l'image Docker pour PHP 
- docker build -t dockerapp_php:latest -f Dockerfile .

  Construire l'image Docker pour la base de données sql 
- docker build -t dockerapp_sql:latest -f Dockerfile-sql .

   Exécuter le conteneur sql
- docker run --name dockerapp_sql -e MYSQL_ROOT_PASSWORD=root -d dockerapp_sql:latest .

   Exécuter le conteneur PHP
- docker run --name dockerapp_php --link dockerapp_sql:db -p 80:80 -d dockerapp_php:latest .


 # 2- Mise en place de Docker Compose : 

   Première étape est d'ajouter un fichier docker-compose.yml
  - ce fichier contient mes différents services php et db
    qui permet à mon contenaire php de communiquer avec le contenaire db
    
   Ensuite contruire mes images 
  - docker compose build
  
   lancer les contenaires et faire tourner l'application
  - docker compose up -d




# Infos utiles : 
on pourra voir mes contenaires avec : 
  - docker ps
on pourra arréter le contenaire avec :
  - docker-compose down 
