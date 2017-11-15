<?php

function get_annonces($marque, $energie, $ordreprix){

  global $bdd;

  $requete = "SELECT * FROM voitures" ;

  if($marque != "all"){
    $requete .=  " WHERE marque = '".$marque."' ";
  }else{
    $requete .= " WHERE 1 = 1 ";
  }

  if($energie != "all"){
    $requete .=  " AND energie = '".$energie."' ";
  }

  $requete .=  " ORDER BY prix ".$ordreprix." ";


  echo $requete ;


  $reponse = $bdd->query($requete);
  return $reponse;

}



/*

________________ MEMO pour la contruction d'une requ�te SQL ________________

construction d'une requete SQL simple :

On s�lectionne des champs dans une table (* = tous les champs)
SELECT champ(s) FROM table ;

On peut d�finir une premi�re condition avec WHERE :
SELECT champ(s) FROM table WHERE condition(s) ;

On peut d�finir d'autres conditions AND :
SELECT champ(s) FROM table WHERE condition(s) AND condition(s) ;

On peut classer les r�sultats par ASC (ascendant) ou DESC (descendant) :
SELECT champ(s) FROM table WHERE condition(s) AND condition(s) ORDER BY colonne ASC ;

On peut d�finir des limites en terme de nombre d'affichage :
SELECT champ(s) FROM table WHERE condition(s) AND condition(s) LIMIT max;

*/



    ?>
