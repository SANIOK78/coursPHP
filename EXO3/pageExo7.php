<?php 
    include("commons/header.php");
    include("commons/navigation.php");

    $katy = ["Katy", 22, "femme", 3, 6];
    $pedro = ["Pedro", 27, "homme", 5, 4];
    $toto = ["Toto", 33, "homme", 7, 2];
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
                echo "<div>";
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
            echo "<h5>Nom : ".$tab[0]."</h5>";
            echo "<h5>Age : ".$tab[1]." ans .</h5>";
            echo "<h5>Sexe : ".$tab[2]."</h5>";
            echo "<h5>Force : ".$tab[3]."</h5>";
            echo "<h5>Agilité : ".$tab[4]."</h5>";
        }    
    ?>
</div>

<?php include("commons/footer.php") ?>