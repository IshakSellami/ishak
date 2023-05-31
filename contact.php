<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>Contactez-nous</title>
    <style>
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
input[type="submit"] {
   background-color: black;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
input[type="reset"] {
  background-color: black;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

input[type="reset"]:hover {
  background-color: #d32f2f;
}
.title {background:radial-gradient(circle, #329D9C, #56C596  );
      color: black;
      height: 50px;
      font-style: italic;
      text-align: center;
    }

.image{text-align: center;}

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
  <?php     }
  else 
  ?>
  <li><a href="connexion-admin.php">Connexion</a></li>
  <?php ;?> 

  </ul>
</nav>
    <header>
      <h1>Contactez-nous</h1>
    </header>
    <div class="image">
    <img src="data:image/png;base64,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">
  </div>
    <main>
      <p style="text-align: center;">Nous sommes heureux de vous offrir la possibilité de réserver vos billets de bus en toute simplicité et en toute sécurité, directement depuis notre site web. N'hésitez pas à nous contacter si vous avez des questions ou des préoccupations concernant votre réservation de billets de bus entre les wilayas.</p>
      <strong>Pour nous contacter, veuillez remplir le formulaire ci-dessus :</strong><br>
      <br>
      <form action="#" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" placeholder="Nom Complet" id="nom" name="nom" required />

        <label for="email">Email :</label>
        <input type="email" placeholder="Veuillez entrer votre email" id="email" name="email" required />

        <label for="sujet">Sujet :</label>
        <input type="text" placeholder="citez votre commentaire" id="sujet" name="sujet" required /><br>
        <label>
            <input type="checkbox" name="robot" required>
            <b>Je ne suis pas un robot !</b>
        </label>


        <input type="submit" value="Envoyer">
        <input type="reset" name="annuler" value="annuler">
      </form>
    </main>
    <footer style="text-align: center;">
      <p><b>Pour nous contacter par e-mail, veuillez envoyer un message à l'adresse suivante :</b></p>
        <p>ishaksellami26@gmail.com</p>
        <h3>Ou</h3>
        <p>waeltouahri@gmail.com</p>

        <p><b>Pour nous contacter par téléphone, veuillez composer le numéro suivant :</b></p>
        <p>+213 657 57 08 86</p>
         <h3>Ou</h3>
        <p>+213 659 02 55 25</p>

    </footer>
  </body>
</html>
