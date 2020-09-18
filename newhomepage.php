<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Bootstrap Example</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
        </head>

<body style="font-family: Comic Sans MS;">

<!--navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
<div class="container-fluid">
    <a class="navbar-brand" style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold;" href="http://localhost/website/html1/newhomepage.php">Survey UP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto" style="font-family: Comic Sans MS; font-weight: regular;">
        <li class="nav-item active">
            <a class="nav-link" style="color: #1F6376; margin-left: 20px; background-color: white;" href="http://localhost/website/html1/newhomepage.php">Home</a>
        </li>
        <li class="nav-item">
            <a href="http://localhost/website/html1/newlogin.php"><button class="nav-link" style="color: #1F6376; background-color: white; border-color: #1F6376; border-radius: 10px; padding: 5px 12px; margin-left: 20px;" href="#">Log in</button></a>
        </li>
        <li class="nav-item">
            <a href="http://localhost/website/html1/newreg1.php"><button class="nav-link" style="color: #D2DFE0; background-color: #1F6376; border-color: none; border-radius: 10px; padding: 5px 12px; margin-left: 20px;" href="#">Sign up</button></a>
        </li>
    </ul>

    </div>
</div>
</nav>

<div class="container-fluid">
  <div class="row" style="background-color: #DAE6E6;">
    <div class="col">
      <div class="img-fluid img-responsive"><img src="overall.png" style="width: 41vw; height: 64vh; opacity: 90%"></div>
    </div>
    <div class="col text-centre">
      <h1 style="color: #1F6376; Sans MS; font-weight: bold; font-size: 39px; padding-top: 100px;">Stop guessing start knowing</h1>
      <p style="color: #1F6376; Sans MS; font-weight: regular; font-size: 18px; padding-top: 5px;">Create your survey, store your designs for future downloads and find your desired users at one platform</p>
    </div>
  </div>
  <!--<div class="row" style="background-color: #1F6376; width: 1348px; height:70px;">
  </div>-->
  <div class="img-fluid" style="background-color: #1F6376; width: 102vw; height: 10vh; padding-left: 30%; "></div>
  <div class="row text-centre">
    <div class="col-12">
      <h1 style="background-color: white; font-family: Comic Sans MS; font-weight: bold; font-size: 32px; text-align: center; color: #1F6376; padding-top: 100px;"><u style="color: #1F6376; width: 2px;">Why join Survey Up</u></h1>
    </div>
  </div>
</div>

<!--Why Join Survey Up-->
<div class="container">
      <div class="row text-centre" style="padding-top: 5%; margin: 0px 12px 16px;">
        <div class="col-lg-4 col-md-6  col-sm-12">
          <img class="rounded-square" style="margin-left: 110px;" src="HTML/sur3.png" alt="Generic placeholder image" width="115" height="115">
          <h2 style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold; font-size: 24px; margin-left: 120px; padding-top: 20px;">Surveys</h2>
          <p style="text-align: justify; color: #66767E; font-family: Comic Sans MS; font-weight: regular; font-size: 15px; width: 280px; margin-left: 30px;">As a designer you can create surveys and as a interviewee you answer the surveys.</p>
        </div>
        <div class="col-lg-4">
          <img class="rounded-square" style="margin-left: 110px;" src="HTML/user.png" alt="Generic placeholder image" width="115" height="115">
          <h2 style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold; font-size: 24px; margin-left: 80px; padding-top: 20px;">Prefered Users  </h2>
          <p style="text-align: justify; color: #66767E; font-family: Comic Sans MS; font-weight: regular; font-size: 15px; width: 280px; margin-left: 30px;">As a designer get your prefered users or target audience at same platform. No need to find them.</p>

        </div>
        <div class="col-lg-4">
          <img class="rounded-square" style="margin-left: 110px;" src="HTML/reward.png" alt="Generic placeholder image" width="115" height="115">
          <h2 style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold; font-size: 24px; margin-left: 120px; padding-top: 20px;">Rewards</h2>
          <p style="text-align: justify; color: #66767E; font-family: Comic Sans MS; font-weight: regular; font-size: 15px; width: 280px; margin-left: 30px;">As a interviewee you get rewarded for the each survey you answer.</p>
        </div>
      </div>
