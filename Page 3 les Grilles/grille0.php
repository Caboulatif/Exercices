<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <style>
            .case{ background: #ccc; display: inline-block; width: 30px; line-height: 30px; border: 1px solid #fff; text-align: center; height: 30px}
            .actif{ background: #993300; color: #fff}
        </style>
    </head>
    <body>
      <?php
        $k=0;
        $r = rand(0,100);

        echo "Tirage au sort : ".$r."<br/>";

        for($i=1; $i<=10; $i++){

          for($j=1; $j<=10; $j++){
            $k++;
            $o = 1 - ($k/100);
            if($r==$k){
                echo "<span class='case actif'>$k</span>";
            }else{
                echo "<span class='case' style='opacity:$o'>$k</span>";
            }

          }
          echo "<br/>";

        }

      ?>
</body>
