<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Berk Semerci Web Tasarım / Programlama</title>
		<link rel="shortcut icon" href="http://berksemerci.site/icon.ico">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="http://berksemerci.site/"><img style="max-width:35%; margin-top:-15px" src="images/xfile2.png" alt="" /></a></h1>
						<nav>
							<a href="#menu">Menü</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menü</h2>
							<ul class="links">
								<li><a href="http://berksemerci.site/">Anasayfa</a></li>
								<li><a href="hakkımda.php">Hakkımda</a></li>
								<li><a href="/project">Portfolyo</a></li>
							</ul>
							<a href="#" class="close">Kapat</a>
						</div>
					</nav>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">

							<?php
							include 'browser.php';

							$deger;

							$browser = new Browser();
							if($browser->getPlatform() == Browser::PLATFORM_WINDOWS || $browser->getPlatform() == Browser::PLATFORM_LINUX || $browser->getPlatform() == Browser::PLATFORM_APPLE)
							{
								$deger = "xfile1.png";
							}
							else
							{
								$deger = "xfile2.png";
							}
							?>

							<div class="logo"><img src="images/<?php echo $deger; ?>"/></div>
							<h2>Web Tasarımcı, Grafİker ve Yazılımcı</h2>
							<p>Gençlİğİn verdİğİ enerjİyİ günümüz teknolojİsİ İle biİleştİrİp yenİ ve modern tasarımlar İçİn her zaman uğraşıyorum ve araştırıyorum çünkü bu benİm yaşam stİlİm.</a></p>
							<a href="#six" class="special">Web Sitelerime Gözat</a> <a href="/project" class="special">Portfolyom'a Gözat</a>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#" class="image"><img src="images/user.jpg" alt="" /></a>
									<div class="content">
										<h2 class="major">ZAMANDA YOLCULUK YAPALIM VE BENİ TANIYALIM...</h2>
										<p>1995 yılında başlayan yaşam serüvenim de 50'den fazla tasarım, 10'dan fazla site projesi, 10'dan fazla da nesne tabanlı programlama
										projesi ile birlikte bir çok projede yardımcı yazılımcı yada tasarımcı olarak uğraştım. Her zaman güncel bilgi ve programları takip ederek
										zamanı geçirdim. En büyük hedefim kariyerin de büyük ve yenilikçi projeleri gerçekleştirmiş yada geliştirilmesinde bulunmuş birisi olmak...</p>
										<a href="hakkımda.php" class="special">DEVAMINI OKU</a>
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a class="image"><img src="images/okul.png" alt="" /></a>
									<div class="content">
										<h2 class="major">EĞİTİM KARİYERİM</h2>
										<p>İlkokul/Ortaokul bitirdikten sonra Sabancı Anadolu Teknik Lise'sinde Bilişim Teknolojileri Bölümü / Veritabanı Programcılığı Dalını'ndan
										2009 senesinde başarılı bir şekilde mezun oldum. Daha sonra Kocaeli Üniversitesi Köseköy MYO / Bilgisayar Programcılığı Bölümünü 2015 yılında
										bitirerek eğitim hayatımı tamamlamış oldum.</p>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a class="image"><img src="images/cizim.png" alt="" /></a>
									<div class="content">
										<h2 class="major">TASARIM KARİYERİM</h2>
										<p>Tasarıma lise zamanında yaptığım ve yaptığımız projelerin taslaklarını ve tasarımlarını yaparak başladım. Daha sonra
										Freelancer olarak çeşitli logo/kartvizit/broşür tasarımları yaptım. Şuan ise çeşitli site ve mobil uygulama tasarımları
										yapmaktayım. Üretkenlik ve yenilikçilik bakımından kendime güvenim büyüktür. Yeni ve özgün tasarımları her zaman ortaya çıkarmak en büyük çabalarımdandır.</p>
									</div>
								</div>
							</section>
						<!-- -->
							<section id="four" class="wrapper alt spotlight style5">
								<div class="inner">
									<a class="image"><img src="images/kod.png" alt="" /></a>
									<div class="content">
										<h2 class="major">PROGRAMLAMA KARİYERİM</h2>
										<p>Programlamaya TurboPascal ile yaptığım ufak uygulamalar ile başladım. Devamında VisualBasic ve daha sonra bir projede anticheat için C/C++ ile uğraştım.
										Şuan ise aktif olarak C# ile çeşitli otomasyon programları yapmaktayım. Boş vakitlerimde PHP/JavaScript/Bootstrap kodlama dilleri ile uğraşıp kendimi geliştirme çabasındayım..</p>
									</div>
								</div>
							</section>

							<!-- Three -->
							<section id="five" class="wrapper spotlight style6">
								<div class="inner">
									<a class="image"><img src="images/veri.png" alt="" /></a>
									<div class="content">
										<h2 class="major">VERİTABANI KARİYERİM</h2>
										<p>VeriTabanı kariyerime klasik olarak MS Access çalışmaları ile başladım. Devamında ise projelerimde kullanmak üzere veritabanı oluşturmak
										için MySQL ve MS SQL tercih ettim. Projelerim sayesinde veritabanı programlarına böylelikle giriş yapmış oldum.</p>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="six" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">WEB SİTELERİM</h2>
									<p>Kendimi geliştirmek ve boş vakitlerimi değerlendirmek için yapmuş olduğum bir çok web sitesi çalışması bulunmaktadır. Bunlardan bazılarıyla aktif olarak ilgilenmekte ve sürekli geliştirmekteyim.</p>
									<section class="features">
										<article>
											<a href="http://think-berk.blogspot.com.tr/" class="image"><img src="images/think-berk.png" alt="" /></a>
											<h3 class="major">KİŞİSEL BLOG</h3>
											<p>Teknoloji, gündem, televizyon ve sinema ile ilgili çeşitli konuları ele aldığım, kimi zaman eleştirdiğim kimi zaman ise önerdiğim yazıları yazdımğım blog sayfamdır.</p>
											<a href="http://think-berk.blogspot.com.tr/" class="special">SİTEYE GİT</a>
										</article>
										<article>
											<a href="http://projects.berksemerci.site/MColor" class="image"><img src="images/mcolor.png" alt="" /></a>
											<h3 class="major">MCOLOR</h3>
											<p>İlk amatör web tabanlı oyun sitemdir. Amacı hem kendimi geliştirmek hemde oyunu oynayanları eğlendirmektir. Javascript ve PHP ağırlıklıdır.</p>
											<a href="http://projects.berksemerci.site/MColor" class="special">SİTEYE GİT</a>
										</article>
										<article>
											<a href="http://projects.berksemerci.site/Reinws" class="image"><img src="images/reinws.png" alt="" /></a>
											<h3 class="major">REİNWS</h3>
											<p>Kendimi geliştirmek için uğraştığım sosyal ağ sitesidir. İçerisinde CSS/HTML/PHP/JavaScript/Bootstrap yanı sıra Admin Yönetim Paneli de mevcuttur.</p><br>
											<a href="http://projects.berksemerci.site/Reinws" class="special">SİTEYE GİT</a>
										</article>
										<article>
											<a href="http://projects.berksemerci.site/Cinemaxx" class="image"><img src="images/cinemaxx.png" alt="" /></a>
											<h3 class="major">CİNEMAXX</h3>
											<p>Film izlemeyi eğlenceli hale getirmek aynı zamanda göze hitap eden görseller içeren modern site tasarımı oluşturmayı amaçlayan web sitesi projesidir.</p>
											<a href="http://projects.berksemerci.site/Cinemaxx" class="special">SİTEYE GİT</a>
										</article>
										<article>
											<a href="http://projects.berksemerci.site/PastOrFuture" class="image"><img src="images/porft.png" alt="" /></a>
											<h3 class="major">Past Or Future Time</h3>
											<p>Bazen geçmişe dönüp anılarımızı hatırlar bazen de ileriye dönük hayaller kurarız. Peki bunların ne kadarını hatırlıyoruz ? Bize yardımcı olacak bir proje.</p>
											<a href="http://projects.berksemerci.site/PastOrFuture" class="special">SİTEYE GİT</a>
										</article>
										<article>
											<a href="http://projects.berksemerci.site/SocialFoot" class="image"><img src="images/socialfoot.png" alt="" /></a>
											<h3 class="major">SOSYALFUTBOL</h3>
											<p>Halı saha maçları çoğumuzun olmazsa olmazıdır. Bazı zamanlar saha bazı zamanlarda rakip bulmada zorlanırız. İşte bu sorunumuza çözüm olacak bir proje.</p>
											<a href="http://projects.berksemerci.site/SocialFoot" class="special">SİTEYE GİT</a>
										</article>
									</section>
									<ul class="actions">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<center>
										<li><a href="http://projects.berksemerci.site/Calculator" class="button">CALCULATOR</a></li>
										</center>
									</ul>
								</div>
							</section>

					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">İLETİŞİME GEÇ</h2>
							<p>Kimi zaman bir şeyler yazmak gerekir. İşte şimdi tam zamanı iletişime geçmek için formu doldur ve yolla.</p>
							<form action="mail.php" method="POST">
								<div class="field">
									<label for="name">AD SOYAD</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field">
									<label for="email">EMAİL</label>
									<input type="email" name="email" id="email" />
								</div>
								<div class="field">
									<label for="message">MESAJ</label>
									<textarea name="message" id="message" rows="4"></textarea>
								</div>
								<ul class="actions">
									<li><input type="submit" value="İLETİŞİME GEÇ" /></li>
								</ul>
							</form>
							<ul class="contact">
							<br>
								<li class="fa-home">
									TÜRKİYE / İstanbul<br />
								</li>
								<li class="fa-envelope"><a href="mailto:info@berksemerci.com">info@berksemerci.com</a></li>
							</ul>
							<center>
							<ul class="copyright">
							<a href="https://www.facebook.com/c.berk.semerci"><img src="images/face.png"/></a>&nbsp;&nbsp;
							<a href="https://twitter.com/berk_semerci"><img src="images/twit.png"/></a>&nbsp;&nbsp;
							<a href="https://plus.google.com/u/0/114538682815877352915/posts"><img src="images/google.png"/></a>&nbsp;&nbsp;
							<a href="https://www.youtube.com/channel/UCjXErZ81pO3UxImIv96Xd2Q"><img src="images/you.png"/></a>&nbsp;&nbsp;
							<a href="https://www.linkedin.com/pub/berk-semerci/101/8ba/2aa"><img src="images/linkedin.png"/></a>&nbsp;&nbsp;
							<a href="http://www.kariyer.net/WebSite/Kariyerim/cv/cvAdayGoruntuleme.aspx?refnumber=jdLMb4ODpookmzhvvo4Etg%3d%3d!e!"><img src="images/blogger.png"/></a>
							<br><br>
								<li>&copy; 2015 berksemerci.com</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
							</center>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
