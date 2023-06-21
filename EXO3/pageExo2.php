<!-- Partie HEADER -->
<?php 
    include("commons/header.php");
    include("commons/navigation.php");
?>
    <!-- Partie BODY -->
    <body>   
        <div class="container">
            <h1>Affichage d'une pyramide :</h1>
            <form class="table" action="#" method="POST" >
                <label for="hauteur">Hauteur de la pyramide:</label>
                <input type="number" id="hauteur" name="hauteur" >
                <button class="btn" type="submit">Envoyer</button>
            </form>

            <?php
                //si l'hauteur est saisie ET supperieur a "0"
                if(isset($_POST["hauteur"]) && $_POST["hauteur"] > 0 ) {
                    $hauteur = $_POST["hauteur"];

                    echo "<h2>La hauteur est de ".$hauteur. " niveaux</h2>";

                    // Affichage de la piramide, en triangle
                    $txt = ""; 

                    for($i = 0; $i < $hauteur; $i++) {
                        $txt .= "xx";
                        echo $txt."<br/>" ;
                    }

                    for($i = 0; $i < $hauteur-1; $i++) {
                        // suppression des 2 dernieres caracteres de notre string
                        $txt = substr($txt, 0, strlen($txt) - 2);

                        echo $txt."<br/>" ; 
                    }
                } else {
                    echo "<h5>Saisir une valeur dans le champs ci-dessus</h5> ";
                }        
            ?>

        </div>
<!-- la partie FOOTER -->
<?php include("commons/footer.php") ?>

<!--$txt recoit "substring($txt)" d'elle même, 
a partir de "0" = premiere caractere
jusqu'au la taille de "string" strlen($txt) - 2
pour supprimer les 2 dernier caractere   -->
        
