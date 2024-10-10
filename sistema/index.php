<?php
 include"conexao.php";
?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widith, initial-scale=1.0">
    <title>Document</title>
    <script src ="js/script.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
</head>
  
<body>
    <!--   Header início -->
   <?php
      include "header.php";
?>
    <!-- Header fim -->
   
    <!--slider inicio -->
    <?php
      include "slider.php";
?>
    <!-- slider fim-->

    <!-- Cards início -->
    <?php
   include "cards.php";
?>
     <!-- cards fim -->

     <!-- footer início -->
    <?php
    include "footer.php";
?>
     <!-- footer fim -->
</body>
</html>