</div>

    <!--Slider-->

    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 style="color: #1F6376; margin-left: 42.5%; margin-top: 50px; font-weight: bold;">Testimonials</h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0" style="margin-top: 50px;">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class=""></li>
              <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>   
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
              <div class="item carousel-item">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>		
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>								
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>
                </div>
              </div>
              <div class="item carousel-item active">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376" >Pooja Kanojia</h4  >									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>						
                </div>
              </div>
              <div class="item carousel-item">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>	
                  <div class="col-sm-3">
                    <div class="thumb-wrapper">
                      <div class="img-box">
                        <img src="HTML/design.png" class="img-responsive img-fluid" alt="">									
                      </div>
                      <div class="">
                        <h4 style="font-family: Comic Sans MS; font-weight: regular; color: #1F6376">Pooja Kanojia</h4>									
                        <p style="font-family: Comic Sans MS; font-weight: regular; color: #667673" class="item-price">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis</p>
                      </div>						
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Carousel controls -->
            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
              <i class="fa fa-angle-left "></i>
            </a>
            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
          </div>
        </div>
        <h2 style="color: #1F6376; margin-left: 42.5%; margin-top: 50px; font-weight: bold;">How To Use</h2>
      </div>

    <!--End of slder-->

    <div class="container marketing">
      <div class="row text-centre" style="padding-top: 5%; margin: 0px 12px 16px;">
        <div class="col-lg-4">
          <img class="rounded-square" style="margin-left: 120px;" src="HTML/sur3.png" alt="Generic placeholder image" width="115" height="115">
          <h2 style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold; font-size: 24px; margin-left: 90px; padding-top: 20px;">Create surveys</h2>
          <p style="text-align: justify; color: #66767E; font-family: Comic Sans MS; font-weight: regular; font-size: 15px; width: 280px; margin-left: 30px;">Create a survey in minutes using a pre-built survey template.</p>
        </div>
        <div class="col-lg-4">
          <img class="rounded-square" style="margin-left: 110px;" src="HTML/user.png" alt="Generic placeholder image" width="115" height="115">
          <h2 style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold; font-size: 24px; margin-left: 80px; padding-top: 20px;">Prefered Users  </h2>
          <p style="text-align: justify; color: #66767E; font-family: Comic Sans MS; font-weight: regular; font-size: 15px; width: 280px; margin-left: 30px;">Get your prefered users or target audience at same platform. No need to find them.</p>

        </div>
        <div class="col-lg-4">
          <img class="rounded-square" style="margin-left: 110px;" src="HTML/report (1).png" alt="Generic placeholder image" width="115" height="115">
          <h2 style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold; font-size: 24px; margin-left: 120px; padding-top: 20px;">Analyze</h2>
          <p style="text-align: justify; color: #66767E; font-family: Comic Sans MS; font-weight: regular; font-size: 15px; width: 280px; margin-left: 30px;">Get visual analysis of your survey responces in the form of graphs and statistics.</p>
        </div>
      </div>
      </div>

      <!--end 1-->

      <div class="container marketing">
        <div class="row text-centre" style="padding-top: 5%; margin: 0px 12px 16px;">
          <div class="col-lg-4">
            <img class="rounded-square" style="margin-left: 120px;" src="HTML/profile.png" alt="Generic placeholder image" width="115" height="115">
            <h2 style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold; font-size: 24px; margin-left: 120px; padding-top: 20px;">Sign up</h2>
            <p style="text-align: justify; color: #66767E; font-family: Comic Sans MS; font-weight: regular; font-size: 15px; width: 280px; margin-left: 30px;">Survey Up is a free platform. Sign up today.</p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-square" style="margin-left: 110px;" src="HTML/sur2.png" alt="Generic placeholder image" width="115" height="115">
            <h2 style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold; font-size: 24px; margin-left: 80px; padding-top: 20px;">Answer surveys</h2>
            <p style="text-align: justify; color: #66767E; font-family: Comic Sans MS; font-weight: regular; font-size: 15px; width: 280px; margin-left: 30px;">Get unlimited surveys and give quality responces</p>
  
          </div>
          <div class="col-lg-4">
            <img class="rounded-square" style="margin-left: 110px;" src="HTML/reward.png" alt="Generic placeholder image" width="115" height="115">
            <h2 style="color: #1F6376; font-family: Comic Sans MS; font-weight: bold; font-size: 24px; margin-left: 90px; padding-top: 20px;">Get rewarded</h2>
            <p style="text-align: justify; color: #66767E; font-family: Comic Sans MS; font-weight: regular; font-size: 15px; width: 280px; margin-left: 30px;">Get rewarded with gift cards and reward points for each survey you answer.</p>
          </div>
        </div>
        </div>

        <footer class="page-footer font-small cyan darken-3" style="background-color: #1F6376;">

<!-- Footer Elements -->
<div class="container">

  <!-- Grid row-->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12 py-5">
      <div class="mb-5 flex-center">

        <!-- Facebook -->
        <a class="fb-ic">
          <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!-- Twitter -->
        <a class="tw-ic">
          <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!-- Google +-->
        <a class="gplus-ic">
          <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Linkedin -->
        <a class="li-ic">
          <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Instagram-->
        <a class="ins-ic">
          <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
        </a>
        <!--Pinterest-->
        <a class="pin-ic">
          <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
        </a>
      </div>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row-->

</div>
<!-- Footer Elements -->

<!-- Copyright -->
<div style="background-color: #1F6376;" class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

</body>

</html>