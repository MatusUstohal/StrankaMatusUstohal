<!--<?php
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
?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Erik.css">
    <title>Register</title>
</head>
<body>
<main>
    <form name="form" action="" method="post">
        <div class="form">
      <div class="title">Welcome</div>
      <div class="subtitle">Let's create your account!</div>
      <div class="input-container ic1">
        <input id="firstname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">First name</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Last name</label>
      </div>
      <div class="input-container ic2">
        <input id="email" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</>
      </div>
      <button type="text" class="submit">submit</button>
    </div>
    </form>
</main>
</body>
</html>
