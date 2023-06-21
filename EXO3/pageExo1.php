<!-- Partie HEADER -->
<?php 
    include("commons/header.php");
    include("commons/navigation.php");
?>

    <!-- Partie BODY -->
    <body>

        <div class="container">

            <h1>Affichage de table de multiplication :</h1>

            <form class="table" action="#" method="POST" >
                <label for="table">Votre choix :</label>
                <input type="number" id="table" name="table" >
                <button class="btn" type="submit">Ajouter</button>
            </form>

            <?php
                if(isset($_POST["table"])) {
                    echo "<h2>La table de : ".$_POST["table"]. "</h2>";

                    echo "<div class='content'>";
                    for($i = 1; $i <= 10; $i++) {

                        echo $i." * ". $_POST["table"]. " = ". $i * $_POST["table"] . " ; <br/>" ; 
                    }
                    echo "</div>";
 
                }  else {
                    echo "<h5>Saisir une valeur dans le champs ci-dessus</h5> ";
                }          
            ?>

        </div>
    

<!-- la partie FOOTER -->
<?php include("commons/footer.php") ?>