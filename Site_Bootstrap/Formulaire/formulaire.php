<!DOCTYPE html>
<html lang="fr">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Site/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../Site/bootstrapCSS.css">
	<link rel="stylesheet" type="text/css" href="formulaireCSS.css">
	<title>Harry Potter</title>
  </head>

 <body>

  	<!--Bar de Navigation-->
  	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  		<!--Logo-->
	  <a class="navbar-brand" id="top" href="../Site/site.html"><img src="../Photos/MISE_EN_PAGE/logo.jpg"/></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <!--Raccourcis sections-->
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="../Site/site.html #photos">Articles<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../Site/site.html #personnages">Personnages</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../Site/site.html #films">Films</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../Site/site.html #objets">Objets</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../Site/site.html #acheter">Acheter</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="../Site/site.html #contact">Contact</a>
	      </li>
	    </ul>
	  </div>
	</nav>


	<!--Résultat du formulaire-->
	<div class="resultat">
		<!--Traitement des données en PHP-->
		<?php 
				//Récupération des valeurs des champs
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$email = $_POST['email'];
				$choix = $_POST['choix'];
				$message = $_POST['message'];

				$error = 0;
				$phraseChoix = "";

				//Vérification des champs requis

				//Le nom doit contenir au moins 1 caractère
				if (empty($nom)) {
					$error = 1;
					echo "<p>Le nom doit être renseigné<br /></p>";
				}
				
				//Le prénom doit contenir au moins 1 caractère
				if (empty($prenom)) {
					$error = 1;
					echo "<p>Le prénom doit être renseigné<br /></p>";
				}
		
				//L'email doit être valide
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$error = 1;
					echo "<p>Email invalide, retapez<br/></p>";
				} 

				//Quelle information est renseignée ?
				switch ($choix) {
					case "un bug":
						$phraseChoix = "un bug.<br /> Merci pour votre message, nous allons régler le problème dans les plus brefs délais.<br/>"; 
					break;

					case "une amélioration possible du site":
						$phraseChoix = "une amélioration possible du site. <br />Merci. Nous allons étudier cette idée et voir si nous pouvons ou non la réaliser.<br/>";
					break;

					case "un problème avec l'achat d'un produit":
						$phraseChoix = "un problème avec l'achat d'un produit.<br />Nous sommes désolé de ce désagrément et allons étudier votre cas. Nous vous contacterons via votre adresse email.<br/>";
					break;

					case "un problème avec l'affichage du site":
						$phraseChoix = 'un problème avec l\'affichage du site.<br />Le mauvaise affichage du site internet peut être dû à une mauvaise compatibilité avec votre navigateur. Essayer avec <a href="https://www.google.fr/chrome/browser/desktop/index.html">Google Chrome</a>.<br/>';
					break;
					
					default: 
					echo "Mauvais choix";
					$error = 1;
				}


				//Message final
				switch ($error) {
					case 1:
						echo "<p>La requête n'a pu aboutir.<br /></p>";
					break;

					case 0:
						echo "'<em>".$message."'</em><br />Bonjour ".$nom." ".$prenom."<br />Votre adresse email est ".$email."<br/>Vous avez renseigné ".$phraseChoix."<br/>";

						echo 'Merci de votre attention et à bientôt!';

					break;

					default:
			}

		?>

	</div>
	
	<!--Retour à la page principale-->
	<p class="retour"><a href="../Site/site.html">Retour</a></p>

	
	<!--Footer-->
	<footer>
		Clément TORTI & Florent BECOUZE G4
	</footer>


</body>

</html>




