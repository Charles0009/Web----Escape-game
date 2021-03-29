<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Inscriptions</title>
  <link rel="stylesheet" type="text/css" href="style_login.css">
</head>
<body>
  <div class="header">
  	<h2>Inscription</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Nom d'utilisateur</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Mot de passe</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirmer le mot de passe</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Déjà enregistré? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
