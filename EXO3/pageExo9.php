<?php 
    include("commons/header.php");
    include("commons/navigation.php");

    // Tableaux associatifs
    $katy = [
        "Nom" => "Katy",
        "Img" => "titi.jpg",
        "Age" => 22,
        "Sexe" => false,
        "Force" => 3,
        "Agilité" => 6
    ];
    $pedro = [
        "Nom" => "Pedro",
        "Img" => "luke.jpg",
        "Age" => 27, 
        "Sexe" => true, 
        "Force" => 5, 
        "Agilité" => 4
    ];
    $toto = [
        "Nom" => "Toto", 
        "Img" => "toto.jpg",
        "Age" => 33, 
        "Sexe" => true,  
        "Force" => 7, 
        "Agilité" => 2
    ];

    $persos = [$katy, $pedro, $toto];
?>

<div class="container">
    <h1>Nos personnages</h1>
    <div class="items">

        <?php 
            foreach($persos as $hero){

                echo "<div class='blocInfos'> ";
                    echo "<img src='./public/images/".$hero['Img']."'. alt='".$hero['Nom']."' />";

                    echo "<div>";
                        affichePersonage($hero);
                    echo "</div>";
                echo "</div>";           
            } 
            
            function affichePersonage($tab) {                
                // boucle FOREACH(): a chaque tour on met l'info dans $value
                foreach($tab as $index => $value ){

                    // on n'a pas besoin d'afficher le champs "Sexe" et "Img"
                    if( $index !== "Img" && $index !== "Sexe" ) {

                        echo "<b>".$index."</b> : ". $value."<br />";
                    }

                    if($index === "Sexe") {
                        echo "<b>Sexe</b> : ";
                        
                        if($value){
                            echo "Homme<br />";
                        } else {
                            echo "Femme<br />";
                        }
                    }
                }
            } 
        ?>
    </div>
</div>

<?php include("commons/footer.php") ?>

