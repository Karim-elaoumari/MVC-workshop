# MVC-workshopL'architecture MVC (Model-View-Controller) est un patron de conception qui sépare les différentes parties d'une application Web en trois composants distincts : le modèle, la vue et le contrôleur.

Le modèle représente les données et les règles de l'application. Il s'occupe de la gestion des données et des opérations qui peuvent être effectuées sur elles.

La vue est ce que l'utilisateur voit. C'est l'interface graphique de l'application, qui affiche les données et permet à l'utilisateur de interagir avec l'application.

Le contrôleur est ce qui se situe entre le modèle et la vue. Il reçoit les requêtes de l'utilisateur, utilise le modèle pour effectuer les opérations demandées et envoie les résultats à la vue pour qu'elle puisse les afficher.

En PHP, voici comment on peut implémenter l'architecture MVC :

Créez un dossier pour chaque composant de l'application (modèle, vue, contrôleur).

Créez un fichier index.php qui sera la porte d'entrée de l'application. C'est ce fichier qui sera appelé par le navigateur de l'utilisateur Ce fichier va charger le contrôleur et appeler la méthode run()

Créez un fichier ExampleController.php qui sera votre contrôleur. Ce fichier va charger le modèle et la vue et les envoyer les données nécessaires.

Créez un fichier Utilisateur.php qui sera votre modèle. Ce fichier va effectuer les opérations de la base de données et retourner les données demandées.

Créez un fichier example.php qui sera votre vue. Ce fichier va afficher les données envoyées par le contrôleur.



Lorsque vous ouvrirez votre navigateur et que vous taperez l'URL de votre application, vous devriez voir une liste des utilisateurs de vot.



TAF:

Faire une documentation sur l'architecture MVC en PHP
Réaliser l'atelier workshopMVCphp
