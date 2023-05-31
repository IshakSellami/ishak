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

	if (isset($_POST['entrer'])) {
		$email = $_POST['email'];
		$psw = $_POST['psw'];

		$record = mysqli_query($db, "SELECT * FROM admin WHERE email='$email' AND passe='$psw'") ;
		$n = mysqli_fetch_array($record);
if($n==1){
$_SESSION['message'] = $n['succee']; 
}
else {

$_SESSION['message'] = $n['echouee']; 
}
		$_SESSION['message'] = $n['nom']; 

	

		
		 
		header('location: login.php');
	} ?>

