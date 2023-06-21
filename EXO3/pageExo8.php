<?php 
    include("commons/header.php");
    include("commons/navigation.php");

    // Tableaux associatifs
    $katy = [
        "Nom" => "Katy",
        "Age" => 22,
        "Sexe" => "Femme",
        "Force" => 3,
        "Agilité" => 6
    ];
    $pedro = [
        "Nome" => "Pedro",
        "Age" => 27, 
        "Sexe" => "Homme", 
        "Force" => 5, 
        "Agilité" => 4
    ];
    $toto = [
        "Nome" => "Toto", 
        "Age" => 33, 
        "Sexe" => "Homme",  
        "Force" => 7, 
        "Agilité" => 2
    ];
?>

<div class="container">
    <h1><u>Selection du personnage</u></h1>
    <form action="#" method="POST">
        <label for="persone">Personnage : </label>

        <select name="persone" id="persone" onChange = "submit()" >

            <option value="katy" <?php if(isset($_POST["persone"]) && $_POST["persone"] === "katy") echo "selected" ?> >
                Katy
            </option>
            <option value="pedro" <?php if(isset($_POST["persone"]) && $_POST["persone"] === "pedro") echo "selected" ?> >
                Pedro
            </option>
            <option value="toto" <?php if(isset($_POST["persone"]) && $_POST["persone"] === "toto") echo "selected" ?> >
                Toto
            </option>

        </select>
    </form>
    <h2>Personage : </h2>

    <?php 
    
        if( !isset($_POST["persone"]) || $_POST["persone"] === "katy") {

            echo "<div class='gauche'> ";
                echo "<img src='./public/images/titi.jpg' alt='titi' />";
                echo "<div class='blokInfo'>";
                    affichePersonage($katy);
                echo "</div>";

            echo "</div>";

        } else if($_POST["persone"] === "pedro") {
            echo "<div class='gauche'> ";
                echo "<img src='./public/images/luke.jpg' alt='luke' />";
                echo "<div>";
                    affichePersonage($pedro);
                echo "</div>";
            echo "</div>";

        } else if($_POST["persone"] === "toto") {
            echo "<div class='gauche'> ";
                echo "<img src='./public/images/toto.jpg' alt='toto' />";
                echo "<div>";
                    affichePersonage($toto);
                echo "</div>";
            echo "</div>";             
        }      
        
        function affichePersonage($tab) {
            
            // boucle FOREACH(): a chaque tour on met l'info dans $value
            foreach($tab as $index => $value ){

                echo "<b>".$index."</b> : ". $value."<br />";
            }
        }    
    ?>
</div>

<?php include("commons/footer.php") ?>
