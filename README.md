 # 1 - Conteneurisation de l’application 

Afin de conteneuriser et faire tourner l'application en utilisant docker run, Merci de suivre ces étapes :

- Cloner le projet 
- Se placer sur la branche main
- Saisir ces commandes :
  
Pour construire l'image Docker pour PHP 
```sh
docker build -t dockerapp_php:latest -f Dockerfile .
```

Pour construire l'image Docker pour la base de données 
```sh
docker build -t dockerapp_sql:latest -f Dockerfile-sql .    
```

Pour exécuter le conteneur de base de données
```sh
docker run --name dockerapp_sql -e MYSQL_ROOT_PASSWORD=root -d dockerapp_sql:latest  
```

Pour exécuter le conteneur PHP
```sh
docker run --name dockerapp_php --link dockerapp_sql:db -p 80:80 -d dockerapp_php:latest
``` 

 # 2- Mise en place de Docker Compose : 

 Afin de conteneuriser et faire tourner l'application en utilisant docker compose, Merci de saisir ces commandes :
 
Pour contruire les images de php et la base de données
```sh
docker compose build
```
Pour lancer les contenaires et assurer leur démarrage
```sh
docker compose up -d
```




# Infos utiles : 
on pourra voir mes contenaires avec : 
  - docker ps
on pourra arréter le contenaire avec :
  - docker-compose down 
