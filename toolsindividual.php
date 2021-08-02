<?php
$connection = mysqli_connect('localhost', 'root','','line01');

if ($connection) {
  //  echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

$row='';
$id='';

if(($_SERVER['REQUEST_METHOD']=='GET'))
{
    if(isset($_GET['t_id'])){
        global $row;
        global $id;
        $id = mysqli_real_escape_string($connection,$_GET['t_id']);
        echo $id;
    
        $sql = "SELECT * FROM station01 WHERE t_id='".$id."' LIMIT 1";
        $result_single = mysqli_query($connection,$sql);
        $row= mysqli_fetch_assoc($result_single);
        $t_name=$row['t_name'];

    }else{
        echo "No records found";
    }  

   
}



?>


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

        <div class="text-primary text-center" style="margin-top: 60px">
            <h1 class="mb-3">TOOLs NAME</h1>
        </div>
        </div>
        </div>
    </header>

    <main>
        <div class="row">
            <div class="col-md-6 px-5">
                <!-- Carousel wrapper -->
                <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <!-- Inner -->
                    <div class="carousel-inner">
                        <!-- Single item -->
                        <div class="carousel-item active">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                                class="d-block w-100 img-fluid" alt="..." />

                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                                class="d-block w-100 img-fluid" alt="..." />

                        </div>

                        <!-- Single item -->
                        <div class="carousel-item">
                            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                                class="d-block w-100 img-fluid" alt="..." />

                        </div>
                    </div>
                    <!-- Inner -->

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                        data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                        data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel wrapper -->

            </div>
            <div class="col-md-6">
                <?php if($row):  ?>
                 <h5><?php echo htmlspecialchars($t_name);?></h5>


                <?php  else: ?>    
                 <h5>Error!!!!</h5>
                <?php  endif;   ?>    
            </div>
        </div>
        <br />
        <br />

        <div class="row px-5">
            <p>
                TOOL-DESCRIPTION
            </p>
            <?php if($row):  ?>
                 <h5><?php echo htmlspecialchars($row['t_desc']);?></h5>


                <?php  else: ?>    
                    <h5>Error!!!!</h5>
                <?php  endif;   ?>    
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
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>