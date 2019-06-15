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
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark pink scrolling-navbar">
        <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Opinions</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </nav>

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
</body>

</html>
