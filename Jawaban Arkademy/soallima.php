<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  <div>
    <?php
    for ($i = 0; $i < 6; $i++) {
      echo "DW";
      if ($i <=2){
        for($j=0;$j<$i;$j++){
          echo "&nbsp";
          echo "&nbsp";
          echo "&nbsp";
          echo "&nbsp";
          echo "&nbsp";
          echo "&nbsp";
          }
      } else {
        for ($j=5;$j>$i;$j--){
          echo "&nbsp";
          echo "&nbsp";
          echo "&nbsp";
          echo "&nbsp";
          echo "&nbsp";
          echo "&nbsp";
        }
      }
      echo "DW";
      echo "<br>";
    }
    die();
    ?>
  </div>
  </body>
</html>
