<?php
if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['password']) && isset($_POST['company']) && isset($_POST['username'])){
    $text1 ="Name: " . $_POST['name'] . "\n";
    $text2 ="Surname: " . $_POST['surname'] . "\n";
    $text3 ="Email: " . $_POST['email'] . "\n";
    $text4 ="Telephone number: " . $_POST['number'] . "\n";
    $text5 ="Password: " . $_POST['password'] . "\n";
    $text6 ="Company: " . $_POST['company'];
    $text7 ="Alias: " . $_POST['username'] . "\n";

    $file = fopen("Erik.txt","w") or die("Unable to open file!");

    fwrite($file, $text1);
    fwrite($file, $text2);
    fwrite($file, $text3);
    fwrite($file, $text4);
    fwrite($file, $text5);
    fwrite($file, $text6);
    fwrite($file, $text7);

    fclose($file); 
}
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
      <div class="input-container ic2">
        <input id="number" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="number" class="placeholder">Telephone number</>
      </div>
      <div class="input-container ic2">
        <input id="password" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="password" class="placeholder">Password</>
      </div>
      <div class="input-container ic2">
        <input id="company" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="company" class="placeholder">Company name</>
      </div>
      <div class="input-container ic2">
        <input id="username" class="input" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="username" class="placeholder">Username</>
      </div>
      <button type="text" class="submit">submit</button>
    </div>
    </form>
</main>
</body>
</html>
