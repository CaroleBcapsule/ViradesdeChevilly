<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	
	<title>Contact</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat">
            <link rel="stylesheet" href="css./mainstyle.css">
            <link rel="stylesheet" href="css./contact.css">
        

</head>
<body>
<header>
    <div id="headerlogo">
        <img src="logos/logo_header.jpg" alt="logo virade de l'espoir">
    </div>

    <nav>

       <ul>
            <li><i class="fas fa-home"></i><a href="index.html">Accueil</a></li>
            <li><a href="programmation.html">Programmation</a></li>
            <li><a href="mucoviscidose.html">La mucoviscidose</a></li>
            <li><a href="histoire.html">Notre histoire</a></li>
            <li><a href="don.html">Faire un don</a></li>
        </ul>
    </nav>

</header> 
  <content>
    <div class="container">
<?php 
$nom=$_POST['nom']; 
$prenom=$_POST['prenom']; 
$mail=$_POST['mail']; 
$objet=$_POST['objet']; 
$message=$_POST['message']; 

/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

$subject="$objet"; 
$destinataire="contact@viradesdechevilly.org"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
$body="$message"; 
if (mail($destinataire,$subject,$body,$headers)) { 
echo "Votre mail a été envoyé.<br>"; 
} else { 
echo "Une erreur s'est produite. Nous vous invitons à renouveller votre envoi."; 
}  
?>



</p>
<p class="cible"><a href="http://www.viradesdechevilly.org">Retour vers la page d'accueil</a></p>
    </div>
   </content>
<footer>
        <div id="partenairesun">
		<img src="logos/partenaires/logo_creditmutuel.png" alt="logo credit mutuel">
        <img src="logos/partenaires/logo_artenay.jpg" alt="logo artenay">
		<img src="logos/partenaires/logo_loiret.png" alt="logo loiret">
		<img src="logos/partenaires/logo_chevilly.png" alt="logo chevilly">
		<img src="logos/partenaires/France_Bleu_logo_2015.svg.png" alt="logo france bleu">
  </div>
          <div id="partenairesdeux">
		<img src="logos/partenaires/logo_aidpc.png" alt="logo aid pc">
            <img src="logos/partenaires/logo_as.png" alt="logo as hôtel">    
            <img src="logos/partenaires/logo_beauvallet.png" alt="logo beauvallet imprimeur">
            <img src="logos/partenaires/logo_mamgoz.png" alt="logo mam goz">     
            <img src="logos/partenaires/logo_proprietescom.jpg" alt="logo proprietesprivees.com">
            
		</div>
        <div class="partner"><a href="partenaires.html">Devenir partenaire</a></div>
</footer>
    
<div class="socials">
  <h3><a href="contact.html"><i class="fa fa-envelope fa-2x"></i></a></h3>
    <h3><a href="https://www.facebook.com/groups/augustin.buffoni/" target="blank"><i class="fab fa-facebook-f fa-2x"></i></a></h3>
    <h3><a href="http://www.vaincrelamuco.org" target="blank"><img src="logos/LogoVLMBlanc_aside.png" alt="logo Vaincre la muco"></a></h3>
    </div>



</body>
