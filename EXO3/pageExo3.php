<!-- Partie HEADER -->
<?php 
    include("commons/header.php");
    include("commons/navigation.php");
?>
    <!-- Partie BODY -->
    <body>   
        <div class="container">
            <h1>Cercle - Périmètre et Aire :</h1>

            <form class="table" action="#" method="POST" >
                <label for="rayon">Rayon d'un cercle (en cm):</label>
                <input type="number" id="rayon" name="rayon" ><br>

                <label for="perimetre">Périmètre : </label>
                <input type="checkbox" name="perimetre" id="perimetre" checked ><br>

                <label for="aire">Aire : </label>
                <input type="checkbox" name="aire" id="aire" checked ><br/>

                <button class="btn" type="submit">Envoyer</button>
            </form>
           
            <?php
                //si rayon est bien saisie ET supperieur a "0"
                if(isset($_POST["rayon"]) && $_POST["rayon"] > 0 ) {
                    
                    $rayon = $_POST["rayon"];
                    echo " <h2>Resultats :</h2>";

                    // vérif si "perimètre et aire sont cochés
                    echo "<p>";
                    if(isset($_POST["perimetre"])) {
                        echo "Périmètre d'un cercle de rayon <b>".$rayon."</b> cm est : <b>".($rayon * 2 * pi())."</b> cm<br/>";
                        echo "<br/>";
                    }
                    
                    if(isset($_POST["aire"])) {
                        echo "Aire d'un cercle de rayon <b>".$rayon."</b> cm est : <b>".($rayon * $rayon * pi())."</b> cm²<br/>";
                    }
                    echo "</p>";
                    
                } else {
                    echo "<h4>Saisir une valeur dans le champs ci-dessus</h4> ";
                }        
            ?>
        </div>
<!-- la partie FOOTER -->
<?php include("commons/footer.php") ?>