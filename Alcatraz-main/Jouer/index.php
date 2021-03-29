
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
<html lang = fr>
	<head>
		<meta charset="UTF-8">
		<title>Échappons-nous d'Alcatraz !</title>
		<link rel="stylesheet" href = "style_index.css">
</style>
	</head>
  <header>
    <nav>
      <ul>
        <li id=index>
          <a href="index.php">Accueil</a>
        </li>
				<!-- <li id=histoire>
					<a href="histoire.html">l'histoire</a>
				</li> -->
        <li id=about>
          <a href="about.html">Règles du jeu</a>
        </li>
        <li id=jouer>
          <a href="jouer.php">Jouer</a>
        </li>
        <li id=contact>
          <a href="page_des_scores.php">Scores</a>
        </li>
      </ul>
    </nav>
  </header>
	<body>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
		<h1>
					L'évasion d'Alcatraz
		</h1>
		<h2> Combien d'argent sauverez-vous ? </h2>
		<div class=introduction>
		<p>
					Bienvenue dans la prison d'Alcatraz, vous êtes avec les plus grands bandits de l'Histoire
					et vous allez devoir réussir votre cavale après votre évasion de la prison la plus sécurisée du monde.
		</p>
		<p>
					Votre dernier travail rapportait beaucoup mais vous a conduit tout droit en cellule. Votre part
					vous attend à l'experieur dans votre résidence à XXX XXXXXX. Ces 250 000$ vous seront utiles
					dans vos périples.
		</p>
		<p>
					Dans cette cavale vous allez être confronté à des choix ayant un coùt. Votre but est de limiter
					vos dépenses et atteindre votre domicile sans vous faire attraper par la police.
		</p>
	</div>
  		<div class="boutton">
				<p> <a href="jouer.php">Jouer !</a> </p>
			</div>
	</body>

	