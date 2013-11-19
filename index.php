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
		<link rel="stylesheet" href="/templates/biobreizhhome/css/kern.css" type="text/css">
	</head>
	<body>

		<header class="header">
			<h1 class="logo">
				BIOBREIZH
			</h1>
			<nav class="mainmenu">
		    <ul class="nav nav-mainmenu">
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#accueil">Accueil</a></li>
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#groupement">Le groupement</a></li>
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#produits">Les produits</a></li>
			    <li class="nav-mainmenu__item"><a class="nav-button" href="/#contact">Contact</a></li>
			  </ul>
			</nav>
		</header>

		<div class="page-container">
			
			<aside class="grid__item one-quarter">
				<jdoc:include type="modules" name="page-aside--custom" style="bb" />				
			</aside><!--
			
			--><section class="grid__item three-quarters content">
				
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				
			</section>

		</div>

		<footer class="page-footer">
			<div class="grid grid--right">
				<div id="contact-form" class="grid__item three-eighths contact contact-form">
			    <h1 class="contact__tile">Contactez-nous</h1>
			    
			    <ul class="contact__error" id="errors">
			        <li id="info" class="contact__error-item">There were some problems with your form submission:</li>
			    </ul>
			    
			    <p class="contact__success" id="success">Thanks for your message! We will get back to you ASAP!</p>
			    
			    <form class="contact__form" method="post" action="process.php">
			        <p>
			            <label class="contact__label" for="name">Name: <span class="required">*</span></label>
			            <input class="contact__field-txt" type="text" id="name" name="name" value="" placeholder="Votre nom" required="required" autofocus="autofocus" />
			        </p>
			        <p>
			            <label class="contact__label" for="email">Email Address: <span class="required">*</span></label>
			            <input class="contact__field-txt" type="email" id="email" name="email" value="" placeholder="Votre email" required="required" />
			        </p>

			        <P>
			            <label class="contact__label" for="message">Message: <span class="required">*</span></label>
			            <textarea class="contact__field-txt contact__field-txt--area" id="message" name="message" placeholder="Votre message" required="required" data-minlength="20"></textarea>
			        </p>

			        <p>
			            <input class="contact__submit" type="submit" value="Envoyer" id="submit-button" />
			        </p>

			        <!--
			        <label class="contact__label" for="telephone">Telephone: </label>
			        <input class="contact__field-txt" type="tel" id="telephone" name="telephone" value="" />
			        
			        <label class="contact__label" for="enquiry">Enquiry: </label>
			        <select class="contact__field-select" id="enquiry" name="enquiry">
			            <option value="general">General</option>
			            <option value="sales">Sales</option>
			            <option value="support">Support</option>
			        </select>
			        -->

			    </form>
				</div>
				<section class="grid__item three-eighths">
					<h3>APFLBB</h3>
					<ul>
						<li>7 rue Bideford<br />29400 LANDIVISIAU</li>
						<li></li>
						<li>Tél : 02 98 63 17 93</li>
						<li>Tél : 02 98 63 17 93</li>
						<li>Tél : 02 98 63 17 93</li>
						<li><a href="mailto:">contact@biobreizh.org</a></li>
					</ul>
				</section>
			</div>
		</footer>

		<script src="/templates/biobreizhhome/js/vendor/jquery-min.js"></script>
    <script src="/templates/biobreizhhome/js/plugin.js"></script>
    <script src="/templates/biobreizhhome/js/main.js"></script>

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