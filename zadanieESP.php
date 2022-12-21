<?php

    // Below code checks if Name and Age have values. 

   if(isset($_GET["name"]) || isset($_GET["age"]) ) {

      echo "Hi ". $_GET['name']. "<br />";

      echo "Age: ". $_GET['age']. " years old.";
       
      $text1 ="Name: " . $_GET['name'] . "\n";
      $text2 ="Age: " . $_GET['age'] . "\n";
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

         Name: <input type = "text" name = "name" />

         Age: <input type = "text" name = "age" />

         <input type = "submit" />

      </form>     
       
       <!-- Rectangular switch -->
<label class="switch">
  <input type="checkbox">
  <span class="slider"></span>
</label>

<!-- Rounded switch -->
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>

   </body>

</html>
