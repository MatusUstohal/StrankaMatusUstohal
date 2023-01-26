<?php
    $text1 ="Cislo1: " . $_POST['cislo1'] . "\n";
    $text2 ="Cislo2: " . $_POST['cislo2'] . "\n";
    $text3 ="Cislo3: " . $_POST['cislo3'] . "\n";
    $text4 ="Cislo4: " . $_POST['cislo4'] . "\n";
    $text5 ="Cislo5: " . $_POST['cislo5'] .;
    $file = fopen("zadanie.txt","w") or die("Unable to open file!");
    fwrite($file, $text1);
    fwrite($file, $text2);
    fwrite($file, $text3);
    fwrite($file, $text4);
    fwrite($file, $text5);
    fclose($file);   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="styles.css">
    <title>Register</title>
</head>
<body>
<main>
    <form name="form" action="" method="post">
        <h1>Skuska</h1>
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="surname">Surname:</label>
            <input type="text" name="surname" id="surname">
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="number">Telephone number:</label>
            <input type="text" name="number" id="number">
        </div>
        <button type="submit">Submit</button>
    </form>
</main>
</body>
</html>
