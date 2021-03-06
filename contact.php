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
					<link rel="shortcut icon" type="image/png" href="http://reguiny.escalade.free.fr/images/logo.png"/>
					<?php include 'fonct.php' ?>
					<script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
					<script type="text/javascript" src="fonction.js"></script>
				</head>
				<body>
					<div class='preloader'>
						<div class='loaded'>
							&nbsp;
						</div>
					</div>
					<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
							
								<ul class="nav navbar-nav navbar-right">
									<li><a href="index.php">Accueil</a></li>
									<li><a href="le_club.php">Le Club</a></li>
									<li><a href="membres.php">Nos compétiteurs</a></li>
									<li><a href="inscription.php">Inscription</a></li>
									<li class="active"><a href="contact.php">Contact</a></li>
								</ul>
							</div>
							<!-- /.navbar-collapse -->
						</div>
						<!-- /.container-fluid -->
					</nav>
					<!--Home page style-->
					<header id="home" class="home">
						<div class="overlay-img">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
									<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"/></a>
										<div class="home-content titre">
											<h5>
												Le club d'escalade de Réguiny
											</h5>
										</div>
										<div class="container text-center car">
											<div class="img_label">
												<img src="images/label-ffme.png" alt="label ffme" />
												<img src="images/label_escalade_ecole.png" class="right" alt="label école" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</header>
					<!-- Sections -->
					<section id="about" class="sections">
						<div class="contact">
						<div class="text-center">
							<h1>Contact</h1>
							</div>
							<form method="post">
								<label>Votre adresse Email</label>
								<input type="email" name="email"><br>
								<label>Nom</label>
								<input type="text" name="nom" required><br>
								<label>Prenom</label>
								<input type="text" name="prenom" required><br>
								<label>Objet</label>
								<select id="id_objet" name="objet" size="1">
								<option value="Inscription">Inscription</option>
								<option value="Renseignements">Renseignements</option>
								<option value="Competition">Compétition</option>
								<option value="Mail">Autre</option>
								</select><br>
								<label>Message</label>
								<textarea name="message" style="height:200px" required></textarea><br>
								<input type="submit">
								<?php
								if (isset($_POST['message'])) {
									$entete  = 'MIME-Version: 1.0' . "\r\n";
									$entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
									$entete .= 'From: ' . $_POST['email'] . "\r\n";

									$message = '<h1>Message envoyé depuis la page Contact</h1>
									<p><b>Nom : </b>' . $_POST['nom'] .'  '. $_POST['prenom'] . '<br>
									<b>Email : </b>' . $_POST['email'] . '<br>
									<b>Message : </b>' . $_POST['message'] . '</p>';

									$retour = mail('reguiny.escalade@free.fr', $_POST['objet']+' :depuis la page contact de reguiny.escalade.free.fr', $message, $entete);
									if($retour) {
										echo '<p>Votre message a bien été envoyé.</p>';
									}
								}
								?>
							</form>
						</div>
					</section>
					
					<footer id="footer" class="sections footer different-bg"></footer>
					<footer id="our-client" class="copyright-footer sections different-bg">
						<div class="container info">
							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="footer-mid-content">
										<h4>Contacts</h4>
										<div class="post">
											<div class="post-item">
												<h6>
													Tel
												</h6>
												<p>
													06 722 683 40
												</p>
											</div>
										</div>
										<div class="post">
											<div class="post-item">
												<h6>
													Mail
												</h6>
												<p>
													reguiny.escalade@free.fr
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12 site">
									<div class="footer-mid-content">
										<h4>Réseaux sociaux</h4>
										<div class="post">
											<div class="post-item">
												<h6>
													facebook
												</h6>
												<a href="https://www.facebook.com/regalade.reguiny/" target="_blank">Reg'alade</a>
											</div>
										</div>
										<div class="post">
											<div class="post-item">
												<h6>
													Instagram
												</h6>
												<a href="https://www.instagram.com/reg_alade/?hl=fr" target="_blank">Reguiny Escalade</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="footer-mid-content">
										<h4>Sites amis</h4>
										<div class="post">
											<div class="post-item">
												<h6>
													Le site de la fédé
												</h6>
												<a href="https://www.ffme.fr/" target="_blank">FFME</a>
											</div>
										</div>
										<div class="post">
											<div class="post-item">
												<h6>
													Le club de Grand-Champ
												</h6>
												<a href="https://www.gregam-vertical.fr/" target="_blank">Grégam Vertical</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="footer-mid-content">
									<h4> &nbsp; </h4>
										<div class="post">
											<div class="post-item">
												<h6>
													Le club de Vannes
												</h6>
												<a href="http://www.escalade5plus.fr/" target="_blank">Escalade 5+</a>
											</div>
										</div>
										<div class="post">
											<div class="post-item">
												<h6>
													Le club de Séné
												</h6>
												<a href="https://senescalade.bzh/" target="_blank">Sénescalade</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="footer-mid-content">
									<h4> &nbsp;</h4>
										<div class="post">
											<div class="post-item">
												<h6>
													Le club de Loudéac
												</h6>
												<a href="http://escalarmor.over-blog.com/" target="_blank">ESCAL'ARMOR</a>
											</div>
										</div>
										<div class="post">
											<div class="post-item">
												<h6>
													Le club de Mur de Bretagne
												</h6>
												<a href="https://guerledanescalade.clubeo.com/" target="_blank">Guerledan Escalade</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</footer>
					<!--Footer-->
					
					<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
					<script src="assets/js/vendor/bootstrap.min.js"></script>
					<script src="assets/js/jquery.easypiechart.min.js"></script>
					<script src="assets/js/plugins.js"></script>
					<script src="assets/js/modernizr.js"></script>
					<script src="assets/js/main.js"></script>
				</body>
			</html>

