<!doctype html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8" lang="">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9" lang="">
         <![endif]-->
         <!--[if gt IE 8]> --> 
         <html class="no-js" lang="fr">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <title>Reg'alade</title>
               <meta name="description" content="">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <link rel="apple-touch-icon" href="apple-touch-icon.png">
               <link rel="stylesheet" href="assets/css/bootstrap.min.css">
               <!--<link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->
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
            </head>
            <body>
               <!--[if lt IE 8]>
               <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
               <![endif]-->
               <div class='preloader'>
                  <div class='loaded'>&nbsp;</div>
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
                           <li class="active"><a href="le_club.php">Le Club</a></li>
                           <li><a href="membres.php">Nos compétiteurs</a></li>
						   <li><a href="inscription.php">Inscription</a></li>
						   <li><a href="contact.php">Contact</a></li>
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
                        <!-- Example row of columns -->
                        <div class="row">
                           <div class="col-md-6 col-sm-6 col-xs-6 seances">
                              <div class="about-content" id="club">
								 <div class="text text-center">
								 <h2>Les séances</h2>
                                 <p>
								   Vous trouverez ci dessous les différents créneaux horaires du club pour la saison 2019 - 2020 :</p>
								   	<table>
										<tr>
										<th>MARDI</th><th>MERCREDI</th><th>JEUDI</th><th>VENDREDI</th><th>SAMEDI</th>
										</tr>
										<tr>
										<td></td><td></td><td></td><td></td><td><?php seance_baby();?></td>
										</tr>
										<tr>
										<td></td><td><?php seance_mercredi();?></td><td><?php seance_jeudi1();?></td><td></td><td></td>
										</tr>
										<tr>
										<td><?php seance_perf();?></td><td></td><td><?php seance_jeudi2();?></td><td><?php seance_ados();?></td><td></td>
										</tr>
										<tr>
										<td><?php seance_adultesA();?></td><td></td><td><?php seance_adultesA();?></td><td><?php seance_adultes();?></td><td></td>
										</tr>
									</table>
								   
								 </div>

								 <div class="detail">
								 <p>(1) L'accueil des nouveaux Adultes se fait uniquement lors du créneau débutant le Vendredi Soir,<br>ceci auront la possibilité de suivre des cours dispensés par un initiateur bénévole de 19h30 à 21H00<br>
								 (2) Les créneaux Adultes Autonomes sont réservés aux grimpeurs licenciés au club et titulaires du passeport jaune.<br>
								 (3) Les créneaux adultes ne seront ouvert que si un responsable de séance s'est inscrit au préalable sur l'agenda en ligne du club (visible sur notre site web), celui ci doit être titulaire du passeport Orange au minimum.<br>
								 (4)Le club organisera régulièrement des sessions passeport FFME afin que vous puissiez accèder à tous les créneaux horaires et ainsi devenir un grimpeur autonome.</p>
								 </div>
							 </div>
						 </div>
						 <div class="tarifs about-content">
								 <h2>Les tarifs: </h2>
								 <table>
										<tr>
										<td>Cotisation adultes (+18 ans)(Assurance BASE incluse)</td><td>110€</td>
										</tr>
										<tr>
										<td>Cotisation jeunes (6/17 ans)(Assurance BASE incluse)<br> </td><td>100€</td>
										</tr>
										<tr>
										<td>Remise de 5€ par licenciés supplémentaire<br> </td>
										</tr>
									</table>
                           </div>
                        </div>
				</section>
				<section class="section about-bg">
                  <div class="mur text-center ">
                     <h4>Les Structures</h4>
					 <h5>Le mur :</h5>
					 <p>
					 <img src="images/mur.jpg" alt="le mur"/> 
					 </p>
					 <h5>Le bloc :</h5>
                     <p>
                        <img src="images/bloc.jpg" alt="le block"/> 
                     </p>
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
						<!-- /container -->
					</footer>
               <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
               <script src="assets/js/vendor/bootstrap.min.js"></script>
               <script src="assets/js/jquery.easypiechart.min.js"></script>
               <script src="assets/js/plugins.js"></script>
               <script src="assets/js/modernizr.js"></script>
               <script src="assets/js/main.js"></script>
            </body>
         </html>

