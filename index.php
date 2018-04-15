<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	include_once("function/corps_error.php");
	include_once("function/link_pages.php");
	include_once("controller/user_controller.php");
	include_once("class/connect_db.php");
	
	$methodUser = new User_controller();
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Julien Leroy, Développeur Web</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="./front/css/styles.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
	</head>
	<body>
		<header>
			<div class="col-md-6 top_header">
				<div class="col-md-6 right">
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					<label>Douai, 59 Nord</label>
				</div>
				<div class="col-md-6">
					<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					<label>Julienr.leroy@gmail.com</label>
				</div>
			</div>
			<div class="col-md-6 top_header right">
				<div class="col-md-offset-2 col-md-8 col-md-offset-2">
					<a href="https://www.facebook.com/profile.php?id=100014419061136" target="_blank"> 
						<img width="15px" height="15px" src="https://iconmonstr.com/wp-content/g/gd/makefg.php?i=../assets/preview/2012/png/iconmonstr-facebook-1.png&r=0&g=0&b=0"/> 
					</a>
					<a href="https://github.com/JulienRLeroy" target="_blank"> 
						<img width="15px" height="15px" src="https://cdns.iconmonstr.com/wp-content/assets/preview/2012/240/iconmonstr-github-1.png"/> 
					</a>
					<a href="https://www.linkedin.com/in/julienrleroy/" target="_blank"> 
						<img width="15px" height="15px" src="https://cdns.iconmonstr.com/wp-content/assets/preview/2012/240/iconmonstr-linkedin-1.png"/> 
					</a>
				</div>
			</div>
			<div class="col-md-6 header_bottom">
				<div class="col-md-12 header_bottom">
					<label> 
						<span>Julien Leroy</span> 
					</label>
				</div>
			</div>
			<div class="col-md-6 header_bottom">
				<div class="col-md-12 header_bottom">
					<nav class="navbar header_bottom">
						<ul class="nav navbar-nav header_bottom">
							<li>
								<a href="./">
									Accueil
								</a>
							</li>
							<li>
								<a href="?p=competences">
									Compétences
								</a>
							</li>
							<li>
								<a href="?p=metiers">
									Métiers
								</a>
							</li>
							<li>
								<a href="?p=formations">
									Formations
								</a>
							</li>
							<li>
								<a href="?p=folio">
									Folio
								</a>
							</li>
							<li>
								<a href="?p=contact">
									Contact
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<div class="col-md-12 after_top_title">
			<div class="col-md-6">
				<label> 
					<span> 
						<h1> CV Développeur Web PHP </h1>
					</span> 
				</label>
			</div>
		</div>
		
		<div class="col-md-12 corps">
			<div class="col-md-12">
				<div class="container">
					<div class="col-md-12 center corps_error">
						<?php getPages();?>
					</div>
					<?php if(isset($_SESSION['error'])) {
						
						echo'<div class="col-md-12 center corps_error_wrong alert-danger">';
						echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> '; 
						corps_error(); 
						echo'</div>';
					} 
					
					if(isset($_SESSION['valide'])) {
						
						echo'<div class="col-md-12 center corps_error_wrong btn-success">';
						echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> '; 
						corps_error(); 
						echo'</div>';
					} 
					?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="container pages">
						<?php			
							if(isset($_GET["p"])) {
								if(file_exists("pages/".$_GET["p"].".php")) 
								{
									include("pages/".$_GET["p"].".php");
									
								} else {
									$_SESSION['erreur'] = "La page demandée n'existe pas";
									Header("Location: ./");
								}
							}
							else {
							
							}
						?>
					</div>
				</div>
			</div>
		</div>
		
		<footer class="col-md-12 center">
			Copyright 2017 - 2017 Theme by Julien Leroy | Tous droits réservés
		</footer>
		<section class="col-md-12 sub_footer">
			
		</section>
	</body>
</html>
