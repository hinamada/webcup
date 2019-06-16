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

  <!-- Start your project here-->
  
  <!-- /Start your project here-->	
  
	<!-- Timeline -->
	<div class="row">
	  <div class="col-md-12">
		<div class="timeline-main">
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
					  <a href="#!">
						<span class="circle primary-color z-depth-1-half"><i class="fas fa-check" aria-hidden="true"></i></span>
					  </a>
						
					  <!-- Section Description -->
						<div class="step-content z-depth-1 ml-2 p-4">
							
							<img class="card-img-top" src="<?php echo url('img/articles/'.$actualite[$i]['urlImage']); ?>" alt="Card image cap">
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
</body>

</html>
