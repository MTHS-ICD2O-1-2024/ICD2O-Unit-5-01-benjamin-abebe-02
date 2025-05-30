<!DOCTYPE html>
<!-- ICS2O-Unit5-01-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Website built with JS" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Benjamin Abebe" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>The guess the number program.</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The guess the number program.</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./dice.gif" alt="computer user" />
      </div>

      <!-- Wrap everything else in a new div -->
      <div class="center-content">
        <div class="page-content">Pick an integer from 1 to 6</div>
        <br />
        <form action="#">
          <div class="mdl-textfield mdl-js-textfield">
            <input
              class="mdl-textfield__input"
              type="text"
              pattern="-?[0-9]*(\.[0-9]+)?"
              id="user-input" />
            <label class="mdl-textfield__label" for="demo-input">number</label>
            <span class="mdl-textfield__error">Input is not a number</span>
          </div>
          <br />
          <button
            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            onclick="myButtonClicked()"
            type="button">
            Click here to check!
          </button>
        </form>
        <br />
        <div class="page-content-answer">
          <div id="answer"></div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>