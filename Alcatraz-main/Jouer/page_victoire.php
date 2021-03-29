<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href = "style_victoire.css">
	<title>Victoire!</title>

</head>

<body>

	<?php
        $score_temps = $_GET['temps_uti'];
        $score_butin = $_GET['butin_uti'];
        $_SESSION['score_temps'] = $_GET['temps_uti'];
        $_SESSION['score_butin'] = $_GET['butin_uti'];
    ?>
  <h1> Victoire ! </h1>
	<p id="title">Tu as mis  à l'abris <?php echo $_SESSION['score_butin'] ?> avec   <?php echo $_SESSION['score_temps'] ?> !!</p>
	<div id="charge_score">

    <?php

$username = $_SESSION['username'];

        $score_temps = $_SESSION['score_temps'];
        $score_butin = $_SESSION['score_butin'];


        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_NAME', 'Database Alcatraz');

        /* Attempt to connect to MySQL database */
        $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if($db === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }


        mysqli_query($db, "UPDATE user_info SET score_butin = '$score_butin', score_temps = '$score_temps' WHERE username = '$username'");


        $_SESSION['score_temps'] = $score_temps;
        $_SESSION['score_butin'] = $score_butin;


	?>

  <div class="boutton">
    <p id='B'> <a href = 'index.php'>Accueil</a> </p>
    <p id='B'> <a href = 'jouer.php'>Rejouer !</a> </p>
    <p id='B'> <a href="index.php?logout='1'">logout</a> </p>
  </div>
	</div>



</body>
</html>
