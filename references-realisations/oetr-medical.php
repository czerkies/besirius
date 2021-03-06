<?php
include('../ele/doctype.php');
$mbesi = 'references-realisations';
$lrefrea = 'oetr-medical';
include('../ele/title_refrea.php');
?>
<meta name="description" content="Concepteur de stand, standiste qui vous accompagne depuis la définition de votre cahier des charges, à la réalisation du stand clés en mains sur le salon." />
<meta name="keywords" content="agencement de stand professionnel, aménagement de stand professionnel, aménagement de stand salon, concepteur de stand salon, conception de stand clé en main, création stand personnalise, prestataire stand d'exposition, prestataire stand salon, réalisation de stand sur mesure, stand clé en main, stand d'exposition sur mesure, stand salon haut de gamme, stand salon professionnel, stand sur mesure, standiste de salon professionnel" />
<?php include('../ele/head_menu.php'); ?>
<div id="imgactive">
	<a href="nicotech.php" title="NICOTECH">
	<div id="fleche_g">
		<img src="previous.png" />
	</div>
	</a>
	<a href="omerin.php" title="OMERIN">
	<div id="fleche_d">
		<img src="next.png" />
	</div>
	</a>
<img src="img/OETR MEDICAL - JFR 2012_gr.jpg" title="OETR MEDICAL - JFR 2012" alt="OETR MEDICAL - JFR 2012" />
</div>
<div id="txtactive">
<h1 class="titre"><?= strtoupper($donnees['titre']); ?></h1>
<p class="expo"><?= htmlspecialchars_decode($donnees['salon']); ?></p>
<p class="lieux"><?= htmlspecialchars_decode($donnees['lieux']); ?></p>
<p class="surface"><?= htmlspecialchars_decode($donnees['surface']); ?> m&sup2;</p>
<p class="date"><?= htmlspecialchars_decode($donnees['date']); ?></p>
<p class="type"><?= htmlspecialchars_decode($donnees['type']); ?></p>
<p class="description">
<?= htmlspecialchars_decode($donnees['description']); ?>
</p>
</div>
<?php 
include('../references-realisations/lrefrea.php');
include('../ele/footer.php');
?>