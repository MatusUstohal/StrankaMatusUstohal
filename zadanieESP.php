<?php

   if(isset($_GET["LCD"]) || isset($_GET["Button"]) || isset($_GET["Light"])) {
       
      $text1 ="LCD: " . $_GET['LCD'] . "\n";
      $text2 ="Button: " . $_GET['Button'] . "\n";
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
     <style>
        h1 {
            color: green;
        }
               
        /* toggle in label designing */
        .toggle {
            position : relative ;
            display : inline-block;
            width : 100px;
            height : 52px;
            background-color: red;
            border-radius: 30px;
            border: 2px solid gray;
        }
               
        /* After slide changes */
        .toggle:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: gray;
            top: 1px;
            left: 1px;
            transition:  all 0.5s;
        }
               
        /* Toggle text */
        p {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
               
        /* Checkbox checked effect */
        .checkbox:checked + .toggle::after {
            left : 49px;
        }
               
        /* Checkbox checked toggle label bg color */
        .checkbox:checked + .toggle {
            background-color: green;
        }
               
        /* Checkbox vanished */
        .checkbox {
            display : none;
        }
    </style>
 </head>
   <body>

      <form action = "<?php $_PHP_SELF ?>" method = "GET">

         LCD: <input type = "text" name = "LCD" />
         
         </br>
         </br>
         </br>

         <input type="switch" id="Button"
                    class="checkbox" />
         <label for="Button" class="toggle">
      
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
