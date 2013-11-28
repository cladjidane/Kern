<!DOCTYPE html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!-->
<html class="no-js" lang="fr">
	<!--<![endif]-->
	<head>
		<meta charset="UTF-8"><!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
		<title>
			Kern
		</title>
		<meta name="viewport" content="initial-scale=1.0"><!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
		<link rel="stylesheet" href="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/css/kern.css" type="text/css">
	</head>
	<body class="home" data-home="true">

		<header class="header">
			<div class="logo">
				<h1 class="logo__title">
					<img src="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/img/biobreizh.gif" alt="Biobreizh, légumes BIO">
				</h1>
			</div>
			<nav class="mainmenu">
		    <ul class="nav nav-mainmenu">
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#accueil">Accueil</a></li>
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#groupement">Le groupement</a></li>	
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#produits">Les produits</a></li>
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#contact">Contact</a></li>
			  </ul>
			</nav>
		</header>

		<div class="container">
			
			<!-- PRODUITS -->
			<section class="ecran" id="produits">
				<div class="container-ecran">
					<jdoc:include type="modules" name="home-ecran1-left" style="no" /><!-- 
					--><div class="grid__item two-thirds ">
						<jdoc:include type="modules" name="home-ecran1-center" style="no" /><!-- --><jdoc:include type="modules" name="home-ecran1-right" style="no" />
					</div>
				</div>
			</section>
			
			<!-- ACCUEIL -->			
			<section class="ecran" id="accueil">
				<div class="container-ecran">
					<jdoc:include type="modules" name="home-ecran2-left" style="no" /><!-- 
					--><div class="grid__item two-thirds ">
						<jdoc:include type="modules" name="home-ecran2-center" style="no" /><!-- --><jdoc:include type="modules" name="home-ecran2-right" style="no" />
					</div>
				</div>
			</section>
			
			<!-- LE GROUPEMENT -->
			<section class="ecran" id="groupement">
				<div class="container-ecran">
					<jdoc:include type="modules" name="home-ecran3-left" style="no" /><!-- 
					--><div class="grid__item two-thirds ">
						<jdoc:include type="modules" name="home-ecran3-center" style="no" /><!-- --><jdoc:include type="modules" name="home-ecran3-right" style="no" />
					</div>
				</div>
			</section>
			
			<!-- CONTACT -->
			<section class="ecran" id="contact">
				<div class="container-ecran">
					<jdoc:include type="modules" name="home-ecran4-left" style="no" /><!-- 
					--><div class="grid__item two-thirds ">
						<jdoc:include type="modules" name="home-ecran4-center" style="no" /><!-- --><jdoc:include type="modules" name="home-ecran4-right" style="no" />
					</div>
				</div>
			</section>
		</div>

		<script src="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/js/vendor/jquery-min.js"></script>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/js/plugin.js"></script>
    <script src="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
	</body>
</html>