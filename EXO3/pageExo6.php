<?php 
    include("commons/header.php");
    include("commons/navigation.php");
?>

<div class="container">

    <h1><u>Tableaux </u></h1>
    <h2>Etape 1</h2>
    <p>Realiser untableau contenant les valeurs : 2, 6,12,5,26,34,40,60</p>
    <h2>Etape 2</h2>
    <p>Réaliser une fonction qui va vérifiersi le tab contientque des 
        valeurs paire ou pas
    </p>
    <h2>Etape 3 </h2>
    <p>Afficher un message personnalisé en fonction de resultat</p>
    <hr><hr>


    <?php 
        $tab = [2, 6, 12, 5, 26, 34, 40, 60];
        
        echo "<h2>Resultat : </h2>";

        if(verifSiPaire($tab)) {

            echo "<h2>Le tableau contient que des valeurs paires</h2>";

        } else {
            echo "<h2>Le tableau contient et des valeurs impaires</h2>";
        }

        function verifSiPaire($tableau) {
            for($i = 0; $i < count($tableau); $i++) {

                if($tableau[$i] % 2 !== 0) {
                    return false;
                }                
            }
            return true;
        }
    ?>

</div>

<?php include("commons/footer.php") ?>