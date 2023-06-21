<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Mon Site</title>
    </head>

    <body>
        <!-- La navigation -->
        <?php include("navigation.php") ?>
       

        <h1>Formulaire</h1>
        <!-- "action" la page ciblé au soumission des infos du form -->
        <form action="#" class="form" method="POST" >
            <fieldset>
                <legend>Infos personnelles : </legend>
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" required >

                <label for="age">Age :</label>
                <input type="number" name="age" id="age" required>

                <button class="btn" type="submit" >Envoyer</button>
            </fieldset>
           
        </form>

        <?php 
            // Test si l'infos n'est pas vide
            if( isset($_POST["nom"])) {

                echo "<div class='result'>";
                echo "Votre nom est ".$_POST["nom"]. ".<br />" ;
               
                if( isset($_POST["age"])) {

                    echo "Votre age est ".$_POST["age"]. " ans." ;
                }
                echo "</div>";
            }          
        ?>

        <!-- Le Footer -->
        <?php include("footer.php") ?>


        <script src="app.js"></script>
    </body>

</html>