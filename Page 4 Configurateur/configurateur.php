 <?php 
 // -----------------------------------------------------
 // --------------- CONFIGURATEUR PHP -------------------  
 ?>


<!DOCTYPE html>
<html lang="fr">
  <head>
  
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    
    <style type="text/css">
    
          body{
          font-family:Open sans;
          margin: 0;
          padding: 20px;
          background: #fff;
          }
          
          h1{
          color:#1e7eb5;
          font-weight: 100;
          }
          
          form{
          background: #ededed;
          padding: 10px;
          margin-bottom: 30px;
          }

     
          span{
          font-weight: bold;
          display:inline-block; 
          width:30px; 
          height:30px; 
          text-align:center; 
          }
          

    
    </style>

  </head>
  <body>

    <h1>CONFIGURATEUR</h1>

    <?php
   $lignes = $_GET["lignes"]; 
   $colonnes = $_GET["colonnes"]; 
  ?>

       <form method="get" action="configurateur.php">

          ligne: <input type="number" name="lignes" /> 
          colonne: <input type="number" name="colonnes">
          0<input type="range" name="nombre" min="0" max="10" placeholder="nombre" value="10">10
          <input type="radio" name="choix" value="choix1" />choix 1
          <input type="radio" name="choix" value="choix2" />choix 2
          <input type="radio" name="choix" value="choix3" />choix 3
          <input type="radio" name="choix" value="choix4" />choix 4
          <input type="color" name="couleur1">
          <input type="color" name="couleur2">
            
        <button class="btn" type="submit">ENVOYER</button>

     </form>

  </body>
</html>

 <?php // ------------ AFFICHAGE DES CARACTERES ------------ :  
 
/*for($i=0; $i<$lignes; $i++){

    for($j=0; $j<$colonnes; $j++){
     
        echo '<span> # </span>';
         
    }
    echo "<br/>";
}
*/
include "carre.php";
?>