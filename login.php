<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TATA Tool Library</title>
    <!-- MDB icon -->
    <link
      rel="shortcut icon"
      href="https://www.tatamotors.com/wp-content/themes/tatamotors_2019/images/favicon.ico"
      type="image/x-icon"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
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
      <nav
        class="navbar navbar-expand-lg navbar-dark d-none d-lg-block"
        style="z-index: 2000"
      >
        <div class="container-fluid">
          <!-- Navbar brand -->
          <a class="navbar-brand nav-link" target="_blank" href="index.php">
            <strong>TATA</strong>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" aria-current="page" href="index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="services.php"
                  rel="nofollow"
                  target="_blank"
                  >Services</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank"
                  >Login/SignUp</a
                >
              </li>
            </ul>

            <ul class="navbar-nav list-inline">
              <!-- Icons -->
              <li class="">
                <a
                  class="nav-link"
                  href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-youtube"></i>
                </a>
              </li>
              <li class="">
                <a
                  class="nav-link"
                  href="https://www.facebook.com/mdbootstrap"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="https://twitter.com/MDBootstrap"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="https://www.tata.com"
                  rel="nofollow"
                  target="_blank"
                >
                  <i class="fab fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
      <!-- Background image -->
      <div id="intro" class="bg-image shadow-2-strong">
        <div
          class="mask d-flex align-items-center h-100"
          style="background-color: rgba(0, 0, 0, 0.8)"
        >
          <div class="container">
            <div class="row justify-content-center">
              <form
                class="border shadow p-3 rounded"
                action="loginhelp.php"
                method="post"
                style="width: 450px"
              >
              

                <h1 class="text-center p-3" style="color: white">LOGIN</h1>

                <div class="mb-3">
                  <label for="Email" class="form-label" style="color: white"
                    >Email</label
                  >
                  <input type="text" class="form-control" name="email" />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label" style="color: white"
                    >Password</label
                  >
                  <input type="password" name="password" class="form-control" />
                </div>
                <div class="mb-1">
                  <label class="form-label" style="color: white"
                    >Select User Type:</label
                  >
                </div>
                <select
                  class="form-select mb-3"
                  name="usertype"
                  aria-label="Default select example"
                >
                  <option selected value="user">User</option>
                  <option value="admin">Admin</option>
                </select>

                <button
                  type="submit"
                  name="login"
                  value="login"
                  class="btn btn-primary"
                  style="width: 100%"
                >
                  LOGIN
                </button>
                <div class="hint-text text-center" style="color: white">
                  New User? <a href="signup.php">Signup here</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
      <hr class="m-0" />

      <div class="text-center py-4 align-items-center">
        <p>Follow TATA on social media</p>
        <a
          href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-youtube"></i>
        </a>
        <a
          href="https://www.facebook.com/mdbootstrap"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-facebook-f"></i>
        </a>
        <a
          href="https://twitter.com/MDBootstrap"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-twitter"></i>
        </a>
        <a
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          class="btn btn-primary m-1"
          role="button"
          rel="nofollow"
          target="_blank"
        >
          <i class="fab fa-github"></i>
        </a>
      </div>

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark" href="https://www.tatamotors.com/"
          >tatamotors.com</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
