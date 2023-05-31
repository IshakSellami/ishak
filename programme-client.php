
<?php  include('server.php'); ?>

<!DOCTYPE html>
<html >
<head>
    <title>Programme de voyage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<style type ="text/css">

table {
  border-collapse: collapse;
  width: 80%;
  margin: 20px auto;
  background: linear-gradient(to bottom, #6fa1d6, #8dc5e4);
}

th, td {
  padding: 12px 15px;
  text-align: center;
  border: 1px solid ;
}

th {
  background-color: #223b70;
  font-weight: bolder;
  text-transform: uppercase;
  color: white;
}

tr:nth-child(even) {
  background: linear-gradient(to bottom, #d7e5f5, #ffffff);
  font-weight: bolder; 
  color: black;
}

tr:hover {
  background: linear-gradient(to bottom, #00b300, #00e600);
}

td:nth-child(3), td:nth-child(4), td:nth-child(5) {
  font-weight: bolder;
  color: black;
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
h1{text-align: center;
text-decoration: italic;
}

h3{text-align: center;
color: red;
text-decoration: underline;}

.title {
        background:radial-gradient(circle, #329D9C, #56C596  );
        color: black;
        height: 50px;
        font-style: italic;
        text-align: center;
        }
body
        {background:radial-gradient(circle, #329D9C, #56C596  );}

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


        
</style>
<div class="title"><h1><u>MONVOYAGE213</u></h1></div>
<?php $results = mysqli_query($db, "SELECT * FROM voyage"); ?>
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
<h1>Voici le programme de voyage:</h1>

<table>
    <thead>
        <tr>
            <th>depart</th>
            <th>arrivee</th>
            <th>Prix</th>
<th>Date</th>
<th>Heure</th>
<th>Immatriculation</th>
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['depart']; ?></td>
            <td><?php echo $row['arrivee']; ?></td>
                        <td><?php echo $row['prix']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['heure']; ?></td>
                        <td><?php echo $row['immatriculation']; ?></td>
            
        </tr>
    <?php } ?>
</table>
</body>
</html>
