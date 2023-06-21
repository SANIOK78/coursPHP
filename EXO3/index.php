        
<?php 
    include("commons/header.php");
    include("commons/navigation.php");
    
    // 1. Démmarage d'une SESSION
    session_start();
    
    // Si on n'a pas de valeur dans la "session" "chiffreAleatoir"
    if( !isset( $_SESSION["chiffreAleatoir"])) {
        // 2. Stockage de la valeur dans la SESSION
        // On va générer un NB aleatoir
        $_SESSION["chiffreAleatoir"] = rand(1, 10);
    }
?>

<div class="container">
    <h1>Trouvez le nombre choisi par l'ordinateur :</h1>   

    <!-- method="POST" va permettre de recolter la valeur depuis la variable posté -->
    <form action="#" method="POST" > 

        <!-- champ qui permet de passer un info caché -->
        <input type="hidden" name="reinit" value="yes" >

        <input type="submit" value="Reinitialiser" >
    </form>

    <form class="table" action="#" method="POST" >
        <label for="chiffre">Votre chiffre (entre 1 et 10) :</label>
        <input type="number" id="chiffre" name="chiffre" ><br>   
        <button class="btn" type="submit">Envoyer</button>
    </form>
    
    <?php
        if(isset($_POST["reinit"]) && $_POST["reinit"] === "yes" ) {
            // 3. Réinitialisation de la variable de SESSION 
            // On va générer un NB aleatoir
            $_SESSION["chiffreAleatoir"] = rand(1, 10);
        }

        // echo "<h4 class='red'>". $_SESSION["chiffreAleatoir"]."<h4>" ;
        
        $nbAleatoir = $_SESSION["chiffreAleatoir"];

        //si "chiffre" est bien saisie ET supperieur a "0"
        if(isset($_POST["chiffre"]) && $_POST["chiffre"] > 0 ) {
            $chiffreSaisi = (int)$_POST["chiffre"]; 

            if( $nbAleatoir === $chiffreSaisi ){
                echo "<h4 class='success'>C'est gagné !!!</h4>";

            } else {
                if( $nbAleatoir > $chiffreSaisi ){
                    echo "<h4 class='warning'>Plus grand</h4>";

                } else {
                    echo "<h4 class='red'>Plus petit (entre 1 et 10)</h4>";
                }
            }
        } else {
            echo "<h4>Saisir une valeur dans le champs ci-dessus</h4> ";
        }        
    ?>
</div>

<?php include("commons/footer.php") ?>

