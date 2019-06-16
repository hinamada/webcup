<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Wemanity | Articles par catégorie</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<!-- Bootstrap core CSS -->
	<link href="<?php echo url('css/bootstrap.min.css'); ?>" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?php echo url('css/mdb.min.css'); ?>" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="<?php echo url('css/style.css'); ?>" rel="stylesheet">
	<!-- Timeline CSS -->
	<link href="<?php echo url('css/addons-pro/timeline.css'); ?>" rel="stylesheet">
	<!-- Timeline CSS - minified-->
	<link href="<?php echo url('css/addons-pro/timeline.min.css'); ?>" rel="stylesheet">
	
</head>

<body>
<div class="animsition "
  data-animsition-in-class="fade-in"
  data-animsition-in-duration="3000"
  data-animsition-out-class="fade-out"
  data-animsition-out-duration="800">
  <!-- Start your project here-->
	<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

<div class="head2">

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


</header>
  <!-- /Start your project here-->	
  
	<!-- Timeline -->
	<div  class="text-center "><h1 class="titre">Articles</h1></div>
	<div class="row anim" >
	  <div class="col-md-12">
		<div class="timeline-main" >
		  <!-- Timeline Wrapper -->
		  <ul class="stepper stepper-vertical timeline timeline-basic pl-0">
			<?php if(isset($actualite)){ 
				for($i=0;$i<count($actualite);$i++){
					if($i%2!=0){?>
					<li class="timeline-inverted">
					<?php } else{?>
					<li>
					<?php } ?>
			  <!--Section Title -->
					  <a href="#!" >
						<span class="circle primary-color z-depth-1-half"><i class="fas fa-check" aria-hidden="true"></i></span>
					  </a>
						
					  <!-- Section Description -->
						<div class="step-content z-depth-1 ml-2 p-4" style=" background-color:white;">	
												
							<img id="<?php echo $actualite[$i]['id']; ?>" tabindex="0" onclick="myFunction(this)" class="card-img-top" src="<?php echo url('img/articles/'.$actualite[$i]['urlImage']); ?>" alt="Card image cap">

							<h4 class="font-weight-bold"><?php echo $actualite[$i]['titre']; ?></h4>
							<p class=" mt-4 mb-0"><?php echo $actualite[$i]['contenu']; ?>
							</p>
						</div>
					</li>
			<?php }} ?>

		  </ul>
		  <!-- Timeline Wrapper -->
		</div>
	  </div>
	</div>
					</div>
	<!-- Timeline -->

 
  
  <!-- SCRIPTS -->
  <!-- Timeline JS -->
  <script type="text/javascript" src="<?php echo url('js/addons-pro/timeline.js'); ?>"></script>
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
	<script type="text/javascript" src="<?php echo url('js/myjs.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo url('js/clock.js'); ?>"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>

	<!-- animsition.js -->
<script src="<?php echo url('js/animsition.min.js');?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
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
				responsiveVoice.speak("Vous êtes maintenant sur la page listant les articles de la Catégorie, faites défiler votre tabulation pour naviguer vers chaque article");
		}, 0);
		};
});
</script>
<script src="<?php echo url('js/three.r92.min.js');?>"></script>
<script src="<?php echo url('js/vanta.net.min.js')?>"></script>
<script>
VANTA.NET({
  el: ".anim",
	color: 0xafafaf,
  backgroundColor: 0xffffff,
  points: 6.00,
  maxDistance: 12.00
})
</script>
<script>
  Mousetrap.bind('backspace', function(e) {
window.location.replace("https://hinawebcup.herokuapp.com/");
});
Mousetrap.bind('escape', function(e) {
window.location.replace("https://hinawebcup.herokuapp.com/");
});

	</script>
	<script>
function myFunction(x){
	window.location.replace("<?php echo site_url('/details/voir/'); ?>"+x.id);
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
