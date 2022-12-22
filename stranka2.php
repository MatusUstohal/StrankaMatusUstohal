<?php
    $text1 ="Name: " . $_POST['name'] . "\n";
    $text2 ="Surname: " . $_POST['surname'] . "\n";
    $text3 ="Alias: " . $_POST['username'] . "\n";
    $text4 ="Email: " . $_POST['email'] . "\n";
    $text5 ="Telephone number: " . $_POST['number'] . "\n";
    $text6 ="Password: " . $_POST['password'] . "\n";
    $text7 ="Company: " . $_POST['company'];
    $file = fopen("zadanie.txt","w") or die("Unable to open file!");
    fwrite($file, $text1);
    fwrite($file, $text2);
    fwrite($file, $text3);
    fwrite($file, $text4);
    fwrite($file, $text5);
    fwrite($file, $text6);
    fwrite($file, $text7);
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
        <h1>Sign Up</h1>
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
        <button type="submit">Register</button>
    </form>
</main>
</body>
</html>
