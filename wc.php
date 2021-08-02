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
  <!--Main Navigation-->
  <header>
    <style>
      .card-img-top {
    width: 100%;
    height: 20vw;
    object-fit: cover;
}
      .navbar .nav-link {
        color: black !important;
      }
      .card{
        height:60vh;
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
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_page.php" rel="nofollow">Administrator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin_tml.php" rel="nofollow">Factory</a>
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

    <div class="text-dark text-center" style="margin-top: 60px">
      <h1 class="mb-3">WESTERN COMPLEX</h1>
    </div>
    </div>
    </div>
  </header>

  <main class="my-5">
    <div class="container">
      <form action="assembly_projection.php" method="post">
      <!--Section: Content-->
      <section class="text-center">


        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple card-img-top" data-mdb-ripple-color="light">
                <img src="https://images.livemint.com/rf/Image-621x414/LiveMint/Period1/2014/12/02/Photos/Tata%20trucks1--621x414.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Line-1</h5>
                <p class="card-text">
                  Chasis Assembly (Mostly Bus Chasis)
                </p>
                <button class="btn btn-primary" name="line01" value="line01"  role="button">Line-01</button>
                                       
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple card-img-top" data-mdb-ripple-color="light">
                <img src="https://www.eichertrucksandbuses.com/images/plant2.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Trim-1</h5>
                <p class="card-text">
                 Cab & Cowl trimming for assembly line 01.
                </p>
                <button class="btn btn-primary" name="trim01" value="trim01"  role="button">Trim-01</button>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple card-img-top" data-mdb-ripple-color="light">
                <img src="https://previews.123rf.com/images/davidoff205020/davidoff2050202003/davidoff205020200300756/143817093-russia-moscow-5-march-2020-automobile-assembly-line-production-at-the-kamaz-truck-factory-scene-time.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Frame</h5>
                <p class="card-text">
                A vehicle frame, also historically known as its chassis, is the main supporting structure of a motor vehicle to which all other components are attached
                </p>
                <button class="btn btn-primary disabled" name="frame" value="frame"  role="button">Frame</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple card-img-top" data-mdb-ripple-color="light">
                <img src="https://images.hindustantimes.com/auto/img/2019/12/17/600x338/2019-10-25T115323Z_2_LYNXMPEF9O0UP_RTROPTP_3_TATA-MOTORS-INDIA_1574915827726_1576555169606.JPG" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Prolife</h5>
                <p class="card-text">
                  Re-Conditioning of engines.
                </p>
                <button class="btn btn-primary disabled" name="prolife" value="prolife"  role="button">Prolife</button>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple card-img-top" data-mdb-ripple-color="light">
                <img src="https://media.zigcdn.com/media/content/2014/Nov/tata-motors-jamshedpur-truck-plant-60years-zigwheels-pic-image-photo-2112014-m2_560x420.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Integral Bus Factory</h5>
                <p class="card-text">
                - Assembly plant for module buses like DTC Buses catering to the needs of Tata Marcopolo Motors Ltd. and FBV operations
                </p>
                <button class="btn btn-primary disabled" name="ibf" value="ibf"  role="button">Integral Bus Factory</button>
             
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple card-img-top" data-mdb-ripple-color="light">
                <img src="https://www.motorindiaonline.in/wp-content/uploads/2015/04/Tata-Marcopolo-pic-8.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">TMML</h5>
                <p class="card-text">
                  Complete Bus and Coach Like DTC,Star Bus ,Ultra Bus.
                  
                </p>
                <button class="btn btn-primary disabled" name="tmml" value="tmml"  role="button">TMML</button>

              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
    </div>
  </main>
  <footer class="bg-light text-lg-start">
    <hr class="m-0" />

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
      <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
        target="_blank">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>