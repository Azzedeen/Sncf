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
            
        $reponse= $bdd->query("SELECT * FROM ag");
            
        $resultat = $reponse->fetch();
        echo $resultat['ID'.'NOM'.'PRENOM'];
        ?>


        
    </body>
</html>



