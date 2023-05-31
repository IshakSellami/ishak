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
	$nom = "";
	$prenom = "";
	$email = "";
	$tel = null;
	$depart = "";
	$arrivee = "";
	$jours = null;
	$heure = null;
	

	if (isset($_POST['save'])) {
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$tel = $_POST['telephone'];
		$depart = $_POST['ville_depart'];
		$arrivee = $_POST['ville_arrivee'];
		$jours = $_POST['date_depart'];
		$heure = $_POST['heure_depart'];
		
		$req = mysqli_query($db, "SELECT * FROM voyage WHERE depart='$depart' AND arrivee='$arrivee'AND date='$jours'AND heure='$heure'") ;
		$num_ligne = mysqli_num_rows($req) ;
		if($num_ligne> 0){
		mysqli_query($db, "INSERT INTO client (nom, prenom, email, tel, depart, arrivee, jours, heure) VALUES ('$nom', '$prenom', '$email', '$tel', '$depart', '$arrivee', '$jours', '$heure')"); 
		$_SESSION['message2'] = "Vous avez réservé une place"; 
		header('location: tarif.php');
		}
		else {

		$_SESSION['message2'] = "Il n'existe pas un voyage avec les informations entrées .. vérfier le programme"; 
		header('location: reservation.php');
		}
		
	}

?>
