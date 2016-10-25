<?php
include('../ele/doctype.php');
$mbesi = 'contact';
?>
<title>Devis création et installation de stand - Contact Be Sirius, standiste</title>
<meta name="description" content="N'hésitez pas à prendre contact pour toutes demandes de devis ou d'informations supplémentaires pour la création, l'installation ou la location de stand personnalisé." />
<meta name="keywords" content="agencement de stand professionnel, aménagement de stand professionnel, aménagement de stand salon, concepteur de stand salon, conception de stand clé en main, création stand personnalise, prestataire stand d'exposition, prestataire stand salon, réalisation de stand sur mesure, stand clé en main, stand d'exposition sur mesure, stand salon haut de gamme, stand salon professionnel, stand sur mesure, standiste de salon professionnel" />
<?php include('../ele/head_menu.php'); ?>
<div id="contact1">
<h1 class="titrecol">Contact Be-Sirius, standiste</h1>
  <div id="ficheback">
    <div id="fichetxt">
      <p>Service commercial :<br><br>
      E-mail : <a href="mailto:contact@be-sirius.fr">contact@be-sirius.fr</a><br>
      Téléphone : <a href="tel:0175920943">01 75 92 09 43</a></p>
    </div>
  </div>
<div id="formulaire">
  <form method="post" action="">
    <input type="text" name="nom" id="nom" value="<?php if(isset($_POST['nom'])) echo $_POST['nom']; ?>" title="Nom" placeholder="Nom" required><br>
    <input type="text" name="prenom" id="prenom" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom']; ?>" title="Prénom" placeholder="Prénom"><br>
    <input type="text" name="societe" id="societe" value="<?php if(isset($_POST['societe'])) echo $_POST['societe']; ?>" title="Société" placeholder="Société"><br>
    <input type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" title="Mail" placeholder="Mail" required><br>
    <input type="tel" name="telephone" id="telephone" value="<?php if(isset($_POST['telephone'])) echo $_POST['telephone']; ?>" title="Téléphone" placeholder="Téléphone"><br>
    <?php if(isset($msg)) echo $msg; ?>
    <!-- Input si non vide = rbt -->
    <input class="rbt" type="text" name="rbt" value="<?php if(isset($_POST['rbt'])) echo $_POST['rbt']; ?>">
  </div>
</div>
<div id="contact2">
  <textarea class="radius" type="text" name="message" id="message" title="Descriptif de vos besoins" placeholder="Descriptif de vos besoins" required><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea>
  <p>
    <input class="typo" type="reset" value="Vider">
    <input class="typo" type="submit" name="sendMail" value="Envoyer">
  </p>
  </form>
</div>
<?php include('../ele/footer.php'); ?>
