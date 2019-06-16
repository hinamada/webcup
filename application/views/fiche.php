<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Wemanity | Fiche</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo url('css/bootstrap.min.css'); ?>" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo url('css/mdb.min.css'); ?>" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo url('css/style.css'); ?>" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo url('css/animsition.min.css');?>">
<!-- jQuery -->

</head>

<body onload="myFunction()" >
<div class="animsition"
  data-animsition-in-class="fade-in"
  data-animsition-in-duration="3000"
  data-animsition-out-class="fade-out"
  data-animsition-out-duration="800">
  <!-- Start your project here-->
  <!--Main Navigation-->
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <?php
      require ('navbar.php')
      ?>
    <div class="head2" style="margin-top: 30px">

      <div class=" text-center logo">
        <img class="imagelogo" src="<?php echo url('/images/logo.png'); ?>">
      </div>
      <div class="toggle-button d-inline-block d-lg-none">
        <a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
      </div>
      <div id="clockdiv2">

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

      <div>

      </div>
  </header>
</div>

  <!--Main Navigation-->


  <div class="container-fluid mt-5">

    <div  class="text-center"><h1 id="titre" class="titre"><?php echo $actualite->titre; ?></h1></div>
    <div class="row">
      <div class="col-md-8">
        <section class="text-center">
            
			<video id="video" class="video-fluid z-depth-1" controls>
              
			  <source src="<?php echo $actualite->urlVideo; ?>" type="video/mp4" />
            </video>
          </section>
      </div>

      
	  

      <div class="col-md-4">
      <p tabindex="0" id="contenu"><?php echo $actualite->contenu; ?></p>
      </div>
      

    </div>
    
    
  </div>
</div>
  <!-- /Start your project here-->
  
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo url('js/jquery-3.3.1.min.js'); ?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo url('js/popper.min.js'); ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo url('js/mdb.min.js'); ?>"></script>
  <script src="//code.responsivevoice.org/responsivevoice.js?key=1pDkkaGO"></script>
  <script src="<?php echo url('js/three.r92.min.js');?>"></script>
  <script>
  
function myFunction(){
 responsiveVoice.setDefaultVoice("French Female");
 
}
</script>
  <script type="text/javascript" src="<?php echo url('js/clock.js'); ?>"></script>
<script>
$(document).keydown(
    
    function(e)
    {    
      var text = "Cliquez sur P pour jouer la vidéo. Cliquez sur Retour pour revenir à la liste des articles. Cliquez sur Echap pour retourner à l'accueil.";
      if (e.keyCode == 82) {      
        responsiveVoice.cancel();
        responsiveVoice.speak($('#titre').text()+'. '+$('#contenu').text()+' '+ text);
      }
      if (e.keyCode == 80) {      
        $('#video').get(0).play();
      }
    }


);
</script>

  <!-- SCRIPTS -->
 
  <script type="text/javascript" src="<?php echo url('js/clock.js'); ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo url('js/mdb.min.js'); ?>"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
  <script type="text/javascript" src="<?php echo url('js/transition.js'); ?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- animsition.js -->
<script src="<?php echo url('js/animsition.min.js');?>"></script>
<script>

  $(document).ready(function() {
  $(".animsition").animsition({
    inClass: 'fade-in',
    outClass: 'fade-out',
    inDuration: 1500,
    outDuration: 800,
    linkElement: '.animsition-link',
    // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
    loading: true,
    loadingParentElement: 'body', //animsition wrapper element
    //loadingClass: 'animsition-loading',
    loadingInner: '', // e.g '<img src="loading.svg" />'
    timeout: false,
    timeoutCountdown: 5000,
    onLoadEvent: true,
    browser: [ 'animation-duration', '-webkit-animation-duration'],
    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    overlay : false,
    overlayClass : 'animsition-overlay-slide',
    overlayParentElement : 'body',
    transition: function(url){ window.location.href = url; }

    
  });
  responsiveVoice.OnVoiceReady = function() {
			setTimeout(
		function() 
		{
			responsiveVoice.setDefaultVoice("French Female");
				responsiveVoice.cancel();
				responsiveVoice.speak("Vous êtes sur une page d'article. Cliquez sur la touche R pour écouter l'article si vous avez des difficultés à lire.");
		}, 0);
		};
});
</script>

<script>
  Mousetrap.bind('backspace', function(e) {
window.location.replace("<?php echo site_url(); ?>/Liste?IdCateg=2");
});
Mousetrap.bind('escape', function(e) {
window.location.replace("<?php echo site_url(); ?>");
});

  </script>

<script src="<?php echo url('js/annyang.min.js');?>"></script>
<script>
if (annyang) {
  // Let's define our first command. First the text we expect, and then the function it should call
  var commands = {
    'hello': function() {
      alert("me");
    }
  };

  // Add our commands to annyang
  annyang.addCommands(commands);

  // Start listening. You can call this here, or attach this call to an event, button, etc.
  annyang.start();
}
</script>
</body>

</html>