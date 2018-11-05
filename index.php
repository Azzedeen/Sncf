<html>
    <head>
        <meta charset="utf-8" />
        <title>SNCF</title>
        <h1>Liste des activités</h1>
    </head>
    <body>
    <select name="activite"  onchange="change(this.value)">
    <option value="0"></option>
    <option value="ten">Tennis</option>
    <option value="2">Jardinage</option>
    <option value="3">Football</option>
    </select>
    <br>
    <br>
        Les formations 
        <br>
        <input type="radio" name="info" value="A">A
        <br>
        <input type="radio" name="info" value="B">B
        <br>
        <input type="radio" name="info" value="C">C
        <br>
        <br>

        <?php
        
        $bdd = new PDO('mysql:host=localhost;dbname=sncf;charset=utf8', 'root', '');
                    
        $reponse= $bdd->query("SELECT * FROM ag");
        
        $resultat = $reponse->fetch();
        
        ?>

            <table width="80%" border="1">
            <tr>
            <td> Checkbox </td>
            <td>ID</td>
            <td>NOM</td>
            <td>PRENOM</td>  
            </tr>
            <?php  while($donnees=$reponse->fetch()) {  ?>
            <tr> 
            <td><input type="checkbox"  value="X"> </td>
            <td> <?php echo ($donnees['ID']);?> </td>
            <td> <?php echo($donnees['NOM']); ?> </td>
            <td> <?php echo ($donnees['PRENOM']);?> </td>
            </tr>

            <?php } ?>

            
        
            </table>

    
    </body>
</html>