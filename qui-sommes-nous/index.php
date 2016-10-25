<?php
include('../ele/doctype.php');
$mbesi = 'quisommes';
$reponse = $bdd->query('SELECT * FROM pages WHERE id_pages="'.$mbesi.'"');
$donnees = $reponse->fetch();
?>
<title>Fabricant et concepteur de stands salon professionnel ou évènementiel - Be Sirius</title>
<meta name="description" content="BE-SIRIUS est spécialisé dans la conception et la réalisation de stand, ainsi que dans l'installation générale de forums, congrès et salons, et dans la gestion logistique de vos événements." />
<meta name="keywords" content="agencement de stand professionnel, aménagement de stand professionnel, aménagement de stand salon, concepteur de stand salon, conception de stand clé en main, création stand personnalise, prestataire stand d'exposition, prestataire stand salon, réalisation de stand sur mesure, stand clé en main, stand d'exposition sur mesure, stand salon haut de gamme, stand salon professionnel, stand sur mesure, standiste de salon professionnel" />
<?php include('../ele/head_menu.php'); ?>
	<div id="cont_1">
	<h1 class="instatitre"style=" font-size: 1.4em;">Conception et réalisation de stands </h1>
	<h2 class="titrecol" style=" font-size: 1.2em; margin-top:5px;">Spécialiste de l'aménagement de stands et espaces événementiels</h2>
	<p>
	Le <a href="http://groupe-nisaba.fr/">Groupe NISABA</a>, créé en 2011, a pour vocation de traiter l'ensemble des problématiques liées à l'agencement.
	Pour ce faire, deux entités sont à votre service:
	BE-SIRIUS qui est spécialisé dans la conception et la <a href="http://www.be-sirius.fr/stands-sur-mesure/">réalisation de stand</a>, ainsi que dans <a href="http://www.be-sirius.fr/installation-generale/">l'installation générale</a> de forums, congrès et salons, et dans la gestion logistique de vos événements.<br>
	<a href="http://espaceetstyle.fr/">ESPACE ET STYLE</a> qui est spécialisé dans l'agencement de magasins, boutiques, showrooms.<br>
	Pour BE-SIRIUS, <strong>cinq designers expérimentés</strong> travaillent sur vos projets pour mettre en avant votre image de marque sur les salons, de la manière la plus adaptée à votre besoin, et toujours en suivant les dernières tendances.
	Dans le but d'être toujours au plus proche de vos besoins, <strong>nous avons intégré une équipe de menuiserie à notre structure</strong>, nous permettant ainsi de ne faire qu'un, depuis l'étude de vos besoin jusqu'à l'installation de votre stand, de votre salon ou de votre événement.
	Ainsi, <strong>un de nos Chefs de projets vous accompagne depuis l'étude de vos besoins jusqu'à la fin de votre installation</strong>, vous ne changez pas d'interlocuteur et toutes <strong>les informations que vous nous communiquez sont prises en compte en temps réel</strong>.
	</p>
	</div>
	<input type="radio" name="slider" id="slide1" />
	<input type="radio" name="slider" id="slide2" />
	<input type="radio" name="slider" id="slide3" />
	<div id="cont_2">
		<div id="overflow">
			<div class="inner">
				<article><img src="SCHNEIDER ELECTRIQUE - RUNNING EXPO.jpg" alt="SCHNEIDER ELECTRIQUE - RUNNING EXPO" /></article>
				<article><img src="JORDHAL HBAU - BATIMAT 2013.jpg" alt="JORDHAL HBAU - BATIMAT 2013" /></article>
				<article><img src="ACR GROUP EQUIP'AUTO.jpg" alt="ACR GROUP EQUIP'AUTO" /></article>
			</div>
		</div>
		<div id="active">
			<label for="slide1"></label>
			<label for="slide2"></label>
			<label for="slide3"></laber>
		</div>
	</div>
<?php
$reponse->closeCursor();
include('../ele/footer.php');
?>
