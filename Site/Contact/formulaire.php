<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title> Contact </title>
	<link type="text/css " rel="stylesheet" href="../MISE_EN_PAGE_CSS.css" media="all"/>
	<link type="text/css " rel="stylesheet" href="Contact_CSS.css" media="all"/>
	<style>

		.resultat {
			background-color: white;
			height: 400px;
			text-align:center;
			margin: 30px 20%;
			padding: 50px;
			font: normal 16px Tahoma, Arial;

		}

	</style>
</head>

<body>
	<header>
		<h1> Contact </h1>
		<div id="header_image">
			<img id="image" src="../Photos/MISE_EN_PAGE/maisons_poudlard.png"/>
		</div>
 	</header>
	
	<img id="banniere" src="../Photos/MISE_EN_PAGE/harry-potter-poster.jpg"/>

	<nav>
		<ul> 
			<li> <a href="../Accueil/Accueil.html">Accueil</a></li>
			<li><a href="../Biographie/Biographies.html">Biographies</a></li>
			<li class="Synopsis"><a href="">Medias</a>
				<ul class="submenu">
					<a href="../Synopsis/Synopsis.html"><li>Synopsis</li></a>
					<a href="../Galerie/Galerie.html"><li>Galerie</li></a>
				</ul>
			</li>
			<li><a href="Contact.php">Contact</a></li>
		</ul>
	</nav>

	<div class="resultat">
		<?php 
				//Récupération des valeurs des champs
				$nom = $_GET['nom'];
				$email = $_GET['email'];
				$BUG = $_GET['BUG'];
				$premiereVisite = $_GET['premiereVisite']; 
				$text = $_GET['textarea']; 
				$tel = $_GET['tel'];

				$error = 0;
				$phraseBug = "";
				$phraseVisite = "";

				//Vérification des champs requis

				//Le nom doit contenir deux mots
				if (str_word_count($nom) < 2) {
					$error = 1;
					echo "<p>Le nom complet doit être renseigné <br /></p>";

				}

				//L'email doit contenir au moins 6 caractères
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$error = 1;
					echo "<p>email invalide, retapez<br/></p>";
				} 

				//Quelle information est renseignée ?
				switch ($BUG) {
					case "Bug":
						$phraseBug = " un bug "; 
					break;

					case "Amélioration":
						$phraseBug = " une amélioration ";
					break;

					case "Autres":
						$phraseBug = " votre avis ";
					break;

					default: 
					"Unexpected error";
					$error = 1;
				}

				//Est-ce la première visite de l'utilisateur
				if ($premiereVisite == "oui") { 
					$phraseVisite = " C'est votre première visite. ";
				} else {
					$phraseVisite = " Ce n'est pas votre première visite. ";
				}

				//Le commentaire de l'utilisateur
				if ($text == "") {
					$error=1;
					echo "<br />Veuillez renseigné votre problème <br />"; 
				}

				//Le téléphone (facultatif)
				if (!preg_match("/^[0-9]{10}$/", $tel)) {
					$tel = "Numéro de téléphone invalide ou manquant";
				} else {
					$tel = "Votre numéro de téléphone est :".$_GET['tel'];
				}

				//Message final
				switch ($error) {
					case 1:
						echo "<p>La requête n'a pu aboutir.<br /></p>";
					break;

					case 0:
						echo "<p><em>'".$text."'</em><br />Bonjour ".$nom."<br />Ton adresse email est ".$email."<br/>Merci d'avoir renseigné".$phraseBug.". <br />".$phraseVisite."<br/>".$tel."<br /> Merci de votre attention et à bientôt! </p>";

					break;

					default:
			}

		?>

		<p>
			<a href="Contact.php">Retour au formulaire</a>
		</p>

	</div>

	

	

<!--Footer-->
	<footer> 
		<h3>TORTI Clément, BECOUZE Florent G4 </h3>
	</footer>

</body>

</html>







