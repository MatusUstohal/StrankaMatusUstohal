<?php
    $v1 = $_GET['name'];
    $v2 = $_GET['surname'];
    $v3 = $_GET['username'];
    $v4 = $_GET['email'];
    $v5 = $_GET['number'];
    $v6 = $_GET['password'];

    $text1 = "Name:" . $v1;
    $text2 = "Surname:" . $v2;
    $text3 = "Username:" . $v3;
    $text4 = "Email:" . $v4;
    $text5 = "Tnumber:" . $v5;
    $text6 = "Password:" . $v6;

    $file = fopen("zadanie.txt","w") or die("Unable to open file!");
    fwrite($file, $text1);
    fwrite($file, $text2);
    fwrite($file, $text3);
    fwrite($file, $text4);
    fwrite($file, $text5);
    fwrite($file, $text6);
    echo $text1;
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
    <form action="register.php" method="get">
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
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="number">Telephone number:</label>
            <input type="text" name="number" id="number">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="terms of services">terms of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
    </form>
</main>
</body>
</html>
