<?php  include('cnx.php'); 
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Busway213 connexion</title>
<style>
.form{
border: 3px solid #f1f1f1;
}
input[typt=text],input[type=text]{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	box-sizing: border-box;
}
.button{
	background-color: whitesmoke;
	color: red;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	cursor: pointer;
	width: 100%%;
}
.button:hover{
	opacity: 0.8;
}
.cancelbtn{
	width: auto;
	padding: 4px 4px;
	background-color: red;
}
.imgcontainer{
	text-align: center;
	margin: 24px 0 12px 0; 
}
.img.avatar{
	width: 40%;
	border-radius: 50%;
}
.container{
	padding: 16px;
}
.span.psw{
	float: right;
	padding-top: 16px;
}

	.Entrez{
	width: auto;
	padding: 4px 4px;
	background-color:green;
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
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

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
        if (isset($_SESSION['user'])) {?>
	<li><a href="programme-admin.php">Programme Admin</a></li>
	<li><a href="deconnexion-admin.php">Se déconnecter</a></li>
	<?php 		}
	else 
	?>
	<li><a href="connexion-admin.php">Connexion</a></li>
	<?php ;?> 
  </ul>
</nav>
<form method="post" action="cnx.php">
</div>
<div class="container">
<label for="uname">
<b>Email</b></label>
<br>
<input type="email"placeholder="Entrez votre email" name="email"required>
<label for="psw">
	<br>
	<br>
<b>Mot de passe</b></label>
<br>
<br>
<input type="Password" placeholder="Entrez Mot de passe" name="psw" required>
<button type="submit" class="Entrez" name="entrer">Entrer</button>
<button type="button" class="cancelbtn" name="cancel">Annuler</button>
<br>
<br>
<label>
<input type="checkbox" checked="checked" name="remember">
voulez-vous enregistrer les informations?</label>
</div>
<div class="container" style="background-color: #f1f1f1">
<span class="psw"><a href="#">Mot de passe oublie?</a>
	<a href="index.php">Retour</a>
</span>
</div>
</form>	
</body>
