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
      .custom-select {
        position: relative;
        font-family: Arial;
      }

      .select-items div:hover,
      .same-as-selected {
        background-color: rgba(0, 0, 0, 0.1);
      }

      .select-items {
        position: absolute;
        background-color: DodgerBlue;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
      }

      .select-selected {
        background-color: DodgerBlue;
      }

      /* Style the arrow inside the select element: */
      .select-selected:after {
        position: absolute;
        content: "";
        top: 14px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #fff transparent transparent transparent;
      }

      /* Point the arrow upwards when the select box is open (active): */
      .select-selected.select-arrow-active:after {
        border-color: transparent transparent #fff transparent;
        top: 7px;
      }

      /* style the items (options), including the selected item: */
      .select-items div,
      .select-selected {
        color: #ffffff;
        padding: 8px 16px;
        border: 1px solid transparent;
        border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
        cursor: pointer;
      }

      .form-control {
        height: 41px;
        background: #f2f2f2;
        box-shadow: none !important;
        border: none;
      }

      .form-control:focus {
        background: #e2e2e2;
      }

      .form-control,
      .btn {
        border-radius: 3px;
      }

      .signup-form {
        margin-top: 10vh;
        width: 590px;
        margin-left: 450px;

        box-sizing: border-box;
        padding: 70px 30px;
      }

      .signup-form form {
        color: #999;
        border-radius: 3px;
        margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
      }

      .signup-form h2 {
        color: #333;
        font-weight: bold;
        margin-top: 0;
      }

      .signup-form hr {
        margin: 0 -30px 20px;
      }

      .signup-form .form-group {
        margin-bottom: 20px;
      }

      .signup-form input[type="checkbox"] {
        margin-top: 3px;
      }

      .signup-form .row div:first-child {
        padding-right: 10px;
      }

      .signup-form .row div:last-child {
        padding-left: 10px;
      }

      .signup-form .btn {
        font-size: 16px;
        font-weight: bold;
        background: #c37328e8;
        border: none;
        min-width: 140px;
      }

      .signup-form .btn:hover,
      .signup-form .btn:focus {
        background: #ffb048 !important;
        outline: none;
      }

      .signup-form a {
        color: #fff;
        text-decoration: underline;
      }

      .signup-form a:hover {
        text-decoration: none;
      }

      .signup-form form a {
        color: #3598dc;
        text-decoration: none;
      }

      .signup-form form a:hover {
        text-decoration: underline;
      }

      .signup-form .hint-text {
        color: rgb(255, 255, 255);
        padding-bottom: 15px;
        text-align: center;
      }

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
              <a class="nav-link" href="services.php" rel="nofollow" target="_blank">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login/SignUp</a>
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
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8)">
        <div class="signup-form">
          <form action="signuphelp.php" method="POST">
            <h2>Sign Up</h2>
            <p>Please fill in this form to create an account!</p>
            <hr />

            <div class="form-group">
              <div class="row">
                <div class="col-xs-6">
                  <input type="text" class="form-control" name="first_name" placeholder="First Name"
                    required="required" />
                </div>
                <div class="col-xs-6">
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                    required="required" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" required="required" />
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password" required="required" />
            </div>
            <div class="form-group">
              <div class="custom-select" style="width: 200px">
                <select name="usertype">
                  <option>USERTYPE:</option>
                  <option value="admin">Administrator</option>
                  <option value="user">USER</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="ticket" placeholder="Ticket No" required="required" />
            </div>

            <div class="form-group">
              <label class="checkbox-inline"><input type="checkbox" required="required" /> I accept the
                <a href="#">Terms of Use</a> &amp;
                <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg">
                Sign Up
              </button>
            </div>
          </form>
          <div class="hint-text">
            Already have an account? <a href="login.php">Login here</a>
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
  <!--Footer-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>