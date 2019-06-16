<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wemanity | Liste</title>
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
    <header class="site-navbar js-sticky-header site-navbar-target mt-5" role="banner">

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
        <a class="navbar-brand" href="<?php echo site_url("Backoffice/index")?>"><strong>WEMANITY</strong></a>
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
    <!--/.Navbar-->
    <!--Main Navigation-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-3 col-12 offset-md-9">
                <a role="button" href="<?php echo site_url("Backoffice/saveArticle")?>" class="btn-black btn">Ajouter article</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead class="table-dark">
                    <tr>
                        <th>Titre</th>
                        <th>Date de publication</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($articles as $article) {
                        $date = new \DateTime($article->datePublication) ;
                        ?>
                        <tr>
                            <td><?php echo $article->titre ?></td>
                            <td><?php echo $date->format("d-m-Y") ?></td>
                        </tr>

                        <?php
                    }
                    ?>
                    </tbody>
                </table>
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
            else{
                responsiveVoice.cancel();
                console.log($(':focus'));
                responsiveVoice.speak("Mirado");
            }
        }

    );
</script>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?php echo url('js/jquery-3.3.1.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo url('js/clock.js'); ?>"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo url('js/popper.min.js'); ?>"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo url('js/bootstrap.min.js'); ?>"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo url('js/mdb.min.js'); ?>"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js"></script>
<script type="text/javascript" src="<?php echo url('js/transition.js'); ?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- animsition.js -->
<script src="<?php echo url('js/animsition.min.js');?>"></script>

<script>
    Mousetrap.bind('backspace', function(e) {
        window.location.replace("http://localhost/HINA/webcup/");
    });
</script>
</body>

</html>