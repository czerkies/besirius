<?php
include('/homepages/1/d386199518/htdocs/ele/doctype.php');
$mbesi = 'references-realisations';
$lrefrea = 'idips';
include('/homepages/1/d386199518/htdocs/ele/title_refrea.php');
?>
<meta name="description" content="Concepteur de stand, standiste qui vous accompagne depuis la définition de votre cahier des charges, à la réalisation du stand clés en mains sur le salon." />
<meta name="keywords" content="agencement de stand professionnel, aménagement de stand professionnel, aménagement de stand salon, concepteur de stand salon, conception de stand clé en main, création stand personnalise, prestataire stand d'exposition, prestataire stand salon, réalisation de stand sur mesure, stand clé en main, stand d'exposition sur mesure, stand salon haut de gamme, stand salon professionnel, stand sur mesure, standiste de salon professionnel" />
<?php include('/homepages/1/d386199518/htdocs/ele/head_menu.php'); ?>
<div id="imgactive">
	<a href="go2cam.php" title="GO2CAM">
	<div id="fleche_g">
		<img src="previous.png" />
	</div>
	</a>
	<a href="itekpharma.php" title="ITEKPHARMA">
	<div id="fleche_d">
		<img src="next.png" />
	</div>
	</a>
<img src="img/EXPOPROTECTION 2012 - IDIPS 1_gr.jpg" title="EXPOPROTECTION 2012 - IDIPS 1" alt="EXPOPROTECTION 2012 - IDIPS 1" />
</div>
<div id="txtactive">
<h1 class="titre"><?php echo strtoupper($donnees['titre']); ?></h1>
<p class="expo"><?php echo htmlspecialchars_decode($donnees['salon']); ?></p>
<p class="lieux"><?php echo htmlspecialchars_decode($donnees['lieux']); ?></p>
<p class="surface"><?php echo htmlspecialchars_decode($donnees['surface']); ?> m&sup2;</p>
<p class="date"><?php echo htmlspecialchars_decode($donnees['date']); ?></p>
<p class="type"><?php echo htmlspecialchars_decode($donnees['type']); ?></p>
<p class="description">
<?php echo htmlspecialchars_decode($donnees['description']); ?>
</p>
</div>
<?php 
include('/homepages/1/d386199518/htdocs/references-realisations/lrefrea.php');
include('/homepages/1/d386199518/htdocs/ele/footer.php');
?>