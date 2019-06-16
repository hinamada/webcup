<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo url('css/mdb.min.css'); ?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo url('css/style.css'); ?>" rel="stylesheet">
</head>

<body>

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
<!--Main Navigation-->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12  col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Déclaration malade</h1>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('Info/declarerMalade') ?>
                        <!-- Default input -->
                        <div class="form-group">
                            <label for="exampleForm2">Nom du malade(*) : </label>
                            <input type="text" name="nomMalade" id="exampleForm2" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="exampleForm2">Tuteur(*): </label>
                            <input type="text" name="nomTuteur" id="exampleForm2" class="form-control">
                        </div>
                        <!-- Default input -->
                        <div class="form-group">
                            <label for="exampleForm2">Symptômes : </label>
                            <select name="symptomes" class="browser-default custom-select">
                                <option value="Perte de la vue">Perte de la vue</option>
                                <option value="Paralysie">Paralysie</option>
                                <option value="Autres">Autres</option>
                            </select>
                        </div>
                        <input type="hidden" name="lat" id="lat" />
                        <input type="hidden" name="lng" id="lng" />
                        <button  type="submit" class="btn btn-elegant btn-block">Déclarer le malade</button>

                    </form>
                </div>
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

<script type="text/javascript">
    function maPosition(position) {
        $("#lat").val(position.coords.latitude);
        $("#lng").val(position.coords.longitude);
    }
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(maPosition);
    }
</script>
  <script type="text/javascript" src="<?php echo url('js/clock.js'); ?>"></script>
</body>

</html>
