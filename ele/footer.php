	</div>
	<div id="refetrea" <?php if(isset($mbesi) && $mbesi == 'references-realisations') echo ' class="refreadevis"'; ?>>
		<a href="<?= RACINE; ?>references-realisations/carrement-fleurs.php">
			<div class="dot1"></div><div class="dot2"></div><div class="dot3"></div><span>Références et réalisations</span>
		</a>
	</div>
</div>
<footer>
SAS au capital social de 8 000 €
&#8226; 537 679 482 00043
&#8226; <a target="_blank" href="https://www.google.fr/maps/place/36+Rue+du+Faubourg+Valmorin,+28210+Nogent-le-Roi/@48.6511556,1.5253007,440m/data=!3m1!1e3!4m2!3m1!1s0x47e40314802bed59:0x1deca07c1ed51afc!6m1!1e1">36 rue du Faubourg Valmorin 28 210 NOGENT LE ROI</a>
&#8226; 01 75 92 09 43
&#8226; <a target="_blank" href="mailto:contact@be-sirius.fr">contact@be-sirius.fr</a> <span> <a target="_blank" href="https://plus.google.com/u/0/114330815862818495709/posts" rel="publisher"><img src="<?= RACINE; ?>/gp.png" class="sogp"></a> <a target="_blank" href="https://www.facebook.com/BeSirius"><img src="<?= RACINE; ?>/fb.png" class="sofb"></a> <a target="_blank" href="http://www.standiste.blogspot.fr"><img src="<?= RACINE; ?>/blog.png" class="soblog"></a></span>
<!-- À propos du site : be-sirius Version 2.3 - Réalisé et développé par Roman Czerkies : http://romanczerkies.fr  -->
</footer>
</div>
<?php if(TG_PASSAGE_CYBERCITE): ?>
	<script id="tg_passage_cybercite" type="text/javascript" src="http://tracking.veille-referencement.com/TAG/TAG_passage.js?idsite=9128"></script>
	<!-- Hotjar Tracking Code for www.be-sirius.fr -->
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:107102,hjsv:5};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
<?php endif; ?>
</body>
</html>
