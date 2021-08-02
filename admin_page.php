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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url("https://mdbootstrap.com/img/new/fluid/city/018.jpg");
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
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
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.8)">
        <div class="
              container
              d-flex
              align-items-center
              justify-content-center
              text-center
              h-100
            ">
          <div class="text-white">
            <h1 class="mb-3">Tools Library System Administrator</h1>
            <!-- <h5 class="mb-4">Create , Read , Update , Delete</h5> -->
            <a class="btn btn-outline-light btn-lg m-2 disabled" href="#" role="button" rel="nofollow">Create</a>
            <a class="btn btn-outline-light btn-lg m-2 disabled" href="#" role="button" rel="nofollow">Read</a>
            <a class="btn btn-outline-light btn-lg m-2 disabled" href="#" role="button" rel="nofollow">Update</a>
            <a class="btn btn-outline-light btn-lg m-2 disabled" href="#" role="button" rel="nofollow">Delete</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container my-4">
    <h1>Select the Database you want to change</h1>
    <form action="datab.php" method="post">
      <div class="row">
        <div class="col-md">
          <div class="form">
            <label>Vehicle Assembly</label>
            <select class="form-select" id="line_select" name="line_select">
              <option selected>Select The Vehicle Assembly</option>
              <option value="line01">Line-One</option>
              <option value="line02">line-Two</option>
              <option value="line03">Line-Three</option>
              <option value="trim01">Trim-One</option>
              <option value="trim02">Trim-Two</option>
              <option value="trim03">Trim-Three</option>
            </select>

          </div>
        </div>
        <div class="col-md">
          <div class="form">
            <label>Station</label>
            <select class="form-select" id="station_select" name="station_select">
              <option selected>Select Station</option>
              <option value="station01">One</option>
              <option value="station02">Two</option>
              <option value="station03">Three</option>
              <option value="station04">Four</option>
              <option value="station05">Five</option>
              <option value="station06">Six</option>
              <option value="station07">Seven</option>
              <option value="station08">Eight</option>
              <option value="station09">Nine</option>
              <option value="station10">Ten</option>
            </select>

          </div>
        </div>
        <button class="btn btn-primary m-4" name="submit" style="width: 100px;">submit</button>



      </div>
    </form>

  </div>
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
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>