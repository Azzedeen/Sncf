<html>
    <head>
        <meta charset="utf-8" />
        <title>SNCF</title>
        <h1>Liste des activités</h1>
    </head>
    <body>
        <FORM>
        <SELECT name="nom" size="1">
        <OPTION>
        <OPTION>Tennis
        <OPTION>Football
        <OPTION>Basketball
        <OPTION>Boxe
        </SELECT>
        </FORM>
        <form method="post">
        Les formations 
        <br>
        <input type="radio" name="info" value="A">A
        <br>
        <input type="radio" name="info" value="B">B
        <br>
        <input type="radio" name="info" value="C">C
        <br>

        <?php
        $bdd = new PDO('mysql:host=localhost;dbname=sncf;charset=utf8', 'root', '');
            
        //$reponse= $bdd->query("SELECT * FROM sncf");

        // Tu t'es trompé sur le nom de la table
        $reponse= $bdd->query("SELECT * FROM agent");
            
        $resultat = $reponse->fetch();

        // Cette ligne ne veut rien dire
        //echo $resultat['CODE'.'NOM'.'PRENOM'];

        // Pour visualiser ce qu'il y a dans $resultat
        echo var_dump($resultat);

        // Affiche du code + nom + prénom
        echo $resultat['code']. " ". $resultat['nom']. " ".$resultat['prenom']
        ?>


        
    </body>
</html>



