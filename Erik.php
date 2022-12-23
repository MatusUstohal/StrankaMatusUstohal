<?php
    $text1 ="Name: " . $_POST['name'] . "\n";
    $text2 ="Surname: " . $_POST['surname'] . "\n";
    $text3 ="Email: " . $_POST['email'] . "\n";
    $text4 ="Telephone number: " . $_POST['number'] . "\n";
    $text5 ="Password: " . $_POST['password'] . "\n";
    $text6 ="Company: " . $_POST['company'] . "\n";
    $text7 ="Username: " . $_POST['username'] . "\n";

    $file = fopen("Erik.txt","w") or die("Unable to open file!");

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
        <input id="firstname" name="firstname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="firstname" class="placeholder">First name</label>
      </div>
      <div class="input-container ic2">
        <input id="lastname" name="lastname" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="lastname" class="placeholder">Last name</label>
      </div>
      <div class="input-container ic2">
        <input id="email" name="email" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</>
      </div>
      <div class="input-container ic2">
        <input id="number" name="number" class="input" type="text" placeholder=" " />
        <div class="cut cut-number"></div>
        <label for="number" class="placeholder">Telephone number</>
      </div>
      <div class="input-container ic2">
        <input id="password" name="password" class="input" type="text" placeholder=" " />
        <div class="cut cut-password"></div>
        <label for="password" class="placeholder">Password</>
      </div>
      <div class="input-container ic2">
        <input id="company" name="company" class="input" type="text" placeholder=" " />
        <div class="cut cut-company"></div>
        <label for="company" class="placeholder">Company name</>
      </div>
      <div class="input-container ic2">
        <input id="username" name="username" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="username" class="placeholder">Username</>
      </div>
      <button type="text" class="submit">submit</button>
    </div>
    </form>
</main>
</body>
</html>
