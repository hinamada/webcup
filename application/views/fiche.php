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

  <link rel="stylesheet" href="<?php echo url('css/animsition.min.css');?>">
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <!-- Section: Blog v.4 -->
        <section class="my-5 border-top-0 border-left-0 border-bottom-0">


          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">

              <!-- Card -->
              <div class="card card-cascade wider reverse">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(142).jpg"
                    alt="Sample image">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">


                    <!-- Title -->
                    <h1 class="font-weight-bold"><a tabindex="0">Title of the news</a></h1>
                    <!-- Data -->

                    <p tabindex="0">Written by <a><strong>Abby Madison</strong></a>, 26/08/2018</p>


                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

                <div class="mt-5" >

                <p tabindex="0">At vero eos et accusamus et iusto odio dignissimos ducimus qui praesentium voluptatum deleniti atque
                    corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
                    sunt in culpa nemo enim ipsam voluptatem quia voluptas sit qui officia deserunt mollitia animi, id
                    est laborum et dolorum fuga quidem rerum facilis est distinctio.
                </p>
                <p tabindex="0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                    maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Quis autem vel
                    eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur. Temporibus
                    autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates
                    repudiandae sint et molestiae non recusandae itaque earum rerum.</p>


              </div>

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->


<<<<<<< HEAD
            </section>
            <!-- Section: Blog v.4 -->
        </div>
        <div class="col-md-6">
            
            <section class="my-5">
                <div class="row">
                    <div class="col-md-6" ><div class="text-center"><a  href="#" class="text-center" tabindex="0"><i class="fab fa-6x fa-accessible-icon" ></i></a></div></div>
                    <div class="col-md-6" ><div class="text-center"><a  href="#" class="text-center" tabindex="0">Mima</a></div></div>
                </div>
                <hr class="m-4">
                <h2 id="docRelatif">Documents relatifs</h2>
                <video class="video-fluid z-depth-1" controls>
                    <source src="https://mdbootstrap.com/img/video/Sail-Away.mp4" type="video/mp4" />
                </video>
            </section>
        </div>
=======
        </section>
        <!-- Section: Blog v.4 -->
      </div>
      <div class="col-md-6">
        <section class="my-5">
          <video class="video-fluid z-depth-1" controls>
            <source src="https://mdbootstrap.com/img/video/Sail-Away.mp4" type="video/mp4" />
          </video>
        </section>
      </div>

>>>>>>> 64349ea9e633b992b003a86d1564a819ff83e324
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
});
</script>

<script>
  Mousetrap.bind('backspace', function(e) {
window.location.replace("http://localhost/HINA/webcup/");
});
  </script>
</body>

</html>