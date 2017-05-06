<link href="bsirius.png" rel="apple-touch-icon" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29700578-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
	<div id="head">
		<div id="logo">
			<a href="<?= RACINE; ?>">
				<p>Créateur de stands et Agencement</p>
				<img class="size_logo" src="<?= RACINE; ?>logobesirius.png" alt="Be-Sirius : Concepteur de stand, standiste qui vous accompagne depuis la définition de votre cahier des charges, à la réalisation du stand clés en mains sur le salon.">
			</a>
		</div>
		<div id="devis" <?php if ($mbesi == 'contact') echo ' class="refreadevis"'; ?>>
			<a href="<?= RACINE; ?>contact-devis/">
				<div class="dot1"></div><div class="dot2"></div><div class="dot3"></div><span>Demandez nous un devis...</span>
			</a>
			<div class="devis-coor">
				<span><a href="mailto:contact@be-sirius.fr" title="eMail">contact@be-sirius.fr</a> - <a href="tel:0175920943" title="Téléphone">01 75 92 09 43</a></span>
			</div>
		</div>
	</div>
	<div id="ban_part">
		<ul id="menu">
			<li<?php if (isset($mbesi) && $mbesi == 'accueil') echo ' class="ac"'; ?>>
				<a href="<?= RACINE; ?>">Accueil</a>
			</li>
			<li<?php if (isset($mbesi) && $mbesi == 'quisommes') echo ' class="ac"'; ?>>
			<a href="<?= RACINE; ?>qui-sommes-nous/">Qui sommes nous ?</a>
			</li>
			<li>
				<a<?php if(isset($mbesi) && $mbesi == 'stands-sur-mesure') echo ' class="ac"'; ?> href="<?= RACINE; ?>stands-sur-mesure/">Stands sur mesure</a>
				<ul>
					<li<?php if (isset($smbesi) && $smbesi == 'stands-reutilisables') echo ' class="ac"'; ?>>
						<a href="<?= RACINE; ?>stands-sur-mesure/stands-reutilisables/">Stands réutilisables</a>
					</li>
					<li<?php if (isset($smbesi) && $smbesi == 'stands-one-shot') echo ' class="ac"'; ?>>
						<a href="<?= RACINE; ?>stands-sur-mesure/stands-one-shot/">Stands one shot</a>
					</li>
				</ul>
				</li>
				<li>
					<a<?php if (isset($mbesi) && $mbesi == 'stands-en-location') echo ' class="ac"'; ?> href="<?= RACINE; ?>stands-en-location/">Stands en location</a>
				</li>
				<li>
					<a<?php if (isset($mbesi) && $mbesi == 'installation-generale') echo ' class="ac"'; ?> href="<?= RACINE; ?>installation-generale/">installation générale</a>
					<ul>
						<li<?php if (isset($smbesi) && $smbesi == 'bureau-etude') echo ' class="ac"'; ?>>
							<a href="<?= RACINE; ?>installation-generale/bureau-etude/">Bureau d'Étude</a>
						</li>
						<li<?php if (isset($smbesi) && $smbesi == 'installation') echo ' class="ac"'; ?>>
							<a href="<?= RACINE; ?>installation-generale/installation/">Installation</a>
					</li>
				</ul>
			</li>
			<li>
				<a<?php if (isset($mbesi) && $mbesi == 'evenementiel') echo ' class="ac"'; ?> href="<?= RACINE; ?>evenementiel/">Événementiel</a>
			</li>
			<li>
				<a<?php if (isset($mbesi) && $mbesi == 'contact') echo ' class="ac"'; ?> href="<?= RACINE; ?>contact-devis/">Contact</a>
			</li>
		</ul>
	<div id="ban_960">
<div id="cont">
