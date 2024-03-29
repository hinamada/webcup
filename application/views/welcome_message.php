<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Wemanity | Accueil</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo url('css/mdb.min.css'); ?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo url('css/style.css'); ?>" rel="stylesheet">
  
</head>

<body onload="myFunction()">
  <?php if($message!="") { ?>
  <div class="alert alert-dark alert-dismissible fade show" role="alert">
      <?php echo $message ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <?php } ?>
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">

      <div class="text-center logo">
        <img class="imagelogo" src="<?php echo url('/images/logo.png'); ?>">
      </div>
      <div class="toggle-button d-inline-block d-lg-none"><a href="#"
          class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

    </div>

  </header>
  <!-- Start your project here-->

  <div class=" countdown justify-content-md-center">

  <h1 class="text-center">Jours avant l'invasion</h1>

<div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Jours</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Heures</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Secondes</div>
  </div>
  </div>
</div>

  <div style="height:100vh;">
  <div class="container menu  text-center">
    <div class="row justify-content-md-center">


		<a href="<?php echo site_url('Info/statistique') ?>" >
		  <div class="col text-center">
			<img  tabindex="0"  class="menuel" src="<?php echo url('/images/glo.png'); ?>">
			<div class="menu-title">
			<p>Évolution</p>
			</div>
		  </div>
		</a>
		<?php if(isset($categorie)){
			for($i=0;$i<count($categorie);$i++){?>
		<a href="<?php echo site_url('Liste?idCateg='.$categorie[$i]['id']) ?>" >
		  <div class="col text-center">
			<img  tabindex="0"  class="menuel" src="<?php echo url('/images/'.$categorie[$i]['urlImage']); ?>">
			<div class="menu-title">
			<p><?php echo $categorie[$i]['nom']; ?></p>
			</div>
		  </div>
		</a>
		<?php }} ?>
    </div>

  </div>
</div>
 
  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo url('js/jquery-3.3.1.min.js'); ?>"></script>
  <script>
	$(document).ready(function(){
		responsiveVoice.OnVoiceReady = function() {
			setTimeout(
		function() 
		{
			responsiveVoice.setDefaultVoice("French Female");
				responsiveVoice.cancel();
				responsiveVoice.speak("Bienvenue sur le site Wemanity. Je suis Hina, l'amie qui va vous aider dans votre navigation. Trouvez les dernières nouvelles de notre monde sur Wemanity quelle que soit vos difficultés.Pour explorer les différentes sections de la page.Utilisez les touches de directions sur votre clavier. Bonne navigation.");
		}, 0);
		};
		
		
	});
</script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo url('js/popper.min.js'); ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo url('js/mdb.min.js'); ?>"></script>
  <script src="//code.responsivevoice.org/responsivevoice.js?key=1pDkkaGO"></script>
  <script type="text/javascript" src="<?php echo url('js/myjs.js'); ?>"></script>
<script src="<?php echo url('js/three.r92.min.js');?>"></script>
<script src="<?php echo url('js/vanta.net.min.js')?>"></script>
<script>
VANTA.NET({
  el: "body",
  color: 0xa7a4a4,
  backgroundColor: 0xffffff,
  points: 6.00,
  maxDistance: 35.00,
  spacing: 20.00
})
</script>
<script>
function myFunction(){
 responsiveVoice.setDefaultVoice("French Female");
}
</script>
<script>
$(document).keydown(
    function(e)
    {    
        if (e.keyCode == 39) {      
          if($('a').is(':focus')){
            $("a:focus").next().focus();
            responsiveVoice.cancel();
            responsiveVoice.speak($(':focus').text());
          }
          else{
            $("a:first-child").focus();
            responsiveVoice.cancel();
            responsiveVoice.speak($(':focus').text());
          }
           
        }
        else if (e.keyCode == 37) {      
          if($('a').is(':focus')){
            $("a:focus").prev().focus();
            responsiveVoice.cancel();
            responsiveVoice.speak($(':focus').text());
          }
          else{
            $("a:first-child").focus();
            responsiveVoice.cancel();
            responsiveVoice.speak($(':focus').text());
          }
        }
    }
);
</script>


</body>

</html>