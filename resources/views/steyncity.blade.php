

<!DOCTYPE html>
<html lang="en">

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98633309-5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-98633309-5');

    sessionStorage.setItem('project_id', 1);

  </script>
  <title>Home</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="/assets/imgs/Favicon - 16x16px.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <!-- Bootstrap core CSS -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/loader.css">
  <!-- <link rel="stylesheet" href="assets/css/login-register.css"> -->
  <!-- <link rel="stylesheet" href="assets/css/budget-slider.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.carousel.min.css">
  <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css"> -->
  <link href="/assets/css/business-frontpage.css" rel="stylesheet">
  <!-- <link rel="stylesheet" hre="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> -->
</head>

<style>
  .input-hidden {
    position: absolute;
    left: -9999px;
  }

  .input-hidden:checked+label>img {
    /*opacity:0.1;*/
    color: red !important;
  }

  /* Stuff after this is only to make things more pretty */

  .input-hidden+label>img {
    background: transparent !important;
    transition: 500ms all;
    text-align: center;
  }

  .input-hidden+label {
    display: inline-block;
    padding: 0;
    vertical-align: middle;
    background: transparent !important;
    cursor: pointer;
  }
</style>


<body>

  <!-- Navigation -->
  <div class="top"></div>

<nav class="navbar nav-custom navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="/assets/imgs/logo/cs_bw_sm.png">
            Connectivity Services
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Hom<span class='active-menu'>e</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">Providers</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="showmax.php">Showmax</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
  <!-- Header with Background Image -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li> -->
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="/assets/imgs/banners/steyn-city.jpg" alt="First slide">
        </div>
        <!-- <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/imgs/banners/banner4.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/imgs/banners/mtn-banner.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/imgs/banners/banner1.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/imgs/banners/banner2.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/imgs/banners/banner3.jpg" alt="Third slide">
        </div>

        <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/imgs/banners/centracom.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="assets/imgs/banners/green.jpg" alt="Second slide">
        </div> -->
    </div>
    <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> -->
</div>
  <!-- Page Content -->
  <div class="container ">

    <div class="row">
      <div class="col-sm-12">
        <h3 style="color:#979797; font-size: 26px; font-weight:100" class="mt-5 text-center">Browse through the
          list of available service providers
          <br> and select a package which suits you.</h3>
               </div>
    </div>

    <!-- RESULT -->
    <div class="row result mt-5">

    </div>

      <!--
<div class="row">
    <div class="col-sm-12">
        <h3 style="color:#979797; font-size: 26px; font-weight:100" class="mt-5 text-center">More providers coming
            soon</h3>
    </div>
</div>
<div class="row owl-carousel owl-theme pl-4">

    <div>
        <img src="assets/imgs/comingsoon/logo-01.png" style="height: 250px; width: 250px;">
    </div>
    <div>
        <img src="assets/imgs/comingsoon/logo-02.png" style="height: 250px;     width: 250px;">
    </div>
    <div>
        <img src="assets/imgs/comingsoon/logo-03.png" style="height: 250px;    width: 250px;">
    </div>
    <div>
        <img src="assets/imgs/comingsoon/logo-04.png" style="height: 250px;    width: 250px;">
    </div>
    <div>
        <img src="assets/imgs/comingsoon/logo-05.png" style="height: 250px;    width: 250px;">
    </div>
    <div>
        <img src="assets/imgs/comingsoon/logo-06.png" style="height: 250px;    width: 250px;">
    </div>
    <div>
        <img src="assets/imgs/comingsoon/logo-07.png" style="height: 250px;    width: 250px;">
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <h6 style="color:#979797" class="mb-4 text-center">If there is a specific provider that you would like to
            see on the Jackal Creek Fibre Portal, please can you suggest
            one below.</h6>
    </div>
    <div style="margin: 0 auto;">
        <button class="button-package m-*-auto" onclick="window.location='suggest.php';" style="background:#EF6423 !important; font-size: 20px; width: 200px;">Suggest
            a provider</button>
    </div>
</div> -->
  </div>

  <!-- FOOTER -->
<div class="footer">
    <div class="container">

      <div class="row container p-5">
        <div class="col-12">
          <p class="copyright text-center">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>
            All Rights Reserved || <b class="font-italic font-weight-bold">Powered by The Fibre Provider</b>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!--scroll up -->
  <div class="scrolltop">
    <div class="scroll icon">
      <span class="text-scroll">Top </span>
      <i class="fa fa-angle-up"></i>
    </div>
  </div>

  <div class="modal fade login" id="modal">
        <div class="modal-dialog login animated">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="box">
                        <div class="content text-white text-center message">
                        <br/>
                        <h4 style="color: #000;">Your booking has been verified</h4>
                        <br/>
                        <button data-dismiss="modal" class="btn-order-pack mt-3 btn-sm">Ok</button>';
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> -->
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <!--FONT AWESOME v-->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mockjax/1.6.2/jquery.mockjax.js"></script> -->
  <!--script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script-->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
  <!-- <script src="assets/js/jquery.ui.touch-punch.min.js"></script> -->
  <!-- <script src="assets/js/budget-slider.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
  <script src="/assets/js/handlebars.min-latest.js"></script>
  <script src="/assets/js/cleave.min.js"></script>
  <script src="/assets/js/loader.js"></script>
  <script src="/assets/js/scrollup.js"></script>
  <script src="/assets/js/index.js"></script>


</body>
<div class="loader">Fetching Results</div>

</html>
