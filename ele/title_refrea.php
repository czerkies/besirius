<?php
$reponse = $bdd->query('SELECT * FROM refrea WHERE id_titre="'.$lrefrea.'"');
$donnees = $reponse->fetch();
echo '<title>' . $donnees['type'] . ' ' . $donnees['titre'] . ' - ' . $donnees['salon'] . ' - Réalisation Be Sirius</title>';
?>