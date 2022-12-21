<?php

   if(isset($_GET["LCD"]) || isset($_GET["Light"])) {
      
      if(isset($_GET["Button"])){
         $text2 ="Button: 1" . "\n";
      }else{
         $text2 ="Button: 0" . "\n";
      }
      
      $text1 ="LCD: " . $_GET['LCD'] . "\n";
      $text3 ="Light(%): " . $_GET['Light'] . "\n";
      $file = fopen("zadanieESP.txt","w") or die("Unable to open file!");
      fwrite($file, $text1);
      fwrite($file, $text2);
      fwrite($file, $text3);
      fclose($file);
       
      exit();
      /*
      if(isset($_GET["LCD"])){
         $text1 ="LCD: " . $_GET['LCD'] . "\n";
         $file = fopen("zadanieESP.txt","w") or die("Unable to open file!");
         fwrite($file, $text1);
         fclose($file);
      }else{
         $text1 ="LCD: " . "\n";
         $file = fopen("zadanieESP.txt","w") or die("Unable to open file!");
         fwrite($file, $text1);
         fclose($file);
      }
      
      if(isset($_GET["Button"])){
         $text2 ="Button: 1" . "\n";
         $file = fopen("zadanieESP.txt","w") or die("Unable to open file!");
         fwrite($file, $text2);
         fclose($file);
      }else{
         $text2 ="Button: 0" . "\n";
         $file = fopen("zadanieESP.txt","w") or die("Unable to open file!");
         fwrite($file, $text2);
         fclose($file);
      }
      
      if(isset($_GET["Light"])){
         $text3 ="Light(%): " . $_GET['Light'] . "\n";
         $file = fopen("zadanieESP.txt","w") or die("Unable to open file!");
         fwrite($file, $text3);
         fclose($file);
      }else{
         $text2 ="Light(%): 50" . "\n";
         $file = fopen("zadanieESP.txt","w") or die("Unable to open file!");
         fwrite($file, $text3);
         fclose($file);
      }*/

   }
      //exit();
?>

<html>
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="styles.css">
    <title>Register</title>
   </head>
   <body>

      <form action = "<?php $_PHP_SELF ?>" method = "GET">

         LCD: <input type = "text" name = "LCD" />
         
         </br>
         </br>
         </br>

         Button: <input type = "checkbox" name = "Button" />
      
         </br>
         </br>
         </br>
          
         <div>
            <input type="range" id="Light" name="Light"
            min="0" max="100">
            <label for="Light">Light(%)</label>
         </div>

         <input type = "submit" />

      </form>     

   </body>

</html>
