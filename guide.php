<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Guide pour le site</title>
  <meta charset="UTF-8">
  <style>
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

    body {
  font-family: Arial, sans-serif;
  margin: 0;
   background: linear-gradient(to bottom, #1c2331, #415f9d);

}

header {
  
  color: #fff;
  padding: 20px;
  background:radial-gradient(circle, #329D9C, #56C596  );
}

main {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h1, h2 {
  margin-top: 0;
  background:radial-gradient(circle, #329D9C, #56C596  );
}

ol {
  margin: 0;
  padding: 0;
  list-style: decimal;
  color: white;
}

footer {
  background-color: #ddd;
  text-align: center;
  padding: 10px;
}
#phrase{
  font-size: 30px;
  font-weight: bold;
  color: black;
  text-align: center;
  font-family: monospace;
  text-decoration: underline;
  background:radial-gradient(circle, #329D9C, #56C596  );
}
.title {background:radial-gradient(circle, #329D9C, #56C596  );
      color: black;
      height: 50px;
      font-style: italic;
      text-align: center;
    }
    a[href="connexion-admin.php"], a[href="deconnexion-admin.php"] {
  display: inline-block;
  padding: 10px 30px;
  font-size: 20px;
  font-weight: bold;
  text-decoration: none;
  text-align: center;
  border-radius: 15px;
  margin-left: 25px;
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

.left{text-align: center;}




  </style>
</head>
<body>
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
  <header>
    <p id="phrase"></p>
<script type="text/javascript">
  
const phrase = "Guide d'utilisation du site pour la réservation de tickets de bus entre wilayas";
const vitesse = 200; // Temps en millisecondes entre chaque lettre

let index = 0;

function afficherLettre() {
  const phraseElement = document.getElementById("phrase");
  phraseElement.innerHTML += phrase.charAt(index);
  index++;
  if (index < phrase.length) {
    setTimeout(afficherLettre, vitesse);
  }
}

afficherLettre();

</script>
  </header>
  <main>
    <div class="left">
      <img src="data:image/png;base64,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">
    </div>
    <br>
    <br>
    <h2>Comment réserver un ticket de bus</h2>
    <ol>
      <li>Accédez à la page d'acceuil.</li>
      <li>cliquez sur le bouton programme pour voir les détails de voyages. </li>
      <li>cliquez sur le bouton reserver pour affecter votre réservation.</li>
      <li>remplissez toutes les informations.</li>
      <li>veuillez vérifier toutes les informations remplies s'il vous plait.</li>
      <li>cliquez sur le bouton réserver pour passer à l'étape de paiement.</li>
      <li>Effectuez le paiement en ligne.</li>
      
    </ol>
    
  </main>
  <br>
  <br>
    <br>
      <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>


  <footer>    
    <p>Copyright © 2023</p>
  </footer>
</body>
</html>
