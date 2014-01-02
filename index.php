<?php 

$search = array('mootools-more.js', 'caption.js');
    // remove the js files
    foreach($this->_scripts as $key => $script) {
        foreach($search as $findme) {
            if(stristr($key, $findme) !== false) {
                unset($this->_scripts[$key]);
            }
        }
    }

?>
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
				<a href="/">
					<h1 class="logo__title">
						<img src="<?php echo $this->baseurl . '/templates/' . $this->template; ?>/img/biobreizh.gif" alt="Biobreizh, légumes BIO">
					</h1>
				</a>
			</div>
			<nav class="mainmenu">
		    <ul class="nav nav-mainmenu">
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#accueil">Biobreizh</a></li>
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#produits">Les produits</a></li>
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#groupement">Le groupement</a></li>	
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#contact">Contact</a></li>
			  </ul>
			</nav>
		</header>

		<div class="container">
			
			<!-- ACCUEIL -->			
			<section class="ecran" id="accueil">
				<div class="container-ecran">
					<div class="grid__item one-quarter">
						<jdoc:include type="modules" name="home-ecran2-left" style="no" />
					</div><!-- 
					--><div class="grid__item two-thirds ">
						<jdoc:include type="modules" name="home-ecran2-center" style="no" /><!-- 
						--><div class="grid__item five-twelfths">
							<jdoc:include type="modules" name="home-ecran2-right" style="no" />
						</div>
					</div>
				</div>

				<div class="diapohome">
					<ul class="diapohome__list">
						<li><img src="/images/diaporama-home/biobreizh/1.jpg" alt=""></li>
						<li><img src="/images/diaporama-home/biobreizh/2.jpg" alt=""></li>
						<li><img src="/images/diaporama-home/biobreizh/3.jpg" alt=""></li>
					</ul>
					<div class="diapohome__mask"></div>
				</div>

				<div id="animCoccinelle">
					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,2,0" height="100" width="815">
						<param name="movie" value="images/flash/coccinelle2.swf">
						<param name="quality" value="high">
						<param name="wmode" value="transparent">
						<embed src="images/flash/coccinelle2.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent" height="100" width="815">
					</object>
				</div>
			</section>
			
			<!-- PRODUITS -->
			<section class="ecran" id="produits">
				<div class="container-ecran">
					<div class="grid__item one-quarter">
						<jdoc:include type="modules" name="home-ecran1-left" style="no" />
					</div><!-- 
					--><div class="grid__item two-thirds ">
						<jdoc:include type="modules" name="home-ecran1-center" style="no" /><!-- --><jdoc:include type="modules" name="home-ecran1-right" style="no" />
					</div>
				</div>
			</section>
			
			<!-- LE GROUPEMENT -->
			<section class="ecran" id="groupement">
				<div class="container-ecran">
					<div class="grid__item one-quarter">
						<jdoc:include type="modules" name="home-ecran3-left" style="no" />
					</div><!-- 
					--><div class="grid__item two-thirds ">
						<jdoc:include type="modules" name="home-ecran3-center" style="no" /><!-- --><jdoc:include type="modules" name="home-ecran3-right" style="no" />
					</div>
				</div>
			</section>
			
			<!-- CONTACT -->
			<section class="ecran" id="contact">
				<div class="container-ecran">
					<div class="grid__item one-quarter">
						<jdoc:include type="modules" name="home-ecran4-left" style="no" />
					</div><!-- 
					--><div class="grid__item two-thirds ">
						<jdoc:include type="modules" name="home-ecran4-center" style="no" /><!-- --><jdoc:include type="modules" name="home-ecran4-right" style="no" />
					</div>
				</div>
			</section>

			<div id="animVer">
				<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,2,0" height="271" width="159">
					<param name="movie" value="images/flash/ver2.swf">
					<param name="quality" value="high">
					<param name="wmode" value="transparent">
					<embed src="images/flash/ver2.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" wmode="transparent" height="271" width="159"> 
			  	</object>
		  	</div>
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