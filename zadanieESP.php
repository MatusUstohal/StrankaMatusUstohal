<?php

   if(isset($_GET["LCD text"]) || isset($_GET["Button"]) ) {
       
      $text1 ="LCD text: " . $_GET['LCD text'] . "\n";
      $text2 ="Button: " . $_GET['Button'] . "\n";
      $text3 ="Light(%): " . $_GET['Light'] . "\n";
      $file = fopen("zadanieESP.txt","w") or die("Unable to open file!");
      fwrite($file, $text1);
      fwrite($file, $text2);
      fwrite($file, $text3);
      fclose($file);
       
      exit();

   }

?>

<html>

   <body>

      <form action = "<?php $_PHP_SELF ?>" method = "GET">

         LCD text: <input type = "text" name = "LCD text" />

         Button: <input type = "checkbox" name = "Button" />
          
         Light-intensity: <input type="range" min="0" max="100" value="50" class="slider" id="Light">

         <input type = "submit" />

      </form>     

   </body>

</html>
