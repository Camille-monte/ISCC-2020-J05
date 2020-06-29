<!DOCTYPE html>
<html lang="fr">

  <head class="header">
            <meta charset="utf-8">
            <title>Summer Code Camp</title>
            <link rel="stylesheet" href="vitrine2.css">
            
  </head>

  <header><?php include('header.php');?></header>
    <?php include('navigation.php');?>

  <h2>CONTACT</h2>
  
</header>
  <div class="formulaire center-div">
    <form method="POST" action="traitement.php">
      <p>
        
        <input type="test" name="Nom Prénom" id="pseudo"placeholder="Ex: Jean Meyer" size="20">
      </p>
      <p>
     
      <input type="text" name="Adresse email" id="email" placeholder="Ex: jean.meyer@gmail.com">

      </p>
      <p>
       
        <textarea name="Message du contact" id="message" placeholder="Ex: Comment améliorer mon site "></textarea>
      </p>
      <p><input type="submit" id="bouton" value="Envoyer"></p>



    </form>
  
  </body>
  <footer><?php include('footer.php');?></footer>
  
</html>