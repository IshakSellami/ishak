<?php
session_start();
session_destroy(); ?>
<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acceuil</title>
	<style>
	

		.title {				background: radial-gradient(circle, #329D9C, #56C596  );
			color: black;
			height: 50px;
      font-style: italic;
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
.Intro{
                width:100%;
				height: 130px;
				background: radial-gradient(circle, #329D9C, #56C596  );
				text-align: left;
				padding: auto 0px;
				margin-left: auto;
				margin-right: auto;
				display:inline-table;
			}
.login{
			    width: 100%;
				height: 100px;
				background: radial-gradient(circle, #329D9C, #56C596  );
				text-align: right;
				padding: auto 0px;
				margin-left: auto;
				margin-right: auto;	
				font-family: monospace;
				color: black;
			}
.nav{
			background: rgba(0, 0, 0, 0.7);
			width: 100%;
			height: 92px;
			position: fixed;
			border-bottom: 1px solid red;
			}
			button[type="button"] {
  background-color:  green;
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

button[type="button"]:hover {
  background-color: green;
}
.Commencer{
	text-align: center;
}

.images{
	text-align: center;
	background-repeat: no-repeat;
	width: auto;
	height: auto;
	background: radial-gradient(circle, #329D9C, #56C596  );
}
h3{
	text-align: left;
}
h4{text-align: center;}
#testimonials {
	background-color: #eee;
	padding: 20px;
}
.new{background:radial-gradient(circle, #329D9C, #56C596  );}
.testimonial {
	border: 1px solid #ccc;
	border-radius: 5px;
	padding: 20px;
	margin-bottom: 20px;
	background: radial-gradient(circle, #329D9C, #56C596  );
}

.testimonial p {
	margin: 0;
}

.testimonial .name {
	font-style: italic;
	text-align: right;
	margin-top: 10px;
}

#subscribe {
	background:radial-gradient(circle, #329D9C, #56C596  );
	color: black;
	padding: 20px;
	text-align: center;
}

#subscribe h2 {
	margin-top: 0;
}

#subscribe form {
	display: inline-block;
	margin-top: 20px;
}

#subscribe label {
	display: block;
	margin-bottom: 10px;
}

#subscribe input {
	padding: 10px;
	border-radius: 5px;
	border: none;
	margin-bottom: 10px;
	width: 300px;
}

#subscribe button {
	padding: 10px 20px;
	border-radius: 5px;
	border: none;
	background-color: #fff;
	color: #f00;
	cursor: pointer;
}
#features {
	background:radial-gradient(circle, #329D9C, #56C596  );
	color: black;
	padding: 20px;
	text-align: center;
}

#features h2 {
	margin-top: 0;
}

.feature {
	display: inline-table;
	width: 300px;
	margin: 20px;
}

.feature i {
	font-size: 20px;
	margin-bottom: 20px;
}

.feature h3 {
	font-size: 20px;
	margin-bottom: 20px;
}

.feature p {
	font-size: 20px;
	margin-bottom: 20px;
	text-align: left;
}
#about {text-align: right;
	background:radial-gradient(circle, #329D9C, #56C596  );
	padding: 20px;
}

#about h2 {text-align: right;
	margin-top: 0;
}

#about p {
	text-align: center;
	font-size: 16px;
	line-height: 1.5;
	margin-bottom: 20px;
	height: 50px;
	background-color: silver;
}

