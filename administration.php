<?php session_start();
include 'fonct.php';
include 'formulaires.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
	<![endif]-->
	<!--[if IE 7]>
	<html class="no-js lt-ie9 lt-ie8" lang="">
		<![endif]-->
		<!--[if IE 8]>
		<html class="no-js lt-ie9" lang="">
			<![endif]-->
			<!--[if gt IE 8]>
			 -->
			<html class="no-js" lang="fr">
				<!--
				<![endif]-->
				<head>
					<meta charset="utf-8">
					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<title>Reg'alade</title>
					<meta name="description" content="">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="apple-touch-icon" href="apple-touch-icon.png">
					<link rel="stylesheet" href="assets/css/bootstrap.min.css">
					<!--
					<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
					-->
					<!--For Plugins external css-->
					<link rel="stylesheet" href="assets/css/plugins.css" />
					<link rel="stylesheet" href="assets/css/raleway-webfont.css" />
					<!--Theme custom css -->
					<link rel="stylesheet" href="assets/css/style.css">
					<!--Theme Responsive css-->
					<link rel="stylesheet" href="assets/css/responsive.css" />
					<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
				</head>
				<body>
				<article>
				<p><a href="index.php?action=logout" title="Déconnexion">Se déconnecter</a></p>
				<?php
				
				
				if (isset($_POST["ValiderModifier"]) && isset($_POST["imageAccueil"])) {
					$retour=modif("Accueil",$_POST["imageAccueil"],$_POST["textAccueil"],$_POST["TailleAcceuil"]);
					if($retour) {
						echo "<p>Modification réussie de l'accueil</p>";
					}
					else {
						echo "<p>Echec de la modification de l'accueil</p>";
					}
				}
				if (!empty($_SESSION) ){
					afficheFormulaireModificationAccueil();
				}
				if (isset($_POST["ValiderModifier"]) && isset($_POST["imageEvenements"])) {
					$retour=modif("Evenements",$_POST["imageEvenements"],$_POST["textEvenements"],$_POST["TailleEvenement"]);
					if($retour) {
						echo "<p>Modification réussie de la page Evenements</p>";
					}
					else {
						echo "<p>Echec de la modification de la page Evenements</p>";
					}
				}
				if (!empty($_SESSION) ){
					afficheFormulaireModificationEvenements();
				}
				if (isset($_POST["ValiderModifier"]) && isset($_POST["Titrecompetition"])) {
						$retour=modifcomp($_POST["ValiderModifier"],$_POST["Titrecompetition"],$_POST["textComptition"]);
					if($retour) {
						echo "<p>Modification réussie de la page Competition</p>";
					}
					else {
						echo "<p>Echec de la modification de la page Competition</p>";
					}
				}
				if (!empty($_SESSION) ){
					afficheFormulaireModificationCompetition("competition1");
					afficheFormulaireModificationCompetition("competition2");
					afficheFormulaireModificationCompetition("competition3");
					afficheFormulaireModificationCompetition("competition4");
				}
				?>
				<h2>La base de données</h2>
				<?php
				$BDD=listeBDD();
				if ($BDD!=false) afficheTableau($BDD);
				
				?>
				</article>
				</body>
			</html>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			