 # 1 - Conteneurisation de l’application 

Afin de conteneuriser et faire tourner l'application en utilisant docker run, Merci de suivre ces étapes :

- Cloner le projet
- Vérifier si vous etes sur la branche main
```sh
git branch
```
- ou sinon
```sh
git checkout main
```
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

 # 3- Version de dev : mise à jour de la plate-forme
 
  Afin de conteneuriser et faire tourner l'application en utilisant la dernière version de MySQL (8.3) et de PHP (8.3) , Merci de suivre ces étapes :
  
- Se placer sur la branche dev
```sh
git checkout dev
```
- Saisir ces commandes :
  
Pour contruire les images de php et la base de données
```sh
docker compose build
```
Pour lancer les contenaires et assurer leur démarrage
```sh
docker compose up -d
```

 # 4- Branche PostgreSQL
  Afin de conteneuriser et faire tourner l'application en utilisant un serveur de base de données PostgreSQL. Merci de suivre ces étapes :
  
- Se placer sur la branche posgresql
```sh
git checkout posgresql
```
- Saisir ces commandes :
  
Pour contruire les images de php et la base de données
```sh
docker compose build
```
Pour lancer les contenaires et assurer leur démarrage
```sh
docker compose up -d
```


# Infos utiles : 
Pour voir les contenaires actifs
```sh
docker ps
```
Pour arreter les contenaires 
```sh
docker-compose down
```
