
<?php  include('server.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM voyage WHERE id=$id");

		
			$n = mysqli_fetch_array($record);
			$depart = $n['depart'];
			$arrivee = $n['arrivee'];
                        $prix = $n['prix'];
                        $date = $n['date'];
                        $heure = $n['heure'];
                        $immatriculation = $n['immatriculation'];
		
	}
	else $update = false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>BusWay213</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="title"><h1><u>MONVOYAGE213</u></h1></div>
<style type ="text/css">
	.title {background:radial-gradient(circle, #329D9C, #56C596  );
			color: black;
			height: 50px;
      font-style: italic;
      text-align: center;
		}
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


.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
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
body
        {background:radial-gradient(circle, #329D9C, #56C596  );}
a[href="deconnexion-admin.php"]:hover {
  background-color: #c0392b;
}

</style>
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
  </ul>
</nav>
<table>
	<thead>
		<tr>
			<th>départ</th>
			<th>arrivée</th>
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
			<td>
				<a href="programme-admin.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Modifier</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Supprimer</a>
			</td>
		</tr>
	<?php } ?>
</table>

	<form method="post" action="server.php" >
	<input type="hidden" name="id" value="<?php echo $id; ?>">

		<div class="input-group">
			<label>départ</label>
			<input type="text" name="depart" value="<?php echo $depart; ?>">
		</div>
		<div class="input-group">
			<label>arrivée</label>
			<input type="text" name="arrivee" value="<?php echo $arrivee; ?>">
		</div>
		<div class="input-group">
			<label>prix</label>
			<input type="int" name="prix" value="<?php echo $prix; ?>">
		</div>
		<div class="input-group">
			<label>date</label>
			<input type="date" name="dat" value="<?php echo $dat; ?>">
		</div>
		<div class="input-group">
			<label>heure</label>
			<input type="time" name="heure" value="<?php echo $heure; ?>">
		</div>
		<div class="input-group">
			<label>immatriculation</label>
			<input type="int" name="immatriculation" value="<?php echo $immatriculation; ?>">
		</div>
		
		<div class="input-group">
			
		<?php if ($update == true): ?>
			
		<button class="btn" type="submit" name="update" style="background: #556B2F;" >Modifier</button>
	
		<?php else: ?>
			
		<button class="btn" type="submit" name="save" >Enregistrer</button>
			
		<?php endif ?>
	</div>

		
	</form>
	

</body>
</html>
