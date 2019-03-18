<?php
$servername = "127.0.0.1";
$username = "aperture";
$password = "azertyuiopmlkjhgfdsq*";
$dbname = "IUT-INFO";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name = $_POST["name"];
$fname = $_POST["fname"];
$bdate = $_POST["bdate"];
$gender = $_POST["gender"];
$numr = $_POST["numr"];
$roadn = $_POST["roadn"];
$building = $_POST["building"];
$codepost = $_POST["codepost"];
$city = $_POST["city"];
$country = $_POST["country"];
$mail = $_POST["mail"];
$m_yn = $_POST["m_y-n"]=="yes" ? "TRUE" : "FALSE";
$m_yn = $_POST["m_y-n"]=="yes" ? "TRUE" : "FALSE";
$f_yn = $_POST["f_y-n"]=="yes" ? "TRUE" : "FALSE";
$d_yn = $_POST["d_y-n"]=="yes" ? "TRUE" : "FALSE";


// sql request
$sql = "INSERT INTO ApertureRequests VALUES ('".$name."','".$fname."',".$bdate.",'".+$gender."',".$numr.",'".$roadn."','".$building."',".$codepost.",'".$city."','".$mail."',".$m_yn.",".$f_yn.",".$d_yn.",'".$country."');";

if ($conn->query($sql) === TRUE) {
	echo "<!DOCTYPE html>";
	echo "<html>";
	echo "	<head>";
	echo "		<meta charset=\"utf-8\">";
	echo "		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
	echo "		<title>Nous rejoindre</title>";
	echo "		<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/navstyle.css\">";
	echo "		<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/mainstyle.css\">";
	echo "		<link rel=\"icon\" href=\"../img/favicon.ico\" />";
	echo "	</head>";
	echo "	<body>";
	echo "		<!-- Barre de navigation -->";
	echo "		<nav>";
	echo "			<ul>";
	echo "				<li>";
	echo "					<a href=\"/aperturegun/\">Accueil</a>";
	echo "					<ul>";
	echo "						<li><a href=\"/aperturegun/qui-sommes-nous/\">Qui sommes nous ?</a></li>";
	echo "						<li><a href=\"/aperturegun/presse/\">Presse</a></li>";
	echo "					</ul>";
	echo "				</li>";
	echo "				<li>";
	echo "					<a href=\"/aperturegun/portalgun/\">Produits</a>";
	echo "					<ul>";
	echo "						<li><a href=\"/aperturegun/portalgun/\">PortalGun</a></li>";
	echo "						<li><a href=\"/aperturegun/futur-projet/\">Autres produits</a></li>";
	echo "					</ul>";
	echo "				</li>";
	echo "				<li>";
	echo "					<a href=\"/aperturegun/contact/\">Contacts</a>";
	echo "					<ul>";
	echo "						<li><a href=\"/aperturegun/nous-rejoindre/\">Nous rejoindre</a></li>";
	echo "						<li><a href=\"/aperturegun/contact/\">Contact</a></li>";
	echo "					</ul>";
	echo "				</li>";
	echo "				<li>";
	echo "					<a href=\"/aperturegun/FAQ/\">FAQ</a>";
	echo "				</li>";
	echo "			</ul>";
	echo "		</nav>";
	echo "		<main class=\"form_main\">";
	echo "			<p>Votre participation a bien été envoyée !</p>";
	echo "			<a href=\"/aperturegun/\">";
	echo "				<button class=\"form_formbutton\">Retour a l'acceuil</button>";
	echo "			</a>";
	echo " 		</main>";
	echo "		<!-- False footer -->";
	echo "		<div class=\"general_false_footer\"></div>";
	echo "		<footer>";
	echo "			<p><a href=\"https://www.google.fr/chrome/browser/privacy/eula_text.html\">EULA</a> Aperture Science Industries - 2017</p>";
	echo "		</footer>";
	echo "	</body>";
	echo "</html>";
} else {
	echo "<!DOCTYPE html>";
	echo "<html>";
	echo "	<head>";
	echo "		<meta charset=\"utf-8\">";
	echo "		<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
	echo "		<title>Nous rejoindre</title>";
	echo "		<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/navstyle.css\">";
	echo "		<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/mainstyle.css\">";
	echo "		<link rel=\"icon\" href=\"../img/favicon.ico\" />";
	echo "	</head>";
	echo "	<body>";
	echo "		<!-- Barre de navigation -->";
	echo "		<nav>";
	echo "			<ul>";
	echo "				<li>";
	echo "					<a href=\"/aperturegun/\">Accueil</a>";
	echo "					<ul>";
	echo "						<li><a href=\"/aperturegun/qui-sommes-nous/\">Qui sommes nous ?</a></li>";
	echo "						<li><a href=\"/aperturegun/presse/\">Presse</a></li>";
	echo "					</ul>";
	echo "				</li>";
	echo "				<li>";
	echo "					<a href=\"/aperturegun/portalgun/\">Produits</a>";
	echo "					<ul>";
	echo "						<li><a href=\"/aperturegun/portalgun/\">PortalGun</a></li>";
	echo "						<li><a href=\"/aperturegun/futur-projet/\">Autres produits</a></li>";
	echo "					</ul>";
	echo "				</li>";
	echo "				<li>";
	echo "					<a href=\"/aperturegun/contact/\">Contacts</a>";
	echo "					<ul>";
	echo "						<li><a href=\"/aperturegun/nous-rejoindre/\">Nous rejoindre</a></li>";
	echo "						<li><a href=\"/aperturegun/contact/\">Contact</a></li>";
	echo "					</ul>";
	echo "				</li>";
	echo "				<li>";
	echo "					<a href=\"/aperturegun/FAQ/\">FAQ</a>";
	echo "				</li>";
	echo "			</ul>";
	echo "		</nav>";
	echo "		<main class=\"form_main\">";
	echo "			<p>Erreur, contacter un administrateur: " . $conn->error ."</p>";
	echo "			<a href=\"/aperturegun/\">";
	echo "				<button class=\"form_formbutton\">Retour a l'acceuil</button>";
	echo "			</a>";
	echo " 		</main>";
	echo "		<!-- False footer -->";
	echo "		<div class=\"general_false_footer\"></div>";
	echo "		<footer>";
	echo "			<p><a href=\"https://www.google.fr/chrome/browser/privacy/eula_text.html\">EULA</a> Aperture Science Industries - 2017</p>";
	echo "		</footer>";
	echo "	</body>";
	echo "</html>";
}

$conn->close();
?>
