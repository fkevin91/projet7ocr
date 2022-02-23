# Projet 7 BILEMO

## Telecharger Docker pour votre système d’exploitation 

    _ https://www.docker.com/get-started

Sous window, il est recommandé de télécharger et d’activer WSL2

	_ https://docs.microsoft.com/fr-fr/windows/wsl/install

de configurer votre nom d’utilisateur et votre mot de passe Linux

    _ https://docs.microsoft.com/fr-fr/windows/wsl/setup/environment#set-up-your-linux-username-and-password

et de lancer les commandes docker via la VM Linux.
Pour ce projet utilisant un fichier docker compose, 
vous vous placerez à l'entré du projet et vous lancerez la commande :

    _ “docker compose up” = avec logs
    _ “docker compose up -d” = sans logs (arrière plan) 

## Sans Docker

Si vous ne souhaitez pas utiliser Docker, téléchargez simplement le projet,
rendez vous dans le dossier “Api” et lancer la commande “symfony serve -d”

### Bien sûr vous devez vous assurer d’utiliser les versions suivantes :


````
PHP                 : 8.1.1
````
````
Version du serveur  : 8.0.27 - MySQL Community Server - GPL
````
