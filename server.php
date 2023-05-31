<?php 
	session_start();
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'voyage');
 
/* Attempt to connect to MySQL database */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// initialize variables
	$depart = "";
	$arrivee = "";
	$prix = null;
	$dat = null;
	$heure =null;
	$immatriculation =null;



	if (isset($_POST['save'])) {
		$depart = $_POST['depart'];
		$arrivee = $_POST['arrivee'];
		$prix = $_POST['prix'];
		$dat = $_POST['dat'];
		$heure = $_POST['heure'];
		$immatriculation = $_POST['immatriculation'];
		$nombre = 1;

		mysqli_query($db, "INSERT INTO voyage (depart,arrivee,prix,date,heure,immatriculation,nombre) VALUES ('$depart', '$arrivee','$prix','$dat','$heure','$immatriculation','$nombre')"); 
		$_SESSION['message'] = "destination ajoutée"; 
		header('location: programme-admin.php');
	}

if (isset($_POST['update'])) {
	
	$id = $_POST['id'];
	
	$depart = $_POST['depart'];
	
	$arrivee = $_POST['arrivee'];

	$prix = $_POST['prix'];
	$dat = $_POST['dat'];
	$heure = $_POST['heure'];
	$immatriculation = $_POST['immatriculation'];
	
	
	mysqli_query($db, "UPDATE voyage SET depart='$depart', arrivee='$arrivee', prix='$prix', date='$dat', heure='$heure', immatriculation='$immatriculation'  WHERE id=$id");
	
	$_SESSION['message'] = "Mise a jours effectue!"; 
	
	header('location: programme-admin.php');
}


	
if (isset($_GET['del'])) {
	
	$id = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM voyage WHERE id=$id");
	
	$_SESSION['message'] = "Voyage annule!"; 
	
	header('location: programme-admin.php');
}

?>

