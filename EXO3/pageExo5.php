<?php 
    include("commons/header.php");
    include("commons/navigation.php");
?>

<div class="container">

    <h1>Selection du personnage</h1>

    <form action="#" method="POST">

        <label for="persone">Personnage : </label>
        <select name="persone" id="persone">
            <option value="homme" name="homme">Homme</option>
            <option value="femme" name="femme">Femme</option>
        </select>

        <button type="submit" class='btn'>Valider</button>
    </form>

    <?php 
        if(isset($_POST["persone"])){
           
            if($_POST["persone"] === "homme"){
                echo "<img src='./public/images/toto.jpg' alt='toto' />";
            }

            if($_POST["persone"] === "femme"){
                echo "<img src='./public/images/titi.jpg' alt='titi' />";
            }

        } else {
            echo "<h4>Saisir une valeur dans le champs ci-dessus</h4> ";
        }
    ?>



</div>

<?php include("commons/footer.php") ?>