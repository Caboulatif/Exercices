<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://use.fontawesome.com/da049457ea.js"></script>
    <title>Document</title>
</head>


<div class= "container">
    <div class="titre"> METEO STATS &copy Abdou Latif COULIBALY</div>

        <form action="index.php" method="get">
            <label for="jours">JOURS ENSOLEILLES:</label>
            <input type="number" name="Jours" value="98">

            <label for="Jourp">JOURS PLUVIEUX:</label>
            <input type="number" name="Jourp" value="136">

            <button type="submit">ANALYSER</button>


        <?php 
            //echo $jours."</br>";
            //echo $jourp;

            //$a = 'variable';

            //if(isset($a)){echo '$a existe et vaut: '.$a.'</br>';} //Renverra $a existe
            //unset($a);//Supprime la variable
            //if(!isset($a)){echo '$a n\'existe pas </br>';} //Renverra $a n'existe pas

            //$a = '';
            //if(empty($a)){echo '$a est vide et vaut : '.$a. '</br>';} // Renverra $a est vide
            //$a = 'chose-non-vide';
            //if(!empty($a)){echo '$a n\'est pas vide et vaut : ' .$a. '</br>';}// Renverra $a n'est pas vide

            $jours= $_GET['Jours'];
            $jourp= $_GET['Jourp'];
            $jour_r= $jours+$jourp;
            if($jour_r<=365)
            {
                $jour_m = 365-$jour_r;
            }
        ?>
    </form>

    <div class="message"> 1 / Messages</div>

    <?php 
        if(!empty($jours) && !empty($jourp))
        {
            if (($jours+$jourp)<=365) 
            {
                echo "<div class='message_1'>"; 
                echo "Il y a ";
                echo  "<span class='resutat'>";
                echo $jours. " jours ensoleuillés ";
                echo  "</span>";
                echo " et ";
                echo  "<span class='resutat'>";
                echo $jourp. " jours pluvieux ";
                echo  "</span>";
                echo " soit ";
                echo  "<span class='resutat'>";
                echo $jour_r. " jours rensignés sur 365";
                echo  "</span>";
                echo "</div> ";
            }
        }
        else if(empty($jours) || empty($jourp))
        { 
            echo " <div class='message_2'> ";
            echo " Merci de rensigner tous les champs ";
            echo "</div>";
            
        }
        if(($jours+$jourp)>365)
        {
            echo "<div class='message_2'>";
            echo "Il ne peut pas y avoir plus de  365j au total";
            echo "</div>";
        }
    ?>

    <!--
    <div class="message_1"> il y a <span class="resutat"><?php echo $_GET['Jours'];?>  jours ensoleillés</span> et <span class="resutat"> <?php echo $_GET['Jourp'];?> jours pluvieux</span>, soit<span class="resutat"> <?php echo $_GET['Jours']+ $_GET['Jourp'];?> jours renseignés sur 365</span></div>
    -->

    <div class="message"> 2 / Ratio soleil / pluie </div>
    <div class="tatio" >
        <span class = "soleil"> 42% </br> <span class="rsoleil">DE SOLEIL</span></span>
        <span class = "pluie"> 58% </br> <span class="rpluie">DE PLUIE </span></span>
    </div>
    <br/>
    <br/>
    <div class="couleurDiv">
        <span class="couleurorange"></span> 
        <span class="couleurvert"></span>
    </div>

    <div class="message"> 3 / Vue annuelle (365j) </div>

    <div class="vueannuelle">
        <?php
            if(($jours+$jourp)<=365)
            {
                for( $i=0;$i<$jours; $i++)
                {  
                    echo '<span class= "space"> <img class= "sunny" src="img/sunny.ico" alt=""> </span>';
                }
                for( $i=0;$i<$jourp; $i++)
                {
                    echo '<span class= "space"> <img class= "sunny" src="img/pluie.png" alt=""> </span>';
                }
                for( $i=0;$i<$jour_m; $i++)
                {
                    echo '<span class= "space"> <img class= "sunny" src="img/point.jpg" alt=""> </span>';
                }
            }
        ?>
    </div>  
    
    <div class="message"> 4 / Progression <span class="progress">(par rapport à l'analyse précédente)</span> </div>
    <div class="ligne1"><span class="fligne1"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> <span class= "fspace"> <img class= "sunny" src="img/sunny.ico" alt=""> </span></span> <span class="jligne1">+33j</span> <span class="aligne1">analyse précéndente:65j</span> <span class="anligne1">analyse en cours: 98j</span></div>
    <div class="ligne2"><span class="fligne2"><i class="fa fa-arrow-down" aria-hidden="true"></i> <span class= "fspace"> <img class= "sunny" src="img/pluie.png" alt=""> </span></span> <span class="jligne2">-10j</span> <span class="aligne2">analyse précéndente:65j</span> <span class="anligne2">analyse en cours: 98j</span></div>
    



</div>
<body>
    
</body>
</html>