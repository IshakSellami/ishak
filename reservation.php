<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Réservation</title>
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
    form {
  width: 50%;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  background:radial-gradient(circle, silver, #56C596  );
  padding: 60px;
  border-radius: 10px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}
.date, .time {
  display: inline-block;
  text-align: left;
}

.date {
  margin-right: 20px;
  text-align: left;
}
.time {
  margin-right: 20px;
  text-align: left;
}
label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="time"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 10px;
}

input[type="submit"],
input[type="reset"],
.button {
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
  transition: background-color 0.3s ease;
  width: 120px; /* Ajout de la largeur fixe */
}

input[type="submit"]:hover {
  background-color: #2e7030;
}

input[type="reset"]:hover {
  background-color: #c62828;
}

.title {background:radial-gradient(circle, #329D9C, #56C596  );
      color: black;
      height: 50px;
      font-style: italic;
      text-align: center;
    }
    .msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
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
  margin-left: 65px;
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
body
        {background:radial-gradient(circle, #329D9C, #56C596  );}


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
<div class="date">Date : <span id="date"></div>
<div class="time">Heure : <span id="time"></div>
  <script>
    function updateClock() {
      var now = new Date();
      var date = now.toLocaleDateString();
      var time = now.toLocaleTimeString();
      document.getElementById("date").textContent = date;
      document.getElementById("time").textContent = time;
    }

    setInterval(updateClock, 100);
  </script>
<?php if (isset($_SESSION['message2'])): ?>
  <div class="msg">
    <?php 
      echo $_SESSION['message2']; 
      unset($_SESSION['message2']);
    ?>
  </div>

<?php endif ?>
<form method="post" action="server-client.php" >
  <h2>Réserver un billet de bus !</h2>
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" required><br>

  <label for="prenom">Prénom :</label>
  <input type="text" id="prenom" name="prenom" required><br>

  <label for="email">Email :</label>
  <input type="email" id="email" name="email" required><br>

  <label for="telephone">Téléphone :</label>
  <input type="tel" id="telephone" name="telephone" required><br>

  <label for="ville_depart">Ville de départ :</label>
  <input type="text" id="ville_depart" name="ville_depart" required><br>

  <label for="ville_arrivee">Ville d'arrivée :</label>
  <input type="text" id="ville_arrivee" name="ville_arrivee" required><br>

  <label for="date_depart">Date de départ :</label>
  <input type="date" id="date_depart" name="date_depart" required><br>

  <label for="heure_depart">Heure de départ :</label>
  <input type="time" id="heure_depart" name="heure_depart" required><br>
  <br>
  <label>
            <input type="checkbox" name="robot" required>
            <b>Je ne suis pas un robot !</b>
        </label>
        <br>

  <input type="submit" name="save" value="Réserver" class="button"><br>
  
  <input type="reset" value="annuler" class="button">
</form>

</body>
</html>
