<?php
 // -----------------------------------------------------
 // --------------- TP BASE DE DONNEE -------------------
 ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" >

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='css/annonces.css' rel='stylesheet' type='text/css'>

  </head>
  <body>

    <h1>LES ANNONCES / <?php echo  $marque; ?></h1>


    <form method="get" action="annonces.php">

          <select name="marque">
                    <option value="all" >Toutes les marques</option>
                    <option value="renault" >RENAULT</option>
                    <option value="peugeot" >PEUGEOT</option>
                    <option value="tesla"  >TESLA</option>
          </select>

          <span class="espace"> </span>

          <select name="energie">
                    <option value="all" >Toutes énergie</option>
                    <option value="electrique">ELECTRIQUE</option>
                    <option value="essence">ESSENCE</option>
                    <option value="diesel">DIESEL</option>
          </select>

          <span class="espace"> </span>

           <select name="kms">
                    <option value="1">- de 10000Km</option>
                    <option value="2">de 10000Km � 30000km</option>
                    <option value="3">+ de 30000km</option>
          </select>

          <span class="espace"> </span>

          Prix : <input type="radio" name="ordreprix" value="ASC"/> &uarr;
          <input type="radio" name="ordreprix" value="DESC"/> &darr;

            <button class="btn" type="submit">AFFINER</button>

     </form>


   <table cellspacing="0">




<?php // ----- AFFICHAGE DES RESULTATS SOUS FORME DE TABLEAU :

if ( $annonces->rowCount() == 0 ) :
  echo "Pas d'annonces...";
else :
  echo "il y a".$annonces->rowCount()." resultats";

  foreach($annonces as $annonce) :
  ?>
            <tr>
                  <td>
                    <img src="./images/<?php echo $annonce['id']; ?>.jpg" />

                  </td>
                  <td>
                     <?php echo $annonce['marque'] , "  ",   $annonce['modele']; ?>

                  </td>

                  <td>
                     <?php echo $annonce['energie']; ?>
                  </td>

                  <td>
                     <?php echo $annonce['annee']; ?>
                  </td>
                  <td>
                     <?php echo $annonce['km']; ?> Kms
                  </td>
                  <td>
                     <strong><?php echo $annonce['prix']; ?> &euro;</strong>
                  </td>

              </tr>

  <?php
  endforeach;

endif;
?>


   </table>

 </body>
</html>
