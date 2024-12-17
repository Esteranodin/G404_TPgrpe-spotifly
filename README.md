# Vanilla-TP-LecteurAudio

# 🎶 Lecteur Audio




**Vous avez déjà entendu parler de Spotify ou Deezer ? Moi non !**

J'aimerais créer un lecteur audio révolutionnaire de par sa simplicité, sa rapidité et son design sexy.

C'est un projet où le Javascript est très présent bien qu'il y ait des interactions avec PHP et MySQL.


# 📜 Scénarios utilisateurs minimum requis


## 
  **Graphisme**



* Je visualise l'application sur tous les formats d'écran sans scrollbar horizontale
* L'application utilise tout l'écran de façon optimale sur tous les appareils
* Le design est sobre, moderne, simple et intuitif

## 
   **Lecteur**

* J'accède à un player audio me permettant de lire un titre de musique. La pochette de la chanson ou de l'album m'indique quel titre est actuellement joué. Le nom du titre audio et de l'album s'affichent également.
* J'accède à une liste d'albums ou de playlists me permettant de changer de titre audio au clic
* J'active la lecture en mode aléatoire
* J'active la lecture en fondu : les 5 dernières secondes du titre actuel ont un volume progressivement réduit à 0. Dans le même temps le titre suivant est lu, et les 5 premières secondes passent d'un volume 0 à &lt;dernier volume choisi>
* J'active la lecture en mode répétition

## 
  **Commentaires**

* En tant qu'utilisateur, je peux laisser un commentaire et voir les autres commentaires. Lorsque la chanson change, les commentaires aussi.

## 
  **Administration**

* En tant qu'administrateur, je peux gérer la liste des titres audios et des albums dynamiquement via PhpMyAdmin et en déposant un mp3 dans le dossier approprié


# 🔗Complexité minimale requise


## 
  **Backend**



* Il doit y avoir une base de données de chansons qui est utilisée dynamiquement
* Au moins une relation doit exister entre les chansons et les albums et/ou playlists, etc.

## 
  **Frontend**

* Le site doit être entièrement responsive
* Au format mobile certains éléments disparaissent, changent de taille ou encore de position. Vous devez montrer que vous savez gérer les règles média CSS en fonction de la taille de l'appareil utilisé. Par exemple, sur PC la liste des titres audios est affichée sur la droite, alors que sur mobile il n'y a qu'une seule colonne.
* Le Javascript étant le point central de cette application, il est requis de faire des fonctions et de structurer un minimum votre application.


# 💡 Suggestions



* Gestion des albums
* Gestion des playlists
* .. Quoi d'autre ?! Remplissez cette partie !
