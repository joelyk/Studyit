

<h1> Développement d'une Application Web Laravel pour la Digitalisation des Inscriptions à une Formation
</h1>
<h2> Description du Projet  </h2>

Ce projet consiste à développer une application web en utilisant le framework Laravel, visant à digitaliser le processus d'inscription à une formation spécifique. L'application offrira aux utilisateurs une interface intuitive pour découvrir les détails de la formation, remplir un formulaire d'inscription et fournir un dashboard qui répertorie toutes les personnes inscrites.
Fonctionnalités

L'application présentera les fonctionnalités suivantes :

    Présentation de la Formation : Une page d'accueil permettra aux utilisateurs de découvrir les informations clés concernant la formation. Cela comprendra une description de la formation, le programme, les dates et les frais.

    Formulaire d'Inscription : Les utilisateurs auront la possibilité de remplir un formulaire d'inscription en fournissant leurs coordonnées et d'autres informations requises. Le formulaire sera conçu de manière conviviale pour garantir une expérience utilisateur optimale.

    Dashboard des Inscriptions : Un dashboard sécurisé sera accessible aux administrateurs pour visualiser toutes les personnes inscrites. Les informations sur les participants, telles que les noms, les adresses e-mail et les détails de la formation choisie, seront affichées sous forme de liste ou de tableau.

#Captures d'écran

#Insérez ici des captures d'écran représentatives de l'application, montrant la page d'accueil, le formulaire d'inscription et le dashboard des inscriptions.
Technologies Utilisées

    Backend : Laravel (version X.X.X)
    Frontend : HTML, CSS, JavaScript, Bootstrap 
    Base de Données : MySQL.
    Autres Outils : Composer (gestionnaire de dépendances), Git (contrôle de version)

Installation et Utilisation

    Clonez ce dépôt GitHub sur votre machine locale en utilisant la commande suivante :



git clone https://github.com/joelyk/Studyit.git

Installez les dépendances requises en exécutant la commande suivante :



cd studyit
composer install

Configurez votre base de données en copiant le fichier .env.example en .env et en y spécifiant les informations de connexion à votre base de données.

Générez la clé d'application en utilisant la commande suivante :



php artisan key:generate

Migrez la base de données en utilisant la commande suivante :

php artisan migrate

Lancez le serveur de développement en exécutant la commande :

php artisan serve

Accédez à l'application depuis votre navigateur en vous rendant sur l'adresse locale :



    http://localhost:8000

Contributeurs

   ---

Remarques Importantes

    Cette application est développée dans un but éducatif et peut être sujette à des améliorations et des mises à jour régulières.
    N'hésitez pas à ouvrir une issue pour signaler un bogue ou proposer une nouvelle fonctionnalité.
