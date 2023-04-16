<?php
$clef_secret = "6LfFb7IUAAAAABK29HxTXhWQ-6wDhBco367rh11h";
$clef_public = "6LfFb7IUAAAAABbm7hjYAmHzFNBmiHqiBQsxSrB1";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  
  <title>Contact</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat">
            <link rel="stylesheet" href="css./mainstyle.css">
            <link rel="stylesheet" href="css./contact.css">
  <link rel="icon" href="logos/favicon.ico" />
  
   <meta name="description" content="Les virades de l'espoir de Chevilly à 20 km d'Orléans,
 pour lutter contre la mucoviscidose : venez donner votre souffle pour ceux qui en manquent.
Animations nombreuses et variées : vide-grenier, marches, parcours VTT, musique, jeux...
Retrouvez le programme, et la rétrospective des meilleurs moments des virades de Chevilly depuis 1998.
." />
  <meta name="keywords" content="Virade, virades, virade de l’espoir, virades de l’espoir,virades de chevilly,  espoir, souffle, donner son souffle, manon buffoni, buffoni manon,  muco, mucoviscidose, Chevilly, Artenay, Orléans, Loiret, région centre, carole bellet, bellet carole, augustin buffoni, buffoni augustin, Festival, festivirade, festivirades, musique, Vide-grenier, vide grenier" />
  <link rel="image_src" href="logos/logo_site.png" />
  <meta property="og:image" content="logos/logo_site.png" />
  <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $clef_public;?>"></script>
<script>
grecaptcha.ready(function () {
  grecaptcha.execute('<?php echo $clef_public;?>', { action: 'contact' }).then(function (token) {
    var recaptcha = document.getElementById('recaptcha');
    recaptcha.value = token;
  });
});
</script>
        

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

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha'])) 
{
  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
  $recaptcha_response = $_POST['recaptcha'];
  $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $clef_secret . '&response=' . $recaptcha_response);
  $recaptcha = json_decode($recaptcha);
  if ($recaptcha->score >= 0.5) 
  {
  echo "succès";
  } 
  else 
  {
  echo "échec";
  }
} 
?>
<content>

   <div class="container">
      <div class="bartext">
<div class="textebar">Nous contacter</div>
</div>
  <form method="post" action="cible.php">

    <label for="nom"></label>
    <input type="text" id="nom" name="nom" placeholder="Nom :" required style="max-width: 500px" maxlength="30">

    <label for="prenom"></label>
    <input type="text" id="prenom" name="prenom" placeholder="Prénom :" required style="max-width: 500px" maxlength="30">
    <p></p>
    <label for="objet">Sujet :</label>
    <select id="objet" name="objet" required>
      <option value=""></option>
      <option value="bénénévole">Demande d'informations</option>
      <option value="partenaire">Devenir bénévole</option>
      <option value="don">Faire un don</option>
      <option value="informations">Etre partenaire</option>
    </select>

    <label for="message"></label>
    <textarea id="message" name="message" placeholder="Décrivez votre demande :" required style="height:200px"></textarea>

    <label for="mail">Votre adresse mail :</label>
    <input type="email" id="mail" name="mail" placeholder="mail :" required>
    <p></p>
<!-- Notre boite de vérification -->
          <input type="hidden" name="recaptcha" id="recaptcha">
    <input type="submit" value="Envoi">

  </form>
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
</html>
      
         