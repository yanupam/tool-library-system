<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>TATA Tool Library</title>
  <!-- MDB icon -->
  <link rel="shortcut icon" href="https://www.tatamotors.com/wp-content/themes/tatamotors_2019/images/favicon.ico"
    type="image/x-icon" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
  <!-- Start your project here-->
  <header>
    <style>
      .bg-image {
        width: 100%;
        height: 20vw;
        object-fit: cover;
      }

      /* Carousel styling */
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 100vh;
      }

      .carousel-item:nth-child(1) {
        background-image: url("https://mdbootstrap.com/img/Photos/Others/images/76.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      .carousel-item:nth-child(2) {
        background-image: url("https://cars.tatamotors.com/images/nexon/brochures/img2_1920_1200.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      .carousel-item:nth-child(3) {
        background-image: url("https://images.livemint.com/img/2021/05/18/1600x900/2021-05-18T112956Z_2_LYNXNPEH4H0MH_RTROPTP_3_TATA-MOTORS-INDIA_1621365050216_1621365062828.JPG");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #introCarousel {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" target="_blank" href="index.php">
          <strong>TATA</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#intro">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php" rel="nofollow">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login/SignUp</a>
            </li>
          </ul>

          <ul class="navbar-nav list-inline">
            <!-- Icons -->
            <li class="">
              <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="">
              <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.tata.com" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Carousel wrapper -->
    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
      </ol>

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3">TATA Tools Library</h1>
                <h5 class="mb-4">
                  Best guide for efficient searching for tools
                </h5>
                <a class="btn btn-outline-light btn-lg m-2" href="services.php" role="button" rel="nofollow">Start
                  &nbsp;tour
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.3)">
            <div class="d-flex justify-content-center align-items-center h-100"></div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="mask" style="
                background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                );
              ">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h2>TATA MOTORS</h2>
                <a class="btn btn-outline-light btn-lg m-2" href="https://www.tatamotors.com" target="_blank"
                  role="button">TATA</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- Carousel wrapper -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
              <img src="index_pic1.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Tools Library</strong></h4>
            <p class="text-muted">
              A tool library is an example of a Library of Things. Tool
              libraries allow patrons to check out or borrow tools, equipment
              and "how-to" instructional materials, functioning either as a
              rental shop, with a charge for borrowing the tools, or more
              commonly free of charge as a form of community sharing.
            </p>
            <p><strong>Why do we need tool library?</strong></p>
            <p class="text-muted">
              They are just like libraries in that they lend out resources,
              but instead of checking out books you check out tools. Tool
              libraries are essentially great for people downsizing their
              supply of stuff, learning to live with less, cannot afford tools
              or simply don't want buy and store them.
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>What Are the Different Types of Assembly Tools?</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://images.wisegeek.com/power-drill.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Electric Powered Tools</h5>
                <p class="card-text">
                  Drills, nut drivers and socket wrenches are just a few of the assembly tools used to secure nuts and
                  bolts or drill holes.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://cooks-home-center.com/wp-content/uploads/2018/07/bigstock-209334583-1024x745.jpg"
                  class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Compressed Air Tools</h5>
                <p class="card-text">
                  Air compressor power tools, also called pneumatic tools, are generally faster, lighter and more
                  powerful than traditional power tools
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img
                  src="https://media.istockphoto.com/photos/house-made-up-of-measuring-tapes-and-tools-picture-id949187600?k=6&m=949187600&s=612x612&w=0&h=vx3-9acWThcnJ872xuFP40yjeiJz3Ws_Gb7heRsjO0M="
                  class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Hand Tools</h5>
                <p class="card-text">
                  Categories of hand tools include wrenches, pliers, cutters, files, striking tools, struck or hammered
                  tools, screwdrivers, vises, clamps, and knives.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->

      <!--Section: Content-->
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->


  <div class="text-center py-4 align-items-center">
    <p>Follow TATA on social media</p>
    <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button"
      rel="nofollow" target="_blank">
      <i class="fab fa-youtube"></i>
    </a>
    <a href="https://www.facebook.com/mdbootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
      target="_blank">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
      <i class="fab fa-twitter"></i>
    </a>
    <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow"
      target="_blank">
      <i class="fab fa-github"></i>
    </a>
  </div>

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-dark" href="https://www.tatamotors.com/">tatamotors.com</a>
  </div>
  <!-- Copyright -->
  </footer>
  <!--Footer-->
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>