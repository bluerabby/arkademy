<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php
    $fibo = array
      (
      array(0,1,1,2),
      array(3,5,8,13),
      array(21,34,55,89)
      );

      for ($row = 0; $row < 3; $row++) {
      for ($col = 0; $col < 4 ; $col++) {
        echo "".$fibo[$row][$col].",";
      }
      echo "</br>";
    }
    ?>
  </body>
</html>
