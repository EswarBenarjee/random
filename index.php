<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Random Dice Simulator</title>
    <style media="screen">
      img {
        height: 30px;
        width: 30px;
      }
    </style>
  </head>
  <body>
    <center>
      <?php
        $numb = $_POST['numb'];
        $_SESSION['numb'] = $numb;
        for($i=1; $i<=$numb; $i++) {
          echo "<br><br>";
          $x = rand(1,6);
          echo "Dice ".$i."&nbsp&nbsp&nbsp";
          echo "<img src='css/images/dice".$x.".png'>";
        }
      ?>
    </center>
  </body>
</html>
