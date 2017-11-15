<html>

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <style>
            body { background: #333; color: #fff; display: flex; justify-content: space-around; padding-top: 150px}
            .case{ border:1px solid #333; border-collapse: collapse; color: #333; font-family: verdana; font-size: 9px; display: inline-block; width: 25px; height: 25px; text-align: center; line-height: 25px; background: #fff}
            .black{ color: #fff; background: #000}
            .col{width: 25%}
            #actif{background: #993300; color: #fff;
              animation: win 1s ease infinite 0s ;
              animation-fill-mode: forwards;
            }
              @keyframes win {
               0%{transform: scale(1) rotate(0deg); border-radius:0%  }
               50%{transform: scale(1) rotate(0deg);  border-radius:0%   }
               95%{transform: scale(2) rotate(0deg); border-radius:50%; border-color:#fff;  }
               100%{transform: scale(1) rotate(0deg); border-radius:50%      }
             }
        </style>

    </head>

    <body>

      <div class="col">
      <?php
          $k = 0;
          for($i = 0; $i < 10 ; $i++){
              for($j = 0; $j < 10 ; $j++){
                $k++;
                echo '<span> X </span>';
              }
              echo "<br/>";

          }

      ?>
      </div>

      <div class="col">
      <?php
          $k = 0;
          for($i = 0; $i < 10 ; $i++){
              for($j = 0; $j < 10 ; $j++){
                $k++;
                echo '<span class="case"> '.$k.' </span>';
              }
              echo "<br/>";

          }

      ?>
    </div>

    <div class="col">
      <?php
          $k = 0;
          for($i = 0; $i < 10 ; $i++){
              for($j = 0; $j < 10 ; $j++){
                $k++;
                $opacity = (100-$k)/100;
                echo '<span class="case" style="opacity:'.$opacity.'"> '.$k.' </span>';
              }
              echo "<br/>";
          }

      ?>
    </div>

    <div class="col">
      <?php
          $k = 0;
          $r=rand(0,100);
          for($i = 0; $i < 10 ; $i++){
              for($j = 0; $j < 10 ; $j++){

                if($r==$k){

                  echo '<span id="actif" class="case"> '.$k.' </span>';
                }else{
                    if($i%2 == 0){

                        if ($k%2 == 0){
                          echo '<span class="case"> '.$k.' </span>';
                        }else{
                          echo '<span class="case black"> '.$k.' </span>';
                        }

                    }else{

                      if ($k%2 == 0){
                        echo '<span class="case black"> '.$k.' </span>';
                      }else{
                        echo '<span class="case"> '.$k.' </span>';
                      }

                    }
                  }

                  $k++;

                }
              echo "<br/>";


          }

      ?>
    </div>



</body>
