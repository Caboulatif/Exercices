<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="formulaire.css">
    <title>Formulaire PHP</title>
</head>
<body>

<h1>Les formulaires PHP</h1>

<?php
var_dump($_GET);
var_dump($_POST);
//$_nom=isset($_POST["nom"])? $_POST["nom"]: " ";
//echo $nom;
$nom=isset($_POST["nom"])? CleanData($_POST["nom"]): " "; ;
$prenom=isset($_POST["prenom"])? CleanData($_POST["prnom"]): " "; ;

if (!empty("$nom")){
    echo $nom;
}
else{
    echo " Merci de remplir le champ NOM";
}
if (!empty("$prenom")){
    echo $prenom;
}
else{
    echo " Merci de remplir le champ PRENOM";
}

function CleanData($data){
    $data= htmlspecialchars($data);
    $data= stripslashes($data);
   // $data= trim($data);
    return$data;    

}
?>


<?php
if(!empty($nom) && !empty($prenom)){

/*foreach($POST as $key => $value)
{
    echo "<p> $key: $value </p>";
}*/
}
else{

    echo "";
}
?>


<form action="formulaire.php" method="get">
    <label for="nom"></label>
    <input type="text" name="nom" id="nom" placeholder="nom" <?php echo $nom?>>
    <label for="prenom"></label>
    <input type="text" name="prenom"  id="prenom"placeholder="prenom"<?php echo $nom?>>
    <textarea name="" id="" cols="30" rows="10"> Message.....</textarea>
    <button type="submit">Envoyer</button>
</form>
    
</body>
</html>