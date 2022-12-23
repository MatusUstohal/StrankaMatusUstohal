<html>
  <head>
    <style>
      form {
        width: 400px;
        margin: 0 auto;
        text-align: center;
        font-family: Arial, sans-serif;
      }
      label {
        display: block;
        margin-bottom: 0.5em;
      }
      input[type="text"],
      input[type="password"],
      input[type="number"],
      input[type="email"],
      select {
        width: 100%;
        padding: 0.5em;
        border: 1px solid #ccc;
        border-radius: 3px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 0.5em 1em;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }
      input[type="submit"]:hover {
        background-color: #45a049;
      }
      .radio-group,
      .checkbox-group {
        display: flex;
        flex-direction: column;
      }
      .radio-group label,
      .checkbox-group label {
        display: flex;
        align-items: center;
      }
      .radio-group input[type="radio"],
      .checkbox-group input[type="checkbox"] {
        margin-right: 0.5em;
      }
    </style>
  </head>
  <body>
    <form method="post">
      <label for="text">Text Input:</label>
      <input type="text" id="text" name="text"><br>
      <br>
      <label for="password">Password Input:</label>
      <input type="password" id="password" name="password"><br>
      <br>
      <label for="number">Number Input:</label>
      <input type="number" id="number" name="number"><br>
      <br>
      <label for="email">Email Input:</label>
      <input type="email" id="email" name="email"><br>
      <br>
      <div class="radio-group">
        <label for="radio">Radio Input:</label>
        <br>
        <input type="radio" id="radio" name="radio" value="option1"> Option 1<br>
        <input type="radio" id="radio" name="radio" value="option2"> Option 2<br>
      </div>
      <br>
      <div class="checkbox-group">
        <label for="checkbox">Checkbox Input:</label>
        <br>
        <input type="checkbox" id="checkbox" name="checkbox" value="option1"> Option 1<br>
        <input type="checkbox" id="checkbox" name="checkbox" value="option2"> Option 2<br>
      </div>
      <br>
      <label for="select">Select Input:</label>
      <br>
      <select id="select" name="select">
  </body>
</html>
