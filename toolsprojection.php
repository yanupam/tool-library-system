<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
  //  echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}
$databasename='';


//$databasename='line01'; 

//mysqli_select_db($connection, $databasename);

if(isset($_POST['station01'])){
  $tablename=$_POST['station01'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station01";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);

}
elseif(isset($_POST['station02'])){
  $tablename=$_POST['station02'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station02";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);
}
elseif(isset($_POST['station03'])){
  $tablename=$_POST['station03'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station03";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);
}
elseif(isset($_POST['station04'])){
  $tablename=$_POST['station04'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station04";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);
}
elseif(isset($_POST['station05'])){
  $tablename=$_POST['station05'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station05";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);
}
elseif(isset($_POST['station06'])){
  $tablename=$_POST['station06'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station06";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);
}
elseif(isset($_POST['station07'])){
  $tablename=$_POST['station07'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station07";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);
}
elseif(isset($_POST['station08'])){
  $tablename=$_POST['station08'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station08";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);
}
elseif(isset($_POST['station09'])){
  $tablename=$_POST['station09'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station09";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);
}
elseif(isset($_POST['station10'])){
  $tablename=$_POST['station10'];
  $databasename=$_POST['line_select'];
  mysqli_select_db($connection, $databasename);
  $query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id,t_img FROM station10";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);
}


/*
$query_projection=" SELECT t_name,t_desc,t_owner_name,t_brand,t_d_of_manufac,t_id FROM station01";
$data_projection=mysqli_query($connection,$query_projection);
$total=mysqli_num_rows($data_projection);
$result_projections=mysqli_fetch_all($data_projection,MYSQLI_ASSOC);*/

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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!--bootstrap cdn-->
</head>

<body>
  <!--Main Navigation-->
  <header>
    <style>
      .card-img-top {
        max-width: 100%;
        height: 20vw;
        object-fit: cover;
      }


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

    <div class="text-primary text-center" style="margin-top: 60px">
      <h1 class="mb-3">WESTERN COMPLEX-<?php echo strtoupper(htmlspecialchars( $databasename)) ; ?>-<?php echo strtoupper(htmlspecialchars( $tablename)) ; ?></h1>
    </div>
    </div>
    </div>
  </header>

  <main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center text-md-start">
        <h4 class="mb-5"><strong><?php echo strtoupper(htmlspecialchars( $tablename)) ; ?>- Tools </strong></h4>

        <!-- Post -->
        <div class="row">

          <?php  foreach($result_projections as $result_projection): ?>
            
          <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
            <!-- <img src="nutrunner.jpg"class="img-fluid" /> -->
            <img src="data:image/jpg;base64,<?php echo base64_encode($result_projection['t_img']); ?>"class="img-fluid" />
              <!-- <img src="<?php // echo $result_projection['t_img'] ?>" class="img-fluid" /> -->
              <a href="toolsindividual.php?id=<?php  echo $result_projection['t_id'] ?>">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div> 
        

          <div class="col-md-8 mb-4">
            <h5><?php echo htmlspecialchars( $result_projection['t_name']); ?></h5>
            <p>
              <b>Tool Description</b><br/><?php echo htmlspecialchars( $result_projection['t_desc']); ?>
            </p>
            <b><?php echo htmlspecialchars($result_projection['t_owner_name']);  ?></b><br />
            <b><?php echo htmlspecialchars( $result_projection['t_brand'] );?></b><br/>
            <b>ID-<?php echo htmlspecialchars( $result_projection['t_id'] );?></b><br/>
            <b><?php echo htmlspecialchars( $result_projection['t_d_of_manufac']); ?></b><br /><br/>
          </div>
         
          <?php  endforeach;  ?>

        </div>

        <!-- Post -->
    
      </section>
      <!--Section: Content-->

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