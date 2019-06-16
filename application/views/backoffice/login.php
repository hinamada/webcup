<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wemanity | Login</title>
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
    <!--Main Navigation-->
    <div class="container-fluid mt-5">
        <div class="row">
        <div class="col-12 col-md-6 offset-md-3"
        <!-- Default form login -->
        <form class="text-center border border-light p-5" method="post" action="<?php echo site_url("Backoffice/login")?>">
                                    <?php echo validation_errors(); ?>
            <?php if(isset($message)) {?>
                <p><?php echo $message ?></p>
            <?php } ?>
            <p class="h4 mb-4">Login</p>

            <!-- Email -->
            <input type="text" name="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Nom utilisateur">

            <!-- Password -->
            <input type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Mot de passe">



            <!-- Sign in button -->
            <button class="btn btn-elegant btn-block my-4" type="submit">Login</button>



        </form>
        </div>
    </div>
        <!-- Default form login -->

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