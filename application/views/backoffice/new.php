<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wemanity | Création</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo url('css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo url('css/mdb.min.css'); ?>" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo url('css/style.css'); ?>" rel="stylesheet">

    <!-- jQuery -->

</head>

<body  >
<div class="animsition"
     data-animsition-in-class="fade-in"
     data-animsition-in-duration="3000"
     data-animsition-out-class="fade-out"
     data-animsition-out-duration="800">
    <!-- Start your project here-->
    <!--Main Navigation-->
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
                    <div class="smalltext">Days</div>
                </div>

                <div>
                    <span class="hours"></span>
                    <div class="smalltext">Hours</div>
                </div>

                <div>
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                </div>

                <div>
                    <span class="seconds"></span>
                    <div class="smalltext">Seconds</div>
                </div>

            </div>

        </div>


    </header>
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark elegant-color scrolling-navbar">
        <a class="navbar-brand" href="#"><strong>WEMANITY</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Backoffice/index")?>">Articles</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url("Backoffice/logout")?>">Déconnexion</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Main Navigation-->
    <div class="container-fluid mt-5">

        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nouvelle article</h5>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open_multipart('Backoffice/saveArticle');?>
                            <!-- Material input -->
                            <div class="form-group">
                                <!-- Default input -->
                                <label for="exampleForm2">Titre article (*) : </label>
                                <input type="text" name="titre" class="form-control">
                            </div>

                            <div class="form-group">
                            <!-- Material input -->
                                <!-- Default input -->
                                <label for="exampleForm2">Contenu(*) : </label>
                                <input type="text" name="contenu" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleForm2">Catégories :  </label>
                                <select name="idCategorie" class="browser-default custom-select">
                                    <option value="1">Santé</option>
                                    <option value="2">Politique</option>
                                    <option value="3">Science</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleForm2">Photo : </label>
                                <input type="file"  name="userfile" >

                            </div>

                            <div class="form-group">
                                <label for="exampleForm2">Url video :  </label>
                                <input name="urlVideo" type="text" id="exampleForm2" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-elegant btn-block">Enregistrer</button>
                        </form>
                    </div>
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


</script>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?php echo url('js/clock.js'); ?>"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
<script type="text/javascript" src="<?php echo url('js/transition.js'); ?>"></script>

<!-- animsition.js -->
<script src="<?php echo url('js/animsition.min.js');?>"></script>


</body>

</html>