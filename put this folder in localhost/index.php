<?php

	// Basic vars setup
	$myPages = array(
		'home'           => 'Home',
		'project'        => 'Project',
		'nieuwespeler'   => 'Nieuwe speler',
		'startalbingo'   => 'Start ALBINGO',
		'wiebenik'       => 'Wie ben ik?',
		'contact'        => 'Contact'
	);
	
	$current_page = 'home';

	if(isset($_GET['page']))
	{
		$current_page = $_GET['page'];
	}

	$my_page = $current_page . '.php';
	if(!file_exists($my_page))
	{
		$content  = "";
		$content .= "<div id='main'>";
		$content .= "<div class='container'>";
		$content .= 'Deze pagina bestaat niet.';
		$content .= "</div>";
		$content .= "</div>";
	}
	else
	{
		ob_start();
		require_once $my_page;
		$content = ob_get_clean();
	}

 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>ALBINGO</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="ALBINGO is een bingospel voor docenten en studenten van het Albeda College" />
		<meta name="keywords" content="ALBINGO" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">ALBINGO v1.1</a></h1>
						<span>Quit Playing Games Without Learning!</span>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<?php 

								foreach($myPages as $slug => $title)
								{
									$active = ($slug == $current_page) ? ' class="active"' : '';
									echo '<li' . $active . '><a href="?page=' . $slug . '">' . $title . '</a></li>';
								}

							 ?>
						</ul>
					</nav>

			</div>
		</div>
	<!-- /Header -->

	<?php
		echo $content; 
	 ?>

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="3u">
						<section>
                            <header>
								<h2>Projectondersteuning</h2>
							</header>
							<ul class="style1">
								<li><img src="images/teacher.png" width="78" height="78" alt="">
									<p>Docent WB, vPVB, DD &amp; AO. Ondersteuning & Eindbeoordeling</p>
									<p class="posted">J. van Rees</p>
								</li>
								<li><img src="images/teacher.png" width="78" height="78" alt="">
									<p>Docent RE &amp; AO.<br />Ondersteuning<br /><br /></p>
									<p class="posted">B. Keemink</p>
								</li>
							</ul>
						</section>
					</div>
					<div class="3u">
						<section>
                            <header>
								<h2>&nbsp;</h2>
							</header>
							<ul class="style1">
								<li><img src="images/teacher.png" width="78" height="78" alt="">
									<p>Docent SD, IM, &amp; AO.<br />Ondersteuning<br /><br /></p>
									<p class="posted">K. Bot</p>
								</li>
								<li><img src="images/teacher.png" width="78" height="78" alt="">
									<p>Docent DD &amp; AO.<br />Ondersteuning<br /><br /></p>
									<p class="posted">B. van Helden</p>
								</li>
							</ul>
						</section>				
					</div>
					<div class="6u">
						<section>
							<header>
								<h2>Projectbenodigdheden</h2>
							</header>
							<p>Om dit project te kunnen voltooien dien je over het volgende te beschikken:</p>
							<ul class="default">
                                <li>- USB Webserver + responsive ALBINGO template</li>
                                <li>- Basiskennis HTML & CSS</li>
                                <li>- Basiskennis PHP</li>
								<li>- Basiskennis van PSD's</li>
                                <li>- Reader DD N3 (onderdeel PHP)</li>
								<li>- Website van W3schools/Codecademy</li>
                                <li>- Backupmogelijkheid</li>
                                <li>- Inzet, motivatie & doorzettingsvermogen</li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				&copy; 2014 - <a href="#">ALBINGO</a>
			</div>
		</div>
	<!-- /Copyright -->
	
	</body>
</html>