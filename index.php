<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Burger menu en JS</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <nav class="menu" id="menu">
      <div class="items" id="items">
        <a href="#">Accueil</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>


      <div class="icon" id="burgerMenu" onclick="openNav()">
        <div class="burger"></div>
        <div class="burger"></div>
        <div class="burger"></div>
      </div>

      <div class="close" id="close" onclick="closeNav()">X</div>

    </nav>







    <script src="main.js"></script>

  </body>
</html>
