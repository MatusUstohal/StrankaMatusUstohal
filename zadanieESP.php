<?php

    // Below code checks if Name and Age have values. 

   if(isset($_GET["LCD text"]) || isset($_GET["Button"]) ) {
       
      $text1 ="LCD text: " . $_GET['LCD text'] . "\n";
      $text2 ="Button: " . $_GET['Button'] . "\n";
      $file = fopen("zadanieESP.txt","w") or die("Unable to open file!");
      fwrite($file, $text1);
      fwrite($file, $text2);
      fclose($file);
       
      exit();

   }

?>

<html>

   <body>

      <form action = "<?php $_PHP_SELF ?>" method = "GET">

         LCD text: <input type = "text" name = "LCD text" />

         Button: <input type = "checkbox" name = "Button" />

         <input type = "submit" />

      </form>     

   </body>

</html>
