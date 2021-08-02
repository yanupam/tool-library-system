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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!--bootstrap cdn-->
</head>

<body>
    <!--Main Navigation-->
    <header>
        <style>
            .navbar .nav-link {
                color: black !important;
            }
        </style>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_blank" href="index.php">
                    <strong>TATA</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                            <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA"
                                rel="nofollow" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow"
                                target="_blank">
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
        <?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
  //  echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}




if(isset($_POST['line01']))
{
    
  $databasename='line01';
  mysqli_select_db($connection,$databasename);
  ?>
        <div class="text-primary text-center" style="margin-top: 60px">
            <h1 class="mb-3">WESTERN COMPLEX-
                <?php echo strtoupper(htmlspecialchars( $databasename)) ; ?>
            </h1>
        </div>


    </header>

    <form action="toolsprojection.php" method="post">

        <div class="accordion accordion-flush" id="accordionFlushExample">



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                        Station -1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 01</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">

                                        <button class="btn btn-primary" name="station01" value="station01"
                                            role="button">Tools Station 01</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Station -2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 02</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">
                                        <button class="btn btn-primary" name="station02" value="station02"
                                            role="button">Tools Station
                                            02</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Station -3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 03</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">
                                        <button class="btn btn-primary" name="station03" value="station03"
                                            role="button">Tools Station
                                            03</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Station -4
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 04</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">
                                        <button class="btn btn-primary" name="station04" value="station04"
                                            role="button">Tools Station
                                            04</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Station -5
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 05</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">
                                        <button class="btn btn-primary" name="station05" value="station05"
                                            role="button">Tools Station
                                            05</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Station -6
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 06</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">
                                        <button class="btn btn-primary" name="station06" value="station06"
                                            role="button">Tools Station
                                            06</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Station -7
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 07</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">
                                        <button class="btn btn-primary" name="station07" value="station07"
                                            role="button">Tools Station
                                            07</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Station -8
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 08</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">
                                        <button class="btn btn-primary" name="station08" value="station08"
                                            role="button">Tools Station
                                            08</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        Station -9
                    </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 09</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">
                                        <button class="btn btn-primary" name="station09" value="station09"
                                            role="button">Tools Station
                                            09</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                        Station -10
                    </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 10</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line01">
                                        <button class="btn btn-primary" name="station10" value="station10"
                                            role="button">Tools Station
                                            10</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </form>



    <?php



}
elseif(isset($_POST['line02'])){
    $databasename='line02';
    mysqli_select_db($connection,$databasename);

    ?>
    <div class="text-primary text-center" style="margin-top: 60px">
        <h1 class="mb-3">WESTERN COMPLEX-
            <?php echo strtoupper(htmlspecialchars( $databasename)) ; ?>
        </h1>
    </div>


    </header>

    <form action="toolsprojection.php" method="post">

        <div class="accordion accordion-flush" id="accordionFlushExample">



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                        Station -1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 01</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">

                                        <button class="btn btn-primary" name="station01" value="station01"
                                            role="button">Tools Station 01</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Station -2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 02</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">
                                        <button class="btn btn-primary" name="station02" value="station02"
                                            role="button">Tools Station
                                            02</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Station -3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 03</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">
                                        <button class="btn btn-primary" name="station03" value="station03"
                                            role="button">Tools Station
                                            03</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Station -4
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 04</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">
                                        <button class="btn btn-primary" name="station04" value="station04"
                                            role="button">Tools Station
                                            04</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Station -5
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 05</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">
                                        <button class="btn btn-primary" name="station05" value="station05"
                                            role="button">Tools Station
                                            05</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Station -6
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 06</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">
                                        <button class="btn btn-primary" name="station06" value="station06"
                                            role="button">Tools Station
                                            06</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Station -7
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 07</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">
                                        <button class="btn btn-primary" name="station07" value="station07"
                                            role="button">Tools Station
                                            07</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Station -8
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 08</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">
                                        <button class="btn btn-primary" name="station08" value="station08"
                                            role="button">Tools Station
                                            08</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        Station -9
                    </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 09</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">
                                        <button class="btn btn-primary" name="station09" value="station09"
                                            role="button">Tools Station
                                            09</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                        Station -10
                    </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 10</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line02">
                                        <button class="btn btn-primary" name="station10" value="station10"
                                            role="button">Tools Station
                                            10</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </form>



    <?php



}
elseif(isset($_POST['line03'])){
    $databasename='line03';
    mysqli_select_db($connection,$databasename);
    ?>
    <div class="text-primary text-center" style="margin-top: 60px">
        <h1 class="mb-3">WESTERN COMPLEX-
            <?php echo strtoupper(htmlspecialchars( $databasename)) ; ?>
        </h1>
    </div>


    </header>

    <form action="toolsprojection.php" method="post">

        <div class="accordion accordion-flush" id="accordionFlushExample">



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                        Station -1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 01</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">

                                        <button class="btn btn-primary" name="station01" value="station01"
                                            role="button">Tools Station 01</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Station -2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 02</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">
                                        <button class="btn btn-primary" name="station02" value="station02"
                                            role="button">Tools Station
                                            02</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Station -3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 03</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">
                                        <button class="btn btn-primary" name="station03" value="station03"
                                            role="button">Tools Station
                                            03</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Station -4
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 04</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">
                                        <button class="btn btn-primary" name="station04" value="station04"
                                            role="button">Tools Station
                                            04</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Station -5
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 05</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">
                                        <button class="btn btn-primary" name="station05" value="station05"
                                            role="button">Tools Station
                                            05</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Station -6
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 06</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">
                                        <button class="btn btn-primary" name="station06" value="station06"
                                            role="button">Tools Station
                                            06</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Station -7
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 07</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">
                                        <button class="btn btn-primary" name="station07" value="station07"
                                            role="button">Tools Station
                                            07</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Station -8
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 08</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">
                                        <button class="btn btn-primary" name="station08" value="station08"
                                            role="button">Tools Station
                                            08</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        Station -9
                    </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 09</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">
                                        <button class="btn btn-primary" name="station09" value="station09"
                                            role="button">Tools Station
                                            09</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                        Station -10
                    </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 10</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="line03">
                                        <button class="btn btn-primary" name="station10" value="station10"
                                            role="button">Tools Station
                                            10</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </form>



    <?php

}
elseif(isset($_POST['trim01'])){
    $databasename='trim01';
    mysqli_select_db($connection,$databasename);
    ?>
    <div class="text-primary text-center" style="margin-top: 60px">
        <h1 class="mb-3">WESTERN COMPLEX-
            <?php echo strtoupper(htmlspecialchars( $databasename)) ; ?>
        </h1>
    </div>


    </header>

    <form action="toolsprojection.php" method="post">

        <div class="accordion accordion-flush" id="accordionFlushExample">



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                        Station -1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 01</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">

                                        <button class="btn btn-primary" name="station01" value="station01"
                                            role="button">Tools Station 01</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Station -2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 02</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">
                                        <button class="btn btn-primary" name="station02" value="station02"
                                            role="button">Tools Station
                                            02</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Station -3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 03</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">
                                        <button class="btn btn-primary" name="station03" value="station03"
                                            role="button">Tools Station
                                            03</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Station -4
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 04</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">
                                        <button class="btn btn-primary" name="station04" value="station04"
                                            role="button">Tools Station
                                            04</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Station -5
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 05</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">
                                        <button class="btn btn-primary" name="station05" value="station05"
                                            role="button">Tools Station
                                            05</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Station -6
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 06</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">
                                        <button class="btn btn-primary" name="station06" value="station06"
                                            role="button">Tools Station
                                            06</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Station -7
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 07</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">
                                        <button class="btn btn-primary" name="station07" value="station07"
                                            role="button">Tools Station
                                            07</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Station -8
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 08</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">
                                        <button class="btn btn-primary" name="station08" value="station08"
                                            role="button">Tools Station
                                            08</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        Station -9
                    </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 09</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">
                                        <button class="btn btn-primary" name="station09" value="station09"
                                            role="button">Tools Station
                                            09</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                        Station -10
                    </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 10</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim01">
                                        <button class="btn btn-primary" name="station10" value="station10"
                                            role="button">Tools Station
                                            10</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </form>



    <?php

}
elseif(isset($_POST['trim02'])){
    $databasename='trim02';
    mysqli_select_db($connection,$databasename);

    ?>
    <div class="text-primary text-center" style="margin-top: 60px">
        <h1 class="mb-3">WESTERN COMPLEX-
            <?php echo strtoupper(htmlspecialchars( $databasename)) ; ?>
        </h1>
    </div>


    </header>

    <form action="toolsprojection.php" method="post">

        <div class="accordion accordion-flush" id="accordionFlushExample">



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                        Station -1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 01</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">

                                        <button class="btn btn-primary" name="station01" value="station01"
                                            role="button">Tools Station 01</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Station -2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 02</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">
                                        <button class="btn btn-primary" name="station02" value="station02"
                                            role="button">Tools Station
                                            02</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Station -3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 03</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">
                                        <button class="btn btn-primary" name="station03" value="station03"
                                            role="button">Tools Station
                                            03</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Station -4
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 04</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">
                                        <button class="btn btn-primary" name="station04" value="station04"
                                            role="button">Tools Station
                                            04</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Station -5
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 05</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">
                                        <button class="btn btn-primary" name="station05" value="station05"
                                            role="button">Tools Station
                                            05</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Station -6
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 06</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">
                                        <button class="btn btn-primary" name="station06" value="station06"
                                            role="button">Tools Station
                                            06</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Station -7
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 07</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">
                                        <button class="btn btn-primary" name="station07" value="station07"
                                            role="button">Tools Station
                                            07</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Station -8
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 08</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">
                                        <button class="btn btn-primary" name="station08" value="station08"
                                            role="button">Tools Station
                                            08</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        Station -9
                    </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 09</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">
                                        <button class="btn btn-primary" name="station09" value="station09"
                                            role="button">Tools Station
                                            09</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                        Station -10
                    </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 10</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim02">
                                        <button class="btn btn-primary" name="station10" value="station10"
                                            role="button">Tools Station
                                            10</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </form>



    <?php
}
elseif(isset($_POST['trim03'])){
    $databasename='trim03';
    mysqli_select_db($connection,$databasename);


    ?>
    <div class="text-primary text-center" style="margin-top: 60px">
        <h1 class="mb-3">WESTERN COMPLEX-
            <?php echo strtoupper(htmlspecialchars( $databasename)) ; ?>
        </h1>
    </div>


    </header>

    <form action="toolsprojection.php" method="post">

        <div class="accordion accordion-flush" id="accordionFlushExample">



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                        Station -1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 01</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">

                                        <button class="btn btn-primary" name="station01" value="station01"
                                            role="button">Tools Station 01</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Station -2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 02</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">
                                        <button class="btn btn-primary" name="station02" value="station02"
                                            role="button">Tools Station
                                            02</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Station -3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 03</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">
                                        <button class="btn btn-primary" name="station03" value="station03"
                                            role="button">Tools Station
                                            03</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Station -4
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 04</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">
                                        <button class="btn btn-primary" name="station04" value="station04"
                                            role="button">Tools Station
                                            04</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Station -5
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 05</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">
                                        <button class="btn btn-primary" name="station05" value="station05"
                                            role="button">Tools Station
                                            05</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Station -6
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 06</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">
                                        <button class="btn btn-primary" name="station06" value="station06"
                                            role="button">Tools Station
                                            06</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Station -7
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 07</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">
                                        <button class="btn btn-primary" name="station07" value="station07"
                                            role="button">Tools Station
                                            07</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Station -8
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 08</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">
                                        <button class="btn btn-primary" name="station08" value="station08"
                                            role="button">Tools Station
                                            08</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                        Station -9
                    </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 09</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">
                                        <button class="btn btn-primary" name="station09" value="station09"
                                            role="button">Tools Station
                                            09</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                        Station -10
                    </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="card mb-3 ml-10" style="max-width: 1480px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.ytimg.com/vi/Nw90ouStOU0/maxresdefault.jpg"
                                        class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Station 10</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <input type="hidden" id="line_select" name="line_select" value="trim03">
                                        <button class="btn btn-primary" name="station10" value="station10"
                                            role="button">Tools Station
                                            10</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </form>



    <?php
}
?>

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