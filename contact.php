<!DOCTYPE HTML>
<html>
	<head>
		<title>Ecooss</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">ECOOSS</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Generic</a></li>
											<li><a href="contact.php">Contactez-nous</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<article id="main">
						<header>
							<h2>Elements</h2>
							<p>Aliquam ut ex ut interdum donec amet imperdiet eleifend</p>
						</header>
						<section class="wrapper style5">
							<div class="inner">
								<section>
									<h4>Formulaire</h4>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="name" placeholder="Name" required/>
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="email" name="email" placeholder="Email" required/>
											</div>
											<div class="col-12">
												<select name="subject" id="subject">
													<option value="">- Category -</option>
													<option value="Operating System">Operating System</option>
													<option value="Office">Office</option>
													<option value="Adobe">Adobe</option>
													<option value="Réclamation">Réclamation</option>
													<!--<option value="">- Sujet -</option>
													<option value="1">Achat</option>
													<option value="1">Questions</option>
													<option value="1">Besoin d'aide</option>
													<option value="1">Garantit</option>-->
												</select>
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Enter your message" rows="6" required></textarea>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="primary" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
											<?php
											if(isset($_POST["message"])){
												$message = "Ce message vous a été envoyé via la page contact du site
												Ecooss
												Nom : " . $_POST["nom"] . "
												Email : " .  $_POST["email"] . "
												Message : " . $_POST["message"];

												$retour = mail("ecoosspro@gmail.com", $_POST["subject"], $message,"From: ecoosspro@gmail.com" ."\r\n" . "Reply-to: " . $_POST["email"]);
												if($retour){
													echo "<p> L'email a bien été envoyé. <p>";
												}
											}
											?>
										</div>
									</form>
								</section>
							</div>
						</section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>