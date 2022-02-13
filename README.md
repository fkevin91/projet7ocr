# projet 7 (ocr) : BileMo
## Création d'une API Rest pour BileMo, une entreprise de vente de téléphone fictive.

###Environnement utilisé durant le développement

  - symfony : 5.4
  - php : 8.1.1
  - mysql : 8.0.27 - MySQL Community Server - GPL
  
### Informations sur l'API
  - Pour l'obtention du token il faut s'authentifier à l'API via l'envoie des identifiants sur l'URI :
  ````
  /api/login_check
  ````
  - il faudra donc coté client ajouté dans le header le token pour acceder aux informations

### Pour lancer le projet avec docker : 

_ faites un git clone de ce projet,
_ via les commandes entrer dans ce projet

````
cd projet7ocr
````
et lancer la commande suivante
````
docker compose up -d
````
