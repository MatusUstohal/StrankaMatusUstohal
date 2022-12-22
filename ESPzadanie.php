<?php      
      $file = fopen("zadanieESP.txt", "r") or die("Unable to open file!");
      $currentValue = fread($file, filesize("zadanieESP.txt"));
      fclose($file);
      $file = fopen("zadanieESP.txt", "w") or die("Unable to open file!");

      if (isset($_GET['LCD']) && !empty($_GET['LCD'])) {
            $text1 = "LCD: " . $_GET['LCD'] . "\n";
      }else {
            $text1 = $currentValue;
      }
      fwrite($file, $text1);

      $currentValue = '';

      if (file_exists('zadanieESP.txt')) {
            $currentValue = file_get_contents('zadanieESP.txt');
      }

      $lines = explode("\n", $currentValue);

      foreach ($lines as $key => $line) {
            if (stripos($line, 'Button:') !== false) {
                  unset($lines[$key]);
            }
            if (stripos($line, 'Light(%):') !== false) {
                  unset($lines[$key]);
            }
      }

      if (isset($_GET["Button"])) {
            $text2 = "Button: 1" . "\n";
      }else {
            $text2 = "Button: 0" . "\n";
      }

      $text3 = "Light(%): " . $_GET['Light'] . "\n";

      $text1 = implode("\n", $lines);

      file_put_contents('zadanieESP.txt', $text1 . $text2 . $text3);
      fclose($file);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="button.css">
    <link rel="stylesheet" type="text/css" href="slider.css">
    <title>Update</title>
    <style>
    /* Style the switch */
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    /* Style the switch's checkbox */
    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    /* Style the switch's label */
    .switch label {
      position: absolute;
      top: 0;
      left: 0;
      display: flex;
      align-items: center;
      width: 100%;
      height: 100%;
      cursor: pointer;
      font-size: 14px;
      color: #666;
      transition: all 0.3s ease;
    }

    /* Style the switch's label's text */
    .switch label span {
      flex: 1;
      text-align: center;
    }

    /* Style the switch's label's background */
    .switch label::before,
    .switch label::after {
      content: "";
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 50%;
      height: 100%;
      background: #ccc;
      border-radius: 34px;
      transition: all 0.3s ease;
    }

    /* Style the switch's label's background when checked */
    .switch input:checked + label::before {
      background: #2196F3;
    }

    /* Style the switch's label's thumb */
    .switch input:checked + label::after {
      left: 50%;
    }
  </style>
</head>
<body>
<main>
    <form name="form" action="" method="GET">
        <h1>Select</h1>
        <div>
            <label for="LCD">LCD text:</label>
            <input type="text" name="LCD" id="LCD">
        </div>
            <label for="Button" class="switch">
            <!--<label for="Button">On/Off Button:</label>-->
            <input type="checkbox" name="Button" id="Button">
            <span>Off</span>
            <span>On</span>
            </label>
        <div class="light-slider-container">
            <label for="Light">Light(%):</label>
            <input type="range" name="Light" id="Light" min="0" max="100" value="50" oninput="rangeValue.innerText = this.value" class="light-slider">
            <p>
            <span>Your chosen light level is at: </span>
            <span id="rangeValue">50</span>
            <span>%</span>
            </p>
        </div>
        <button type="submit">Update</button>
    </form>
</main>
</body>
</html>
