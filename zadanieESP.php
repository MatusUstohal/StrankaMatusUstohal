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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="style.css">
    <title>Update</title>
</head>
<body>
<main>
    <form name="form" action="" method="GET">
        <h1>Update</h1>
        <div>
            <label for="LDC">LCD text:</label>
            <input type="text" name="LDC" id="LDC">
        </div>
        <div>
            <label for="Button">On/Off Button:</label>
            <input type="checkbox" name="Button" id="Button">
        </div>
        <div>
            <label for="Light">Light(%):</label>
            <input type="range" name="Light" id="Light" min="0" max="100">
        </div>
        <button type="submit">Update</button>
    </form>
</main>
</body>
</html>
