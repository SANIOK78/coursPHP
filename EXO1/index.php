

<?php
    // Déclaration d'une Constante en PHP
    define ("SYMBOL", " * ");

    // Tableaux associatifs
    $joueur1 = [
        "nom" => "Tintin",
        "age" => 21,
        "estUnHomme" => true
    ];

    $joueur2 = [
        "nom" => "Alice",
        "age" => 18,
        "estUnHomme" => false
    ];

    $joueur3 = [
        "nom" => [
            "Nom" => "Legrande",
            "Prenom" => "Estelle"],
        "age" => 18,
        "estUnHomme" => false
    ];

    // function pour afficher un tableau
    function affichTableau($tab) {

        foreach($tab as $indice =>  $value) {           
            // Test pour voir si la valeur n'est pas un tableau
            if( !is_array($value)) {
                echo $indice. " : " .$value."<br /> ";
            } else {
                // on peut aussi rappeler de manier recurssive 
                // la même function
                affichTableau($value);
            }           
        };
    }

    separation(SYMBOL);
    affichTableau($joueur1);
    separation(SYMBOL);
    affichTableau($joueur2);
    separation(SYMBOL);
    affichTableau($joueur3);

    function afficherJoueur ($nom, $age, $homme){
        echo "Nom du joueur : ".$nom;
        echo "<br />";
        echo "Age du joueur : " .$age; 
        echo "<br />";

        // On reasigne une valeur a la variable "$age"
        $age = $age + 1;
        echo $nom." aura bientôt ".$age." ans !";
        echo "<br />";

        if($homme === true ) { 
            echo "Le joueur ".$nom. " est un homme ";  

        } else {
            echo "C'est une femme "; 
        }       
    };

    function afficherJoueurPlusAgée($a, $nomA, $b, $nomB) {
        if($a > $b ){
            echo "Le joueur ".$nomA." est plus agée" ;
        } else {
            echo "Le joueur ".$nomB." est plus agée" ;
        }
    } ;

    // separation avec boucle "WHILE"
    function separation($trait){
        echo '<br />';

        for($i = 0; $i < 40; $i = $i + 2) {
            echo $trait;
        }      
        echo '<br />';
    };
    
    function calculeDiferanceAge($a, $b) {
        $resultat = $a - $b;
        // Si "age1" est inferieur a "age2", on passe une condition pour renverser
        if( $resultat < 0 ) {
            $resultat = -$resultat;
        }
        echo "La diferance d'ages entre les joueurs est de : ".$resultat." ans.";
    };

    // si majeur
    function siMajeur ($age) {
        switch($age ) {
            case 16 : 
            case 17 : echo "Pour ".$age." ans, vous etes mineur";
            separation(SYMBOL);
            break;
            case 19 :
            case 20 :
            case 21 : echo "Pour ".$age." ans, vous etes majeur";
            break;
            default: echo "cas pas traité ";
        }
    }

    separation(SYMBOL);
    afficherJoueur($joueur1["nom"], $joueur1["age"], $joueur1["estUnHomme"]);

    separation(SYMBOL);
    afficherJoueur($joueur2["nom"], $joueur2["age"], $joueur2["estUnHomme"]);

    separation(SYMBOL);
    siMajeur( $joueur1["age"]);
    separation(SYMBOL);
    siMajeur( $joueur2["age"]);
    separation(SYMBOL);
    afficherJoueurPlusAgée($joueur1["age"], $joueur1["nom"], $joueur2["age"], $joueur2["nom"]);

    separation(SYMBOL);
    calculeDiferanceAge($joueur1["age"], $joueur2["age"] );
    separation(SYMBOL);

?> 






 
