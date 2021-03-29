
<!DOCTYPE html>
<html>
<head>
  <meta charset=UTF-8>
  <title> ALCATRAZ </title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>
  <link rel="stylesheet" href = "style_jouer.css">
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
  integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
  crossorigin=""></script>
</head>
<div class="container">
<header>
  <nav>
    <ul>
      <li id=index>
        <a href="index.php" >Accueil</a>
      </li>
      <li id=about>
        <a href="about.html">Règles du jeu</a>
      </li>
      <li id=jouer>
        <a href="jouer.php">Jouer</a>
      </li>
      <li id=score>
        <a href="page_des_scores.php">Scores</a>
      </li>
    </ul>
  </nav>
</header>
</div>
<body>
  <h1> Échappez-vous </h1>
    <p id='chrono'></p>
    <p id='butin'></p>
  <div id="mapid"></div>
  <div id="inventaire">
    <img class="icones" id="Cuillere" src= "/icones/objet/cuillere.png">
    <img class="icones" id="Jet prive" src= "/icones/objet/jet.png">
    <img class="icones" id="tresor" src= "/icones/objet/argent.png">
    <img class="icones" id="bateau" src= "/icones/objet/bateau.png">
    <img class="icones" id="Gilet de sauvetage" src= "/icones/objet/gilet.png">
    <img class="icones" id="limousine" src= "/icones/objet/limousine.png">
    <img class="icones" id="Contrat" src= "/icones/objet/contrat.png">
    <img class="icones" id="Voiture" src= "/icones/objet/voiture.png">
    <img class="icones" id="tram" src= "/icones/objet/tram.png">
    <img class="icones" id="Taxi" src= "/icones/objet/taxi.png">
    <img class="icones" id="Avion de ligne" src= "/icones/objet/avion2.png">
    <img class="icones" id="Avion" src= "/icones/objet/avion.png">
    <img class="icones" id="Banque" src= "/icones/objet/banque.png">
  </div>
  <script src ="new_main.js"></script>
</body>
</html>