.new{
	
	text-align: center;
}
.populaires-voyages {
	background:radial-gradient(circle, #329D9C, #56C596  );
  margin-top: 50px;
  text-align: center;
}

.populaires-voyages h2 {
  font-size: 28px;
  margin-bottom: 20px;
  text-align: center;
  background-color: #86E3CE;
}

.voyages {
	background:radial-gradient(circle, #329D9C, #56C596  );
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  text-align: center;
}

.voyage {
	background:radial-gradient(circle, #329D9C, #56C596  );
	text-align: center;
  width: 30%;
  margin-bottom: 30px;
}

.voyage img {
	text-align: center;
  width: 50%;
  height: 100px;
  border-radius: 5px;
}

.voyage h3 {
	text-align: center;
  font-size: 22px;
  margin: 10px 0;
}

.voyage p {
  font-size: 18px;
  margin-bottom: 10px;
}

.voyage a {
	text-align: center;
  display: inline-block;
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  font-size: 18px;
}

.voyage a:hover {
  background-color: #3e8e41;
}
.voyages{
	width: 100%;
  height: auto;
  border-radius: 5px;
  height: 100px;
}
.voyages p{
	text-align: center;
	text-decoration: overline;
}
.Intro h1{
	text-align: center;
}
#phrase{
	font-size: 30px;
	font-weight: bold;
	color: black;
}
.more-voyages {
	text-align: left;
  position: relative;
  display: block;
  background:radial-gradient(circle, #329D9C, #56C596  );
}

.btn-more {
  background-color: green;
  color: white;
  padding: 8px 16px;
  border: none;
  cursor: pointer;
}

.more-options {
  display: none;
  position: absolute;
  z-index: 1;
  top: 100%;
  left: 0;
  background:radial-gradient(circle, #329D9C, #56C596  );
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  min-width: 160px;
}

.more-options a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.more-options a:hover {
  background-color: #56C596;
}

.more-voyages:hover .more-options {
  display: block;
}
.testimonial{text-align: center;}
a[href="connexion-admin.php"], a[href="deconnexion-admin.php"] {
   display: inline-block;
  padding: 10px 30px;
  font-size: 20px;
  font-weight: bold;
  text-decoration: none;
  text-align: center;
  border-radius: 15px;
  margin-left: 280px;
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
	<?php 		}
	else { 
	?>
	<li><a href="connexion-admin.php">Connexion</a></li>
	<?php };?> 
    

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

		setInterval(updateClock, 1000);
	</script>

		<div class="Intro">		<h1>Réservation de tickets de bus entre wilayas</h1>

			<p style="text-align: center;">Bienvenue sur notre site de réservation de billets de bus entre les wilayas. Nous sommes une plateforme en ligne qui facilite la réservation de billets de bus à travers différentes wilayas en Algérie. Nous nous engageons à offrir à nos clients une expérience de réservation de billets de bus simple, rapide et sécurisée.</p></div>
			<div class="new"><img src="https://t3.ftcdn.net/jpg/03/34/78/62/240_F_334786208_HPDuPItbU6r8lrRRazhrGb2SmnkG6zUE.jpg">
				<img src="https://t4.ftcdn.net/jpg/03/96/55/29/240_F_396552956_VAZMfge1XgKaCY3UWOglYHdk7UNaPPck.jpg">

			</div>


 <div class="Commencer">
 	<p id="phrase"></p>

  <button type="button" onclick="Commencer()">Commencer</button>
</form>

<script>
	const phrase = "Réserver un billet !";
const vitesse = 70; // Temps en millisecondes entre chaque lettre

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

function Commencer() {
  window.location.href = "reservation.php";
}
</script>	
</div>
<div class="images">
	<h3><b>Voyagez dans un bus: Familial, Confort, Securisé et prix compétitif</b></h3>
<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBgUFRUZGRgaGxoZGxsbGhsbIRghGhsbGhsdGhsbIS0kIR0rIRkZJTclKi4xNDQ0GiQ6PzozPi0zNDEBCwsLEA8QHxISHTUqIyozMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMxMzMzMzMzMzMzMzMzMzMzM//AABEIAKgBLAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAgMEBgcAAQj/xABHEAACAAMFBAYHBgUCBAcBAAABAgADEQQFEiExBkFRYRMicYGRoQcyQlKxwdEUI3KS4fBigqKywnPxU5Oj0hUzQ0RUg8MW/8QAGgEAAwEBAQEAAAAAAAAAAAAAAQIDAAQFBv/EACQRAAICAgIDAQADAQEAAAAAAAABAhEDMRIhE0FRBBQiYXEy/9oADAMBAAIRAxEAPwCzbFWcpYbOp16MN+clh8YPCM3se32BFQYaKoUVXcBQaMN3KClk9IUomjy8uMtg1O1Wwn4xVxZzIuwhQiJd14yp6dJKcMvgQeDA5g8jEwQAnoMU3b/YtbYnSywFtCDI6dIB7Dc+B3RcxCoAy6PlO0SWRyjqVZSQykUII1BjxJhGkbf6RtiBa0NokKBaEHWXTpVG78Y3Hfp2Ye6FSQQQQaEHIgjUEcYWiidl59H22rWOZ0U1i1nc57+iJ9pf4TvHfxru0marKGUhlYAgg1BB0IMfJ1Y0b0a7dfZmWy2hvuGNFc/+kTuP8B8uzRgSXs3CseiG0YHQ1hwRhRVY4gEUIqDkRxB1jwQoRjGP3nd5kO8r/hPVOaVDp/Tl4xFvYmXJnstKhlcVzHWw/OsXfbqxAPLnUyast/Nl8sYinW2UWs00HMiUyntlk/pHDONToyZWrMvUX8I+EOYY6wistPwiHsMdZQcmp1U/D/kYSiRKdOonYf7jEefVVdhqqOwB0qorGFHESHAsV5b6nUyCaV0P1gpKs16MoZbE5VhUESnIIOYI5Rg0EFEOUgYbDev/AMKZ/wAqZDn2K9zl9jmf8l41o3EJAQ5WBIuy991kcf8A1N84Wtx3w3/tnH8lPjGs3EKKRDoQ8D4QNGy98tT7lu/ox8TEpNkb7Ps07XlD5xrNxJYQ8D4R2E8Dwjpewl7nWZLU82X5KYB7QXZarBarPLtE/pFmAMcIoFJJUjnQkZ89IKkZxDQMchpPln35bIe2W1R5PDs1KMfHxziPbDhEt/cmrXsmKUPnhgiiNtpOKzI/uuB+YFPiwiX6PrShsCy2wdSc6muTZ0IzO6jbofvqV0lkmgZkKWHavWHmIrno3THOnSiKoCsyh3aj6Qsho9msSZhSWolgYqCpbMVGmXHnAydYA0wzWpiIoKUyrqdII4oYcxGUmzpjBJENLNgGFWbPhqYd/wD5QtmUWp4tn3x4/KGHRia1MKlFehnfowYTI9D5wkLHuGPTPPot+xl/PImBqkqCA43Mh171zI/WNuWYtK1FO3jHzrdKZTPwEeRjUZLM0tKzWHVXReQMRzyUEm/Zoq3RfcY4iFAxQxIJGHpXoOR398c3SKQUnvllnujn88R+DL0s5TXrDLXPSM29JOxazg1rsoXpAKzEFOuB7QHvDziV9mUazmBOtBWvnDiWJc6TXz/ggeaIeLTMLjhF92t2RArOs7FjmXTDQ82XjzEUKKRkpK0xjU/Rlt10dLJaSzKSBLfXDuwNXdw8OEW+8PSRZpcwS1R5jVIfCVASmgqdW5DTjujA7MesDwz8NPOCVhOJ8R1Jrp4QboVxs1yf6T1xAJIyyqWfTPPIDhnDl2ekpXnhZqLKk0IxHEzV9knDoO7LjGbMmdf3l/tCSuR5Q3ITh/rN0vuZKtFkfDMX1caE7mXrL3GlOwxQLM6zFmYdHl4x/OlGHiII7OqJtjRnmFcKspyOQQkCpA4ARWrBcxwAraHApLqc6delAKHiY5ZtSfbGaSBV1Zyk/DEwJCLNJwAp7rzF8HYQ+SAKmLoI+yfdp/N/dDFpl9V/9Kb/AGGB9qv/AKqrLl4sNasctc8hr8IiG/nNQyrQq6ZVFMakHeYHJDcWC5Y6rV4GnZT4x9I7M20fZbOGI/8AKl1/II+d/spCsQQeqct47o2i5JdbNI/00/sETyZOKtdjqN7LRMvShypQE/pCbLfOI0YdkAmNN8R2tKqAcVTnHK/0S5dLoosaosE21EMatqQRnCmvoLUCjZ0EVhLRjpvB0h0uNBu8tY0v0y9DLFEsL34AAcI7K5n6RDn7Q4tFpTdWA0ydlU59kREYE61EKv0TfsDxxRaZG0QrmppTdTKM89M1oWbLs05VIZHcVNNCAw05pFhE4fpFf25l9JY3y9Uq3gaHyJhofpk5JMzxpJ0LR8ao/vIp/flDF7SvuJvEJjHbLIf/ABgTcl4v9ms2FcWZRt+GmVTmMsotDAOCu5gV/MKfOPROQ9sLCZLI3MvxEVD0dv0d5GWa9eW8ugpmUIO/8DRYtlXJlIDqBhPauR+EViS5s99SW0++w1/1RT/9DCy0NDZsJTk3gDCWT8f5YmdI41Yd6iPWntxX8v6xAtbBzSx7reQhvov4P6v0giZzH2gP5RDZmt7x8vpGBbPnFbJMPs+YhX2N+A8YMLLru/YjgnAfvvj1+CODyMZsDBBg3mobLjlF5ueczyUKt6q4CKZhlyI/fGKPaJWEhh7XLeP2ItexNvVJ4R6FJtFqfZceqe/TtpEf1YucK+D458ZX9Cr9JXfCj0hoMFeMXhLInuiHRZl3AR5fiR18/wDCiJZphPqDLiNYnJIfcvgIt62deAhQkiD40bmyp/Zphp1PKKRtnsRMIa0yUz9aYijXi6DjxG/WNlEkR70Yh4RUXaA22fK0ganlE+xmgB4Ui3ele5pVntSNJXCZyM7KNA2KmJRuxZ15iKnLl0WkVuwBlVxHI8/3/vrWPUAwtU8KfusJXrAHWPQuvZDCFq2ZtuGyTJdcw4A7Jgzy/laDVksgKPKUZYEI5VDkecZ5ZrwaRMBABDLRlOhFfI56840LZm3JOd3TTo5eR1UguCDzjmnCm39FkgFeqfeM1KB8Mz86gnzrAK/JxSUaascI74st+UqhGhQj8rsIrN8mpReJJ8KRZP8ApY8FbSB13XDaJnWDU5ajwiwWPY2ew9hfGCez1slAAGYgbgWFYu1mKChLKFI1JAHiY43kk2eosUEjNry2StEhekIUotK0O7TMdhjSbisuKRJKk0MtPDCBEi3PLmy3lo6PVSKBgfhCNlphWyy0zqmNO5WIHlSNKTqmc+SKjTQ5PsVBm1Ne+IVlskogYycuNe+DjTQadUmEkJl1Ik2ifJgC0lEwqp9YjPlvh+zohNFFOZpnBF7NKY+oNOUefZZYAotIVs3NkJ7CCONTmOURrTdsuXVlrU7syMoIiRTSFgsBrvgJpegeRlXaYxOSN+UwzbpDzJUxCjdZGGm8qaecXBHFNVrXQw6s8bgpO6gEVhC+zeSzIdg3DSZsv3XqO+h+sWlMoq2zKdFeFqkEUBLgD8LkDyIi2YY9JO0c8tg+5upMmp7s1z3P1x/dFY2+BlWpJoyIKOO1Sf8AtWLOgw2lx7yI/hVD/aIC+kmTVJb8mHmp+AaM9Gjs19JmJQ2tQD4isDbsvGZMmTEeVgCGgbPr8xlDOyNs6WxWd95loD2qMJ8xBZjz7hHM9lxt8zoedYTg5eYiQuY0hGDsjAMTlaDLnvj0ChPDs+sIckNSpoRUUr3iEiXX5Ex7p5oi1UKEHUGo+enKsMyJx0zG+oruzFD25w/SmenGIlpl4GB9lsxy5Z/vSFaMjVLg2nMyUMQBdKK/MgZN3jOCy33yjIrqvJpbhwa5UYEesvLiRrFgvPaZZYAlOk123BJihRSoYlsiNMgfhHBlwqMrWjphNtUaGl9/w+cRbftjIlLVqs3urQkxmcy8rQ69eYQDuAC+AEQJh4xLgiistt6ekydn0MpE4FyXPgKD4xT7dtveExiv2t0B/wCGFl4RyKAN5wKt82lYFyTUseUbihgq9pmTXxTJkxzpimMXY97GvdDjLlDV3pXwh6Yu6CYnSm6g7P35Uj2sIs3qD9/vfCoIjI1vGaUpvz884t/ozZlmT0bcqHzYRULw9VTzPmM4k7MW+bImlpc6WKoR99UKwBBCYhmG1pCzVoz0W283qkpuc4f9QkfGAdvl1ZDuFR40ERk2lllJcp1ZWll8TDrKcRB1Ge47omdIk1CUdWpQ5EHeN2ohKfChsXUlYXu+5KjFXqAE0Cqd2RqRWoPjFhu27emsdDTECwBIFKVyyIpAi12l0kJLWoDgLiAO/KmXZB+4FmpI6OYlEANSEc5d4y7eUclNnr2lonXHdBkouNgxG/Ai045oBlB25rtAQ4jqzEd5qfMmANyXgxDo2LCnqswIOEiorXh8KRcLtYNKRhoyhh/MMXzimOCk+zk/RKlQ0btG5j4CEtdlRTF5QSjot4o/DlsDm6D727shIuxxoQct5g1HlYV4ImsBPYHFOrWGTYmyqp7KRY6x0K/zxDZVnsFdUOvCEiyKM6UI4CLVHhQcBC/x16ZrMDvlehvsEZCZQ/nQf5KYtczIntMB/TAES32aYtMWFSwGoAmGhPaC3hBZzn2gfCOqCqKROWyBacp8pveSYn5SrD+4xD24lY7Ip91h/UrJ/kImXjkZLcJlPzS2/wC0R7tCmKxvyo35WDfKHegIkejS0O1gShBwtMWh/FiHk0W02px6y+EU30MSsci0JXNJo8GUD4qY0WbYyOBjhyKak2iyB8u2J/vD6TVIrXzhuZZ+KmIhkr7vlCeSS2jGPSCJiUB1zUnceHyhclyynI1GR5EQFuy1UahOunIwbm5MJgyDdVhwI0P74R9BCVnnTjTGZo3jXfl9YjzOumHfqO3h2H6RInmh7coHvamluHShIrqoYDKmhy790GcqVmirdCLOjn1UY57lPxiXZ7KftARwQaLQGmhzypuzMSpG11oQdTo1PESkJ8TnET/xibNtPSTGDOQoJwgZKcgKaaxx5MjkqOiEKdhO1NVjwGQ7ogT4lXnNEsu50Gg4k6CBc2YWlCZxJUjcKiop4Ed8TKIGW8xCkHMjiIkWlYiyzQiFGC92v8PpEudAuxvQwTmaRjD1hPVPKHmMRrCc2ELmPBFYi2ZyzyI+nziDZpZcqgIBZlAJNACSBmdw4xY7iuR7WxlqcK6M3DsG8xd5fo/s8sqEV3NM3cgjnlkoPdDxxtiPIkZ9Y7E6OGkyGmzSz5hSUU6LU+rStWz4CDljuLDLJnSVM926TpKmssgAMoIyauZochu4xqFksQloqClANIbn2HGCN4MUjjS32SeSXooqzTRZUwUArnuqafGnnFvudyBhZloKZVPdqYS11I/rCm4/wmPZez7I2LJl4jIjtHDmPKOXL+bj3HR3Yv1trjLYB27voSZbS5dcc4MuIewtMLN27h3ndGnXQPuJP+mn9gjIPSWiiZZxl1pRP/UNIvvo9vrp7Gis1Xljo249XJa8yuEwYY+Meic8nKXZb46Egx7WMY6PI4x4YDMexwjyseYoAT3hHseCPDGMZR6c7vHRyLSK4gxlnhShde+oPjDVinY5aNxRfhFj9MFnx3a59yZLbxJT/OKVsvOxSJf4APDKGgxZE29spYb3Zks/1hf8ok21MdnmrxRh/SYYvUfczOS4vyMrfKJtm60thxX5Q4gL9CL/AH9sl11RHHczV/vEa50bjQ17YxT0PvgvR096Q471aWf8TG4zZiqrMxoFBJPAAVJiMiyI7N7yeEIonDyipWXbuYyh2swwtmuGZ1qH1aqyAVpT2odkekKRT72TNV94UKw7QcUHxv4LzRgE9MDVGhzUxY7smiZLKk6ihruO4wEmLiUimY6y9u8d8e3RaKNTjHoJ8Wc0laCTklaHJhl3iB9oeufce2CVuFCHGjjPtG/w+ECp7VJpmTrTPsMNKQkULEzEKfsMPqIaEzrq3Oh7f2I8SyueQhx7HhUtmSM6xOduLKRpMI7T9ZJbbiAe8Cn1iLdzYpLrvAxflNfhBa0oJl3O1KvKaW4O/CWKMOyroe6AOz877wqdG+eR+MccXbZ0NUiPaFiA2sFJ6UqOFR4ZQOnLQwzAP2Zs4LIaqICSGgtZXgBHZDUftjnerUGpNB3xHtT4TWLrsBdSTKzJiBgx6tQCFwEkE13kjdwEPCPJ0JOVKw3s/c8xMDoMpY6orhqaZsaDU1i5yrwFMM1SnM+qf5lyHlEiwyAFyFBp++USTLByIjpv0c1C5UtGXEpqDvGcKWXTSh8jAuVZzLdmlGhrmnsv3bjzEGZdHUMBQkabxyMK+jLsaeSTSgzG4+0OH6xTfSNaJ0qSnR5SSR0gqcWZUKPw4iKjs3RdgjjQ+MUT0sz2+yywMiZmFu4VHnhgwf8AZAklRQbZdD2qZZpUtgHZCBiJwjEzzAKUNABTTeY0/YLZN7BLmdJNDtMZCQooqYa0oTmScRqctBFO2Rll7wlci3gsthGxLCSf9n/0qukl/iH0bKHIgyZhxNwyHhX6iJtcohONMrCVo8rHrQhjHFolZQUTHsIaOZtY1mFEx5WE1zjqwLMVz0hycd22ocJeP8jB/lGUbGTPukHAuvgaxtG0krHY7SnvSZo8UaML2Imfd9kw+a1h4bBLRb7YmKW68ZcweKGHLnfFLU8UHwhajMDjl45RE2cP3SDgtPDKKEwJ6Pz0d9KvvdMn9Mw/4iNX23M37FMSVLd2fCjBASwRj1yAMz1ajvjJriGC/ZX+o4/NLf8A7o3cRKWyq0YnaLxlr1TVGGWF1ZCO5gIEzLTn6wzz1/WNyvG4rLaGDTpEt2FAGZQTQbq605aQFsuxV3Mik2ZK0zpiGe/JTTWsU8v+E+B8+ymzy11yzj2VYHx4hRRWoqfDKCUqxU1J7B/tEkIq7vHOOzjZHnQw8kmgLAqMwCCfhSHVs1BkadiL8wYU03h5QxNnkCG4iWezmC64z30/tpA602gGoGYPf5mPbRMJiMErnu0iUysUWXZX72XMkf8AElOg/Fhqv9arFQsMzDMU86eMHNmrWZU1WHssD51iBtJZeitc1F9UOWX8Lddf6WEcepNfTo2iVeS/eMeNG/MPrWA1pEFrZMxIjfwlT3Go+JgTOaKMUZQ5xOkzqQxY7JMmsEloztwUEnyjQ9lvR67Um2tGzzEutO9yD/SO/hGjBy0CUlHZF2c2Qa1kTJ2JJQoaL6z10BPsjtz7I1a6LllypapLXAoAAGunvVzPjXOFWCytKCooRUyGEUWnZTfBhmArTdHQoqOjncnLYiXiArzoV18N8KE5SxVhQ6g8R+9YjLanJOEoxGq0KsO4mBt53rMAXDK0JxE+xupQbjvPDyKi2LYVtdjr1hrxG+G7Ozy4hXPftWEuaKYtGrUHsPGDroBrodDGdrpm6faFy5occ4ofpRlkrIqOriYt+IAYfHPwi7iX4xRPSheIPRSBmRWY3LIqo7+t4CEvi7Qyjy6IPo4UfamYnrCW1Bxqygkdg+MaVapuFGY5BQT4Ri9yW4yJsuaPZarDipyYeBMbFbZDTZTLLYCoDVOjDI07xvhnDik5ewc+Uml6EXfNIlg0BrU4jpnwggkw0zOR4RVlZkOAqAw3FiSOxTQCC7WzDQHWlab+wCBKHI0ZcQrka5xxmU8oDPaR1iDpn21FT5kD+WPHtTVxKc8OQ40oSPl4xL+P8ZVZn8DPSkkiFka90AHvGjY1aqthGu6jEH4CEzr2IR2ropOulBWsK/ztK7GWZN1RYqwl5irmTSKZJ2mlkACcOVWHnXOJX/iAyYsCONRHJzR1+Jh62WgNLfB1iVcBdMRoQBU5CvGMVufZy02M4JsvV1IZeupyAIqBkRTQxcdoL9kYghthWvsSiqsa/wAQqw7qGM22htstpgSyTp9M+kxzXILeyRU1JoDWvCKY5NsGTGlHZoHRsCOqeOhiNc8h0BBVgA8ymW7ESD4RlTSXJAMwknmfrB/Z+Q8ovMaayoi1Y1IANRhpnmTwjoOWg0lFvuzNxmp5hVjcsYjIdlb5W1vVkBeU6FWYAk6lWPBlpWutARoTGlSb2lFEd5iIXFQHYLnvAqc84lNNdlIv0FQ4iFJtUtC6uaUYkcwwDfFiO6HMYIqDXhTMHvgfbrsWawYk1Ap5k/OJ2OYH0kcP3nCTPXeKdoIB+Ucymo3bvHhHsKno4KPCxz3eXhDXRs2gJ45Ew+oz3k5jjEuwXuLI+M0zFKasewRPLLhG12VxxUpJN0B3l8deB+kMTSF9Y0PD9I0qRtZYJ4CzShrrjUinYxGR749tGxF3zv8AysalhUMswt30atRHE/0p7VHV/Ga07Mrs1oo9dIK7V/eLInj2kMtvxSjl/QyeEObR7HWmxnEVLy90xASByYaqfLnE267htFqkGV0bIMSMjOCACKq+WpqpB09kQtOTTXYv/nplds5LoEAJNRQAEk7sgMzrFmuL0e2meQ02klNTizYjkg07/CNH2W2Tk2VMkq9M3IzbzqOyLQlmUZhRl2x0LGls55ZPgGuDZazWZMMtBmOsxFS/4iddTlpnBZUErM1KGgzzwV5+78OzSYigCm6PHpSh00PfFV8JPvsQ9lUjLtpCZTUFGNaZV38j8IF2+9EkJMdiQkoBwwFTh0Kc8yKD6Rnt+bftakMmVLKK2TucmZfdABNAcq58oWTrY0IuWgjtVtgjWgWaytVwGDTdwO9E4mlc9ARv3WHZy1q8tMQw4uqfxDUHt1HGsYraW6Kaj+60a9dstujqoDo2eWTKQBuO8ZQcT5WbJHjQVtN3gVFAK50Oh5g7vhE267xKgy5tcGgY+yeDcuBjrvtyzB0cz1tATlX9Y9tFmKMG4ZBqVy91xvEUffTJ67QTnzejVnbNFUsWFMlAqT4RitvtT2y1M4BrMbqj3VGSjuUZ98Xbb69hKsyyJZoZ3rLWoCDNqcKmi00pigZ6NbuDPMnuOqqlFyr1nHWPKi5fzxzvdF49Rsq6DdFnm3xPkyLLa5bmkstZnQ+q3trXtUU7hAy/7IJdocAqVPWGEg9tQND9Yl3VeEgWeZItOaNMV9WFMsyMOeWEaR3fpXLDySuvSPNxT4Zu2X677ZZb0lBxQOmq5YkPzWETrmmylfogJhYChrRhnwY0p37ozGxMtkmS5y2h5RYF1rLx9SpClwp0YCtOEajdu2timIMVplq2VcVUDcwH07I85TlFda+HqOMZbEvdloyIUDqgN1loTmTTPiYaawWjCaoBTMEuMqdbdXfWLFZ7ZLmZpMRx/Cyt8DDd52tJUtnc5UIpxyhfPN+g+KKMtG1KzDhVAgQkF2YAamuXA007IhttIX9RUUCodphPWFaAS0HWNQd5GsDj0Sky5UtpjdZqVFd9WJNANTr3RB2Uvj7NakmOnWUkhXFOq41U7ssw0Uc5asCgt0Kvu4nlqZsxGlmYay1epmTKmvUlKeooqB1qHQUg3dN0y7FLD2t3eY69SzK7VAIp1sJFD4AczHT7ROtttNrlsBhb7utCJarkuRyLb9KVO+LLd9zLLYzHbHMY1Z2zJPaYmoWu0Pz72VO4NjXJdqYMVcPtMgO7EdSBlWkWVPRvIKhekmIBU0XDmTqSWBJO7uiyyJypvpHs295SjN1HfSGUQORTbV6PbNK64nTTybAa8slEAL6u2WQJctyzFqlBmSaUBy4DLPd52raK2tMCmXMQK1VriqeeFRUsewdtIrlotUqxoSOtMIpU0JNeNNByHeTB6SArZ5Z+ju6Qyg1nTM6DOlRT4Ej+Y8YFXzc0w0mTC5yFGVsSqNacsye8mHLlRpk4WiaMZzZQSKA6AnPXWm7qmJu0m0K2dSkoUmOM1NCEr7RGleH+0Do3YJuS+LTY2rKmFkrmtcj2jTvEabdm26TJYYsqnQg5EH59sZfstKm2hXouLBSpJArWuQyzOUEJlztXOW9ewnzU0gcUw2BQKjt1FDuh52XEBQs50VRiY9wgDNvJzkow+Z8TE3Zm8DLtKuWCg9VmbOnPtyi2T9PVxQuPDckpMLm6LfM6sqQUU72ZAc+/LuiTZPRtaH602aibzSrnv0Fe+NAsVpEwYkcutaYhSncYlMisCGxHPTERoa50OnKPOlnm9npR/LBFfu30e2WWAzBpjD3zl24Rl4xZZVkWUo6MABTWgFI9k2giinI7hVfjWJQxVpT4ZxLk5bKKKj0h6VMDihEO2RMPVoOR+RhsSAueQgZar/lrNlyldS7TEXCDnQmh8qxfDOSkjnzwi4ssYSm+E46ZRWdqNspNkSpq71KhEOWIAGjvouRB48jFFvf0jWosDKVJaFQaEY2rv6xoOG6PQc19PNUGzYHmACpNANScvMxVdoPSBY7MrKHE2ZoEl9ah/if1R415RjF7X5abRXppzuPdrRfyiggKYlLJ8KRx/S8X1tnNtaNLCLLRxVgCWZsILAFjTKueQgDZGGIRCs70wnhCpT0PZ8oSUm+2UUUukWC3IiGXMdcSKwxAcDUEjmK17o1O65jpSaoV1mKua5YhuamlaRmOITJNOIp5Rf8A0b2nHZjJbMy2NPwsMQ8yYvhfTI5lploVZU8ZZMNxyYfWFLMmSRSZ10G/eohT2BW6wyI0IyIPbFb2yvl5VmeU2bv1FbkfWJ4GlYq30RStlDv+3CdaHmKSUxFZdfdBypyOZ741rZm7OhssuUQQ1MTEH2mzPPLTujLdkLCJtrlhvUQ427EzA72wjvjVLzveXLlvMaZgRRUtp2AcTyiME3bZadKooo+28nDPVjkSCO0fPQRWZ9omIKy2C5jFUAgih1BBB8I69dsXtk1UOLowxK4sNaUOZoK58KxEvJyFA4sP1+MdsZqWFnDPG1miTLReEyYaz5UiYchWjo2WQ60sryj2zTrLTOyuK59WcHGhFMEwA7+Na74ATJ7DQnfv/fKPMZHdHn9Ho0HBZrHjLmZNQblaU6gcfvJbuad0Hra+CyyZaTMSOzEzHdiAC1M2cAhdNw00rFGFsYb4l2baAojSZydLJYkgVoyE64W3fCMqM0wtc6PLmTCSHJluoZcwxNfAaQd2k2YM+77PNllens8olsmxOgq2AUGZB0rxPGKG8+xHNXnpywI/njWPZV6y09W0Wo8lpLHjjb4QrQVYMsl7TZR6jQUlbUzyQAWJOQAJPgIHG1yBUrIqSa1mTGfyQIPGsOC+HFQvUB3Swssd5QAnvJjKTDxQXa02t6dJMMsHczHEeyWtXPhTnEqVIlSxjnOe2ZQsfwylJA/nZuyKwLwcVw0WvDInv1iKzs5qTXtjWzUWm3bUUqlnWm4zGzYjlwHIZQFsytMfHMc0GZzJJ3+FAT3QzZZBd1lrqSBU6Cu88oL3hYjLq0o40SnSKKBkIyJO+h5ilD3wKCTZt4iUCwFCNBpnoBlkdwrlkrcYqdpmM7licTMczxP0h55jTHVVzzFPrSvb4xcNkdlquZ07DgQ5LXU61bgKQati6LPsTc/QWZQw67nE3foPCkWT7KOEDzfciX7dT/CKxBmbUmvUlmndFKJWYupyh6y2N5nqjLeToIVZ7PoWz5Qfs00EYQuEDdEUi7Yi77fPkDoknsq19nCRn2g0i0WPbKbLCy3loQKKHLYcZOQ6tDnnnnxipYNYVMs3SIye0oLrzwipX98YRxi/RVZJLpMvD7bOFzkIw30Y5HQUy88ojzfSUyiiyqn8eXjSKbIvJRZTLbNtBx5V7M+6kAps0kwvjiHyy+lqvfb61zuqrCWv8Iqe9ju7hAidf9oanWVSPaRFVu3EBUHspA5U3woJB6WhG29h+6k6eU8j2nGNPxpUj8wLL/MIgN1patvBp4j9I66HdZgKVqCCKbiDlBy8ZUslygoJnXI9xjUso5BqkcqQY2n/AIwPRV5gj2zWOvWbuH1h/oxHrTgoqYzfwA1PSjEdkMsczCHnszZ+HCOZDrWGRg1ddo6pEFLm2oWyTC2F60o2HDQ101P7zirWa0Fd0NWh6tU7xnDRk46FlFS2aDL9KloLmktMPs4j1v5iBQ+AiDed/TLYwmTFVcIIAWtNdcyczFKSXiIUbzSLEigCm4D4QXOT6AoRXaDVwbQTrKX6FJZL4QWmKzUC1oqgMONfCEbT3pOnqGnOWp6qgBVU8lGVeesQJc9Za427hvPZA+02xpjVbw4frBWqDSuyBKVkcOPWBrSlfGkFbVbRMRTQqRWo+kNSpm8w50ct/W14jL9IeM5KLin0xJQjKSk12iGrfv8AfOPJjw/NsLewQw4aH6RGazzKFujfCK1bA1BTWrUpCPodHhbOO6TfEczRxhLTOcAJ03DwEMEjhHM8Nkwpi6WPZ77ZdrWiQgE6yuyzFUZzZbDGGy1ZasOYXlFLBi3+jvaUWK0EOxEqYArEEjCR6rGh0zIPbygntdscGmNOsZVlbrNLrQqTrgrkVOtN0ZJmbM+BiRJlkngOf7rCmsxlvhmqwIPWX1W766A8YItLs4AIJ3aE7xWmddIKMO2bDLoUBapoWpQCuXVGu/U+EdfFoKTEnS2wuQVbnhpqN4INCDwh+y31Ll0ABoBSlcu2gEDb8o2GYpyNVI4EZ/OC9GLBdAlTEM1EVX0dQKUOuQ907vCH5NqLTDKJKpQA/wATVqO4Z+PKKpcV4dDNDH1G6rjip+YyPdFlvyUVZZi7sjzG4/vlBT6Fa7DaXYgILGo4fWJMy80lnBRcoE2e2vMX3aAEtXww8zQwFtK0Y4jmc/GFab2zLrQPSXSJVj1MdHRgsTNelYiPbCK4eBBPAHI98eR0KMQCncIRhLGgjo6AvZmTBKoKR5gjo6ECTrus5ZgQxWm8ZUpmT3AVibNcMDhNa18tfr3x0dFI6E9gucwUVMQ3UnrHXcOEdHQqGEy5PnBGzCWuoHhWPY6GQAjIsUqZoVrw0MA7zsZlOQ1SPZP17qx0dDGOu1Myx7B84n2i0YQAd/wGf0jo6AEhPNLGp7hw5CFM+faSfP6fGOjoYArpIdR46OgmHkm0iXZrxdDVXZTyJFe3iI6OjCjSrLJqVFSak01rrWOtFhlsuQXtAoRHR0GglZdaEjgaQmOjokMewbse0E1VVBnQUBqa5R0dBQGRbZOmMgDOzLWtGNaE7xXMRAoTmBlHsdGCN0iZJlM6NQ6EGniKx0dGMRcJrTfF3kzjMsaMdQoU134Gw/IGOjoMRZEVLaUzWlRxFefiM/GGLTOxMWIzOcdHQQn/2Q==" alt="Logo partenaire 3">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZSOGLCida6g_90fY41leY4p3ahFxqwJeBFg&usqp=CAU">

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXO9x8ZzPt-tyTFDVDyFlhnCZzwsMXsX77Rg&usqp=CAU&reload=on">
<img src="data:image/jpeg;base64,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">
</div>
<section id="about">
	<h2 style="text-align: left;">A propos de nous</h2>
	<p style="background: radial-gradient(circle, #329D9C, #56C596  );">Nous sommes une entreprise de transport de passagers spécialisée dans les voyages inter-wilayas. Nous avons une flotte de bus modernes et confortables pour offrir à nos clients une expérience de voyage agréable. Notre équipe est dédiée à fournir un excellent service à la clientèle et nous sommes fiers de notre taux de satisfaction élevé.</p>
</section>

<section id="testimonials">
	<h2 style="text-align:left;"><b>Ce qui disent nos clients</b></h2>
	<div class="testimonial">
		<p>"J'ai réservé mon ticket de bus en ligne et c'était vraiment facile et rapide. Je recommande ce site à tous ceux qui cherchent à voyager entre les wilayas."</p>
		<p class="name">- Fatima Z.</p>
	</div>
	<div class="testimonial">
		<p>"Le service clientèle était très réactif et m'a aidé à résoudre un problème de paiement en ligne. Je suis très satisfait du service."</p>
		<p class="name">- Ahmed K.</p>
	</div>
	<div class="testimonial">
		<p>"C'est exellent, pas de probléme de transport aprés ce joli site   ."</p>
		<p class="name">- Saleh B.</p>
	</div>
</section>

<section id="features">
	<h2><u>Nos fonctionnalités</u></h2>
	<div class="feature">
		<i class="fas fa-bus"></i>
		<h3>Voyage confortable</h3>
		<p>Nous proposons des bus confortables avec des sièges spacieux et climatisation pour un voyage agréable.</p>
	</div>
	<div class="feature">
		<i class="fas fa-clock"></i>
		<h3>Horaires flexibles</h3>
		<p>Nous avons des horaires flexibles pour répondre à vos besoins de voyage.</p>
	</div>
	<div class="feature">
		<i class="fas fa-credit-card"></i>
		<h3>Paiement en ligne sécurisé</h3>
		<p>Notre plateforme de paiement en ligne est sécurisée et facile à utiliser pour vous permettre de réserver vos tickets en toute confiance.</p>
	</div>

</section>

<section class="populaires-voyages">
  <h2><u>Voyages populaires</u></h2>
  <div class="voyages">
    <div class="voyage">
      <img src="https://www.krion.com/uploads/noticias/418/imagenes/Sheraton-Annaba-KRION---des.jpg" alt="Voyage 1">
      <h3>Voyage vers Annaba de toutes wilayas</h3>
      <p>avec un prix compétitif ne ratez pas </p>
      
    </div>
    <div class="voyage">
      <img src="data:image/jpeg;base64,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" alt="Voyage 2">
      <h3>Voyage vers Alger la capitale</h3>
      <p>découvrir la capitale du pays</p>
      
    </div>
    <div class="voyage">
      <img src="data:image/jpeg;base64,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">
      <h3>Oued Souf - Biskra - Ouergla</h3>
      <p>un des voyages populaires surtout pendant l'automne</p>
      
    </div>
    <!-- Ajoutez ici les autres voyages populaires -->
  </div>
</section>

</body>
</html>
