<!DOCTYPE HTML>
<!--
	Lens by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php

$host="localhost";
$db="admin_myblog";
$admin="admin_admin";
$adminpass="NFVOf1Qnnq";
$conn=@mysql_connect($host,$admin,$adminpass) or die("Mysql Baglanamadi");

mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");

?>
<html>
	<head>
		<title>Berk Semerci Tüm Çalışmalar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="shortcut icon" href="http://berksemerci.com/icon.ico">
	</head>
	<body class="is-loading-0 is-loading-1 is-loading-2">

		<!-- Main -->
			<div id="main">

				<!-- Header -->
					<header id="header">
						<a href="http://berksemerci.com/"><img src="logo.png"/></a>
						<p>Tüm Çalışmaların Görsel Tanıtımı</a></p>
						<ul class="icons">
							<li><a href="https://www.facebook.com/c.berk.semerci" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://twitter.com/berk_semerci" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://plus.google.com/u/0/114538682815877352915/posts" class="icon fa-google"><span class="label">Google+</span></a></li>
							<li><a href="https://www.youtube.com/channel/UCjXErZ81pO3UxImIv96Xd2Q" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
						</ul>
					</header>

				<!-- Thumbnail -->
					<section id="thumbnails">

						<?php
						$sor = mysql_query("SELECT * FROM project");

						while ($listele = mysql_fetch_assoc($sor)) {
							$baslik  = $listele["tit"];
							$yazi  = $listele["txt"];
							$resim  = $listele["link"];

						echo <<<EOF

						<article>
							<a class="thumbnail" href="$resim" data-position="left center"><img src="$resim" alt="" /></a>
							<h2>$baslik</h2>
							<p>$yazi</p>
						</article>
EOF;
						}
						?>

					</section>
				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
