<?php

if($_POST){

  $msg = '';

  if(isset($_POST['nom']) && isset($_POST['prenom'])
  && isset($_POST['societe']) && isset($_POST['email'])
  && isset($_POST['telephone']) && isset($_POST['message'])
  && isset($_POST['rbt']) && empty($_POST['rbt'])){

      if(empty($_POST['nom']) || strlen($_POST['nom']) <= 2){
        $msg .= "Veuillez inscrire votre <b>Nom</b>.<br>";
      }
      if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $msg .= "Veuillez inscrire un <b>E-mail</b>.<br>";
      }
      if(!empty($_POST['telephone']) && (!is_numeric($_POST['telephone']) || strlen($_POST['telephone']) < 8)){
        $msg .= "Veuillez inscrire un <b>Téléphone</b> valide";
      }
      if(empty($_POST['message'])){
        $msg .= "Veuillez inscrire un <b>Message</b>.<br>";
      }

      if(empty($msg)){

        $nomVisiteur = $_POST['nom'];
        $prenomVisiteur = $_POST['prenom'];
        $societeVisiteur = $_POST['societe'];
        $emailVisiteur = $_POST['email'];
        $telephoneVisiteur = $_POST['telephone'];
        $messageVisiteur = htmlspecialchars(stripslashes($_POST['message']));

        // Adresse de réponse
        $mail_to = "s.ienny@be-sirius.fr,d.genete@be-sirius.fr,{$emailVisiteur}";

        // Nom de l'expéditeur
        $from = "Be-Sirius";

        // L'objet
        $sujet = "Demande de contact Be-Sirius";

        // Header du mail
        $headers = "Content-Type: text/html; charset=\"UTF-8\";\r\n";
        $headers .= "From: Be-Sirius \r\n";

        // Message au format HTML


        $message = "<html><head>
        <!--
        img{display: block; margin:0px; padding:0px;}#OOOOOO
        a img{display: block; margin:0px; padding:0px;}
        .ReadMsgBody{ width: 100%;}
        .ExternalClass{width: 100%;}
        html{-webkit-text-size-adjust: none;}
        -->
        </style>
        </head>
        <body bgcolor=\"#000;\" style=\"background-color: #FFFFFF; color: #FFFFFF;\" >
        <table bgcolor=\"#FFFFFF\" width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
        <td width=\"100%\" bgcolor=\"#e1e1e1\" background=\"\" style=\"background: url(); color: #FFFFFF;\">
        <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
        <td style=\"font-family:Arial, Helvetica, sans-serif;font-size:0px;\" align=\"center\" colspan=\"2\">
        </td>
        </tr>
        </table>
        <table bgcolor=\"#FFF7EE\" width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
        <td width=\"600\" height=\"157\" colspan=\"3\">
        <img src=\"http://be-sirius.fr/images/header.jpg\" width=\"600\" height=\"157\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" />
        </td>
        </tr>
        <tr>
        <td width=\"600\" height=\"20\" colspan=\"3\">
        <img src=\"http://t.adobefrance.com/spacer.gif\" width=\"600\" height=\"20\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" />
        </td>
        </tr>
        <tr>
        <td width=\"155\" height=\"136\" valign=\"top\">
        <table border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
          <td align=\"right\" valign=\"bottom\"><img src=\"http://be-sirius.fr/images/bienvenue.png\" width=\"115\" height=\"82\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" /></td>
          <td valign=\"bottom\" width=\"6\" align=\"right\"></td>
        </tr>
        <tr>
          <td colspan=\"2\" valign=\"top\" align=\"right\"></td>
        </tr></table>

        <td width=\"435\" align=\"left\" style=\"font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#000000;\">
          <p><span style=\"font-family:'Century Gothic';font-size:17px;line-height:17px;color:#000000;\"><u>Bonjour Mme/M {$nomVisiteur} {$prenomVisiteur} ,</u></span></p>
          <br />
          <span style=\"font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#000000;\"> </span>
          <p>Vous venez de contacter la société Be-Sirius,<br />
            Nous vous contacterons dans les plus bref délais.</p>
            <p><br />
              Merci de votre confiance, Cordialement</p>
              <img src=\"http://be-sirius.fr/images/ligne.png\" width=\"436\" height=\"24\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" /></p></td>
              <td width=\"10\">

              </td>
            </tr>


            <tr>
              <td width=\"155\" height=\"115\" valign=\"top\">
                <table  border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                  <tr>
                    <td align=\"right\" valign=\"bottom\"><img src=\"http://be-sirius.fr/images/profil.png\" width=\"115\" height=\"82\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" /></a></td>
                    <td valign=\"bottom\" width=\"6\" align=\"right\"></td>
                  </tr>
                  <tr>
                    <td colspan=\"2\" valign=\"top\" align=\"right\"></td>
                  </tr></table>
                </td>
                <td width=\"435\" align=\"left\" style=\"font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#000000;\"><p><span style=\"font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#000000;\"><u>Vos coordonnées</u></span>
                </p>
              </p>
              <p><br />
                <strong>Nom:</strong> {$nomVisiteur}<br/>
                <b>Prénom:</b>  {$prenomVisiteur}<br/>
                <b>Société:</b> {$societeVisiteur}<br/>
                <b>Téléphone:</b>  {$telephoneVisiteur}<br/>
                <b>E-mail:</b> {$emailVisiteur}<br/>
                <img src=\"http://be-sirius.fr/images/ligne.png\" width=\"436\" height=\"24\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" /></p></td>
                <td width=\"10\">

                </td>
              </tr>
              <tr>

                <td width=\"600\" height=\"22\" colspan=\"3\" valign=\"middle\" align=\"center\">
                </td>
              </tr>
              <tr>
                <td width=\"155\" valign=\"top\">
                  <table border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                    <tr>
                      <td align=\"right\" valign=\"bottom\"><img src=\"http://be-sirius.fr/images/message.png\" width=\"115\" height=\"82\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" /></a></td>
                      <td valign=\"bottom\" width=\"6\" align=\"right\">
                      </td>
                    </tr>
                    <tr>
                      <td colspan=\"2\" valign=\"top\" align=\"right\">
                      </td>
                    </tr></table>
                  </td>
                  <td width=\"435\" align=\"left\" style=\"font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#000000;\">
                    <p><span style=\"font-family:'Century Gothic';font-size:17px;line-height:17px;color:#000000;\"><u>Votre message</u></span></p>
                    <br />
                    <span style=\"font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#000000;\"> </span> <br />

                    {$messageVisiteur}
                    <img src=\"http://be-sirius.fr/images/ligne.png\" width=\"436\" height=\"24\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" /></p></td>
                    <td width=\"10\">

                    </td>
                  </tr>

                  <tr>
                    >
                    <td width=\"\" align=\"left\" style=\"font-family:Arial, Helvetica, sans-serif;font-size:12px;color:#464646;\"></td>
                    <td width=\"10\">
                    </td>
                  </tr>

                  <tr>
                    <td width=\"155\" valign=\"top\"></td>

                    <td width=\"10\" bgcolor='#ffffff'>
                      <img src=\"http://t.adobefrance.com/adobefrance/2011/template/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" />
                    </td>
                  </tr>

                  <tr>
                    <td width=\"600\" height=\"72\" colspan=\"3\">
                      <img src=\"http://be-sirius.fr/images/headerdown.jpg\" width=\"600\" height=\"72\" border=\"0\" style=\"display: block; margin:0px; padding:0px;\" />
                    </td>
                  </tr>
                </table>
                <table width=\"580\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
                  <tr>
                    <td width=\"300\" height=\"78\" colspan=\"5\" style=\"font-family:Arial, Helvetica, sans-serif; font-size:9px; color: #000;\" align=\"center\">
                      <br />
                      SAS au capital social de 8 000 € &#149; 537 697 482 000 35 &#149; 14 ter rue des Granges 28130 Hanches &#149; 01 75 92 09 43 &#149; contact@be-sirius.fr <br />
                      <br />
                      <br />
                      &copy; 2014 Be-sirius. Tous droits r&eacute;serv&eacute;s.</span><br />
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </body>
      </html>";

      mail($mail_to, $sujet, $message, $headers);

      $msg .= "Votre message a bien été envoyé.";

      }

  } else {

    $msg .= "Une erreur est survenue lors de votre demande.<br>";

  }

}
