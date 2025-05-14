<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Looping numbers, in php" />
  <meta name="keywords" content="maths, icd2o" />
  <meta name="author" content="yi.zhou" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Looping numbers, in php</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Looping numbers, in php</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/positive_negative.jpg" alt="positive_negative image" />
      </div>
      <br />
      <div class="page-content-1">Select what kind of number you would like.</div>
      <br /><br />

      <!-- FORM: send to answer.php -->
      <form action="answer.php" method="get">
        <p>Enter first number</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" name="first-number" id="first-number">
          <label class="mdl-textfield__label" for="first-number">number here ...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />

        <p>Enter second number</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="number" name="second-number" id="second-number">
          <label class="mdl-textfield__label" for="second-number">number here ...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br /><br />
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          CALCULATE
        </button>
      </form>

      <br />
      <div class="page-content-answer">
        <!-- Optionally you can put instructions or notes here -->
      </div>
    </main>
  </div>
</body>

</html>