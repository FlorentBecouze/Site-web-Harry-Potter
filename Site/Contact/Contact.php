<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title> Contact </title>
	<link type="text/css " rel="stylesheet" href="../MISE_EN_PAGE_CSS.css" media="all"/>
	<link type="text/css " rel="stylesheet" href="Contact_CSS.css" media="all"/>
	<style type="text/css">
		#submit {
			height:30px;
			width:80px;
			color:white;
			font-size: 15px;
			background-color: blue;
			border:solid 1px blue;
			border-radius: 5px;
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

<!--Contenu Principal-->
	<div id="titre">
		<p>Merci de laisser vos impressions/commentaires</p>
	</div>

	<!--Formulaire-->
	<form method="GET" action="formulaire.php">
		<p>
			<label for="nom">Nom complet: </label>
			<input type="text" name="nom" id="nom" placeholder="nom" required />
		</p>

		<p>
			<label for="email">Entrez votre email :</label>
			<input type="email" name="email" id="email" placeholder="email" />
		</p>

		<p>
			<label for="tel">Numéro de tel (facultatif) : </label>
			<input type="tel" name="tel" id="tel" placeholder="ex: 09 ** ** ** **"/>
		</p>

		<p> 
			<label for="bug">Signaler un :</label>
			<select id="bug" name="BUG">
				<option>
					Bug
				</option>
				<option>
					Amélioration
				</option>
				<option>
					Autres
				</option>
			</select>
		</p>

		<p>
			<label>Est-ce votre première visite :</label>
			<br/>
			<label for="oui">Oui</label>
			<input type="radio" id="oui" name="premiereVisite" value="oui" checked="checked" />
			<label for="non">Non</label>
			<input type="radio" id="non" name="premiereVisite" value="non"/>
		</p>

		<p>
			<label for="message">Entrez votre message : </label>	
		</p>
		
		<p>
			<textarea cols="40" rows="5" id="message" name="textarea" required></textarea>
		</p>

		<p>
			<input type="submit" name="submit" value="Envoyer" id="submit" />
		</p>

		

	</form>


<!--Footer-->
	<footer> 
		<h3>TORTI Clément, BECOUZE Florent G4 </h3>
	</footer>

</body>

</html>
