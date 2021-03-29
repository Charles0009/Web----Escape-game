<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href = "page_score_style.css">
	<title>Tableau scores</title>

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

	<h1 id="title">Tableau des évadés d'Alcatraz</h1>
	
  	
	<ul id="scores">Les meilleurs :
	<?php
		define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_NAME', 'Database Alcatraz');
         
        /* Attempt to connect to MySQL database */
        $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if($db->connect_error){
            echo 'Erreur de connexion (' . $db->connect_errno . ') ' . $db->connect_error;
        }

        $user_check_query = "SELECT username, score_butin, score_temps FROM user_info ORDER BY score_temps DESC LIMIT 10";

        if ($result = mysqli_query($db, $user_check_query)) {
        
            while($row = mysqli_fetch_assoc($result)) {
                $myArray[] = $row;
                ?>
	    <p id="liste_scores">
	    <?= $row['username']; ?>   avec   <?php echo $row['score_butin']; ?>   sauvés  et avec  <?php echo $row['score_temps']; ?> <br />
		</p>
	    <?php
            }
        }
        else{
            echo "Erreur de requête de base de données.";
        }

	?>
	</ul>

</body>
</html>