<?php 
    include("commons/header.php");
    include("commons/navigation.php");
?>

<div class="container">
    <h1>Calculer la moyenne</h1>

    <form action="#" method="GET">
        <label for="notes">Nombre de notes : </label>
        <input type="number" name="notes" id="notes">
        <button type="submit" class='btn'>Valider</button>
    </form>

    <?php 
        if(isset($_GET["notes"]) && $_GET["notes"] > 0) {
            $nbNotes = (int)$_GET["notes"]; 

            echo "<form action='#' method='POST' >";
            echo "<fieldset>";
            echo "<legend>Calcule moyenne de ".$nbNotes." notes :</legend><br/>";

                for($i = 1; $i <= $nbNotes; $i++) {
                    echo "<label for='nb'".$i."'>Note ".$i." : </label>";
                    echo '<input type="number" name="nb'.$i.'" id="nb'.$i.'" required ><br/>';
                }

            echo "<button type='submit' class='btn1'>Calculer</button>";
            echo "</fieldset>";
            echo "</form>";

            // verification si les "notes" sont renseignés
            if(isset($_POST["nb1"])){
                $result = 0;
                for($i = 1; $i <= $nbNotes; $i++) {
                    $result = $result + $_POST["nb".$i] ;
                }
                echo "<h2>La moyenne de ".$nbNotes." notes est : ".$result / $nbNotes. " !!!";
            }

        } else {
            echo "<h4>Saisir une valeur dans le champs ci-dessus</h4> ";
        } 
        
    ?>
</div>

<?php include("commons/footer.php") ?>