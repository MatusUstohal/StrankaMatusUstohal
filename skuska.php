<?php
    $text1 ="" . $_POST['cislo1'] . "\n";
    $text2 ="" . $_POST['cislo2'] . "\n";
    $text3 ="" . $_POST['cislo3'] . "\n";
    $text4 ="" . $_POST['cislo4'] . "\n";
    $text5 ="" . $_POST['cislo5'] . "\n";
    $file = fopen("skuska.txt","w") or die("Unable to open file!");
    fwrite($file, $text1);
    fwrite($file, $text2);
    fwrite($file, $text3);
    fwrite($file, $text4);
    fwrite($file, $text5);
    fclose($file);

    $file = fopen("skuska.txt","r") or die("Unable to open file!");
    $vysledok ="Vysledok: " . $text1 - $text2 - $text3 - $text4 - $text5;
    fclose($file);

    $file = fopen("skuska.txt","a") or die("Unable to open file!");
    fwrite($file, $vysledok);
    fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="styles.css">
    <title>Skuska</title>
</head>
<body>
<main>
    <form name="form" action="" method="post">
        <h1>Skuska</h1>
        <div>
            <label for="cislo1">Cislo1:</label>
            <input type="text" name="cislo1" id="cislo1">
        </div>
        <div>
            <label for="cislo2">Cislo2:</label>
            <input type="text" name="cislo2" id="cislo2">
        </div>
        <div>
            <label for="cislo3">Cislo3:</label>
            <input type="text" name="cislo3" id="cislo3">
        </div>
        <div>
            <label for="cislo4">Cislo4:</label>
            <input type="text" name="cislo4" id="cislo4">
        </div>
        <div>
            <label for="cislo5">Cislo5:</label>
            <input type="text" name="cislo5" id="cislo5">
        </div>
        <button type="submit">Submit</button>
    </form>
</main>
</body>
</html>
