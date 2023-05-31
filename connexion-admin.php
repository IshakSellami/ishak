<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulaire de connexion</title>
	<style type="text/css">

		nav {
  background-color: #333;
  height: 50px;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav li {
  float: left;
}

nav a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

nav a:hover {
  background-color: green;
}
	*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins',sans-serif;
}

section{


	background-color: #CFF4D2;
	padding: 10px;
	display: flex;
	flex-direction: column;
	width: 500px;
}
section h1 {
    text-align: center;
}
form{
	display: flex;
	flex-direction: column;
}
form input {
	margin: 10px 0;
	padding: 10px 10px;
	outline: 0;
	border: 3px solid #000;
	border-radius: 6px;
}

form input[type='submit'] {
  background-color: green;
  border: 0;
  color: #fff;
  margin-top: 5px;
  padding: 10px 20px; /* Augmenter les valeurs pour augmenter la taille */
  width: 20%;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: darkgreen;
}
form input[type='reset'] {
  background-color: red;
  border: 0;
  color: #fff;
  margin-top: 5px;
  padding: 10px 20px; /* Augmenter les valeurs pour augmenter la taille */
  width: 20%;
  cursor: pointer;
}
input[type="reset"]:hover {
  background-color: darkred;
}
.input-container {
  display: inline-block;
}

.input-container input {
  margin-right: 10px; /* Ajustez la valeur de la marge selon vos besoins */
}




.erreur{
	color: red;
	margin: 10px 0;
	text-align: center;
}
.message{
	color: #fff;
	font-size: 25px;
}
.title {background:radial-gradient(circle, #329D9C, #56C596  );
			color: black;
			height: 50px;
      font-style: italic;
      text-align: center;
		}
body{
	background:radial-gradient(circle, #329D9C, #56C596  );
}
h2{
	text-align: center;

}
a[href="connexion-admin.php"], a[href="deconnexion-admin.php"] {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
  text-align: center;
  border-radius: 5px;
  margin-left: 10px;
}

a[href="connexion-admin.php"] {
  background-color: #3498db;
  color: #fff;
}

a[href="connexion-admin.php"]:hover {
  background-color: #2980b9;
}

a[href="deconnexion-admin.php"] {
  background-color: #e74c3c;
  color: #fff;
}

a[href="deconnexion-admin.php"]:hover {
  background-color: #c0392b;
}

	</style>
</head>
<body>
	<div class="title"><h1><u>MONVOYAGE213 </u></h1></div>
<nav>
  <ul>
     <li><a href="index.php">Accueil</a></li>
    <li><a href="programme-client.php">Programme</a></li>
    <li><a href="decouvrir.php">Découvrir</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="bonsplans.php">Bons plans</a></li>
    <li><a href="guide.php">Guide d'utilisation</a></li>
    <li><a href="reservation.php">Reserver</a></li>
    <?php  
        if (! empty($_SESSION['logged_in'])) {?>
	<li><a href="programme-admin.php">Programme Admin</a></li>
	<li><a href="deconnexion-admin.php">Se déconnecter</a></li>
	<?php 		}
	else 
	?>
	<li><a href="connexion-admin.php">Connexion</a></li>
	<?php ;?> 
  </ul>
</nav>
<br>

<h2><i>Bienvenue chèr(e) admin !</i></h2>
<br>
<br>
	<section style="margin: 0 auto;">
    <h1>Connexion</h1>
    <form action="config.php" method="post">
        <label>Adresse Mail</label>
        <input type="text" name="email" placeholder="Entrez votre adresse mail" required>
        <label>Mot de passe</label>
        <input type="password" name="mdp" placeholder="Entrez votre mot de passe" required>
        <label>
            <input type="checkbox" name="robot" required>
            <b>Je ne suis pas un robot !</b>
        </label>
        <div class="input-container">
        <input type="submit" class="Valider" value="Valider">
        <input type="reset" name="Annuler" value="Annuler">
        </div>
    </form>
</section>


</body>
</html>
