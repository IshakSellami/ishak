<?php
session_start(); ?>
<html lang="fr">

<head>
	<meta charset="UTF-8">

    <title>Paiement</title>

</head>
<style type="text/css">
  a[href="connexion-admin.php"], a[href="deconnexion-admin.php"] {
 display: inline-block;
  padding: 10px 30px;
  font-size: 20px;
  font-weight: bold;
  text-decoration: none;
  text-align: center;
  border-radius: 15px;
  margin-left: 15px;
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

  body {
  font-family: Arial, sans-serif;
  background:radial-gradient(circle, #329D9C, #56C596  );
  color: black;
}

header {
  background:radial-gradient(circle, #329D9C, #56C596  );
  color: black;
  padding: 20px;
  text-align: center;
}

h1 {
  background:radial-gradient(circle, #329D9C, #56C596  );
  margin: 0;
}

main {
  padding: 20px;
}

form {
  background:radial-gradient(circle, #329D9C, #56C596  );
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px #ccc;
}
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

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
}
  .title {background:radial-gradient(circle, #329D9C, #56C596  );
      color: black;
      height: 50px;
      font-style: italic;
      text-align: center;
    }
    .image{text-align: center;}
</style>

  <div class="title"><h1><u>MONVOYAGE213</u></h1></div>
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
<div class="image" ><img src="https://www.certinter.com/images/page-en-construction-1.png" class="center">
</div>
</body>

</html>
