<?php 
    $nom_produit = "T-shirt simple";
    $couleur = "Blanc";
    $prix = 10.50;
    $disponible = 'true';
    $quantite=2;
    $cout=$prix*3;
    $couttotal=$prix*$quantite;
    
    // Phrase 1//
    echo "<h3>Le nom de produit est {$nom_produit}.</h3>";

    // Phrase 2//

    echo "<h3> Il reste {$quantite} produit en stock.</h3>";

    // Phrase 3//

    echo "<h3>Le produit {$nom_produit} est de couleur {$couleur}.</h3>";

    //Opération Simple//

    //Phrase 1// 
    echo "<h4> Acheter 3 produits couterait {$cout}.</h4>";

    //Phrase 2//
    echo"<h4> Acheter la totalité des produits disponibles couterait {$couttotal}.</h4>";

    //Phrase 3//
    echo "<h4>Si 3 produits sont vendues.</h4>";

    //condition 1//

    if($disponible=="true"){
        echo"<p>Le produit {$nom_produit}est disponible en magasin. </p>";
    }
    else{
        echo"<p><h4>Le produit {$nom_produit} n'est malheureusement plus disponible. </h4></p>";
    }
    
    //condition 2//

    if($quantite>=5){
        echo "<p><h4>Il reste plus de {$quantite} produits en magasin.</h4></p>";
    }
    
    elseif($quantite>=5 and $quantite>1){
        echo "<p><h4>Il ne reste plus que {$quantite} produits en magasin.</h4></p>";
    }
    
    elseif($quantite==1){
        echo"<p><h4> Il ne reste qu'un produit en magasin. </h4></p>";
    }
    
    elseif($quantite==0){
        echo"<p><h4>Il ne reste plus de produits en magasin. </h4></p>";
    }
    ?>
    



