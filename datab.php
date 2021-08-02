<?php
$connection = mysqli_connect('localhost', 'root','');
$xy=false;
if ($connection) {
  //  echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}



if(isset($_POST['submit']))
{
   $database=$_POST['line_select'];
   $tablename=$_POST['station_select'];
   mysqli_select_db($connection, $database);

}
else{
    header("location:admin_page.php");
}


$query_projection="SELECT t_name, t_desc, t_use, t_brand, t_d_of_manufac, t_dimen, t_key_spec, t_owner_dept, t_owner_name, t_cal_freq, t_pre_maint_freq, t_mttf, t_mttr, t_delete_flag, t_id,t_img FROM  $tablename ";
$result_projection=mysqli_query($connection,$query_projection);
 
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
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

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
      <h1 class="mb-3">Administrator Privilages </h1>
    </div>
    </div>
    </div>
  </header>

  <main class="my-5">


    <div class="container">

      <h4 class="mb-5 text-center"><strong>Vehicle Assembly-->
          <?php echo strtoupper(htmlspecialchars( $database)) ; ?>
        </strong></h4>
      <h4 class="mb-5 text-center"><strong>Station-->
          <?php echo strtoupper(htmlspecialchars( $tablename)) ; ?>
        </strong></h4>


      <h1>Insert Tool Records in&nbsp;
        <?php echo strtoupper(htmlspecialchars( $database)) ; ?>--
        <?php echo strtoupper(htmlspecialchars( $tablename)) ; ?>
      </h1>

      <br /><br /><br />

      <form action="insert.php" method="post">
        <div class="mb-3">
          <label for="toolid" class="form-label">Tool ID</label>
          <input type="text" class="form-control" id="toolid" name="toolid">
        </div>
        <div class="mb-3">
          <label for="toolname" class="form-label">Tool Name</label>
          <input type="text" class="form-control" id="toolname" name="toolname">
        </div>
        <div class="mb-3">
          <label for="tooldesc" class="form-label">Tool Description</label>
          <textarea class="form-control" id="tooldesc" name="tooldesc" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <label for="tooluse" class="form-label">Tool Use</label>
          <input type="text" class="form-control" id="tooluse" name="tooluse">
        </div>
        <div class="mb-3">
          <label for="toolbrand" class="form-label">Tool Brand</label>
          <input type="text" class="form-control" id="toolbrand" name="toolbrand">
        </div>
        <div class="mb-3">
          <label for="tooldom" class="form-label">Tool Date of Manufacturing (YYYY-MM-DD)</label>
          <input type="text" class="form-control" id="tooldom" name="tooldom">
        </div>
        <div class="mb-3">
          <label for="tooldimen" class="form-label">Tool Dimensions (111X111)</label>
          <input type="text" class="form-control" id="tooldimen" name="tooldimen">
        </div>
        <div class="mb-3">
          <label for="toolkeyspecs" class="form-label">Tool Key Specifications</label>
          <input type="text" class="form-control" id="toolkeyspecs" name="toolkeyspecs">
        </div>
        <div class="mb-3">
          <label for="toolownerdept" class="form-label">Tool Owner Department</label>
          <input type="text" class="form-control" id="toolownerdept" name="toolownerdept">
        </div>
        <div class="mb-3">
          <label for="toolownername" class="form-label">Tool Owner Name</label>
          <input type="text" class="form-control" id="toolownername" name="toolownername">
        </div>
        <div class="mb-3">
          <label for="toolcalfreq" class="form-label">Tool Calibration Frequency</label>
          <input type="text" class="form-control" id="toolcalfreq" name="toolcalfreq">
        </div>
        <div class="mb-3">
          <label for="toolpremainfreq" class="form-label">Tool Preventive Maintainance Frequency</label>
          <input type="text" class="form-control" id="toolpremainfreq" name="toolpremainfreq">
        </div>
        <div class="mb-3">
          <label for="toolmttf" class="form-label">Tool Mean Time to Failure</label>
          <input type="text" class="form-control" id="toolmttf" name="toolmttf">
        </div>
        <div class="mb-3">
          <label for="toolmttr" class="form-label">Tool Mean Time to Repair</label>
          <input type="text" class="form-control" id="toolmttr" name="toolmttr">
        </div>
        <div class="mb-3">
          <label for="tooldelflag" class="form-label">Tool Delete Flag</label>
          <input type="text" class="form-control" id="tooldelflag" name="tooldelflag">
        </div>
        <div class="mb-3">
          <label for="toolimg" class="form-label">Tool Image</label>
          <input type="file" class="form-control" id="toolimg" name="toolimg">
        </div>
        <div class="mb-3">
          <label for="tooldelflag" class="form-label">Vehicle Assembly</label>
          <select class="form-select" id="lineselect" name="lineselect">
            <option selected>Select The Vehicle Assembly</option>
            <option value="line01">Line-One</option>
            <option value="line02">line-Two</option>
            <option value="line03">Line-Three</option>
            <option value="trim01">Trim-One</option>
            <option value="trim02">Trim-Two</option>
            <option value="trim03">Trim-Three</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="tooldelflag" class="form-label">Vehicle Assembly Station</label>
          <select class="form-select" id="stationselect" name="stationselect">
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



        <input type="submit" name="insert" class="btn btn-primary btn-lg">

      </form>




      <br /><br />
      <br />

      <h1>Displaying Tool Records of&nbsp;
        <?php echo strtoupper(htmlspecialchars( $database)) ; ?>--
        <?php echo strtoupper(htmlspecialchars( $tablename)) ; ?>
      </h1><br /><br />

      <?php 
      
 
      $rows=mysqli_fetch_all($result_projection,MYSQLI_ASSOC); ?>
      <?php foreach($rows as $row): ?>
      <div class="col-md-4 mb-4">
        <div class="bg-image hover-overlay shadow-1-strong rounded ripple" data-mdb-ripple-color="light">
          <!-- <img src="<?php// echo htmlspecialchars( $row['t_img']); ?>" class="img-fluid" /> -->
          <img src="data:image/jpg;base64,<?php echo base64_encode($row['t_img']); ?>"class="img-fluid" />

          <a>
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
      </div>

      <div class="col-md-8 mb-4">
        <h5>
          <?php echo htmlspecialchars( $row['t_name']); ?>
        </h5>
        <p>
          <b>Tool Description</b><br />
          <?php echo htmlspecialchars( $row['t_desc']); ?>
        </p>
        <b>Tool Owner -
          <?php echo htmlspecialchars($row['t_owner_name']);  ?>
        </b><br />
        <b>Tool Brand -
          <?php echo htmlspecialchars( $row['t_brand'] );?>
        </b><br />
        <b>ID-
          <?php echo htmlspecialchars( $row['t_id'] );?>
        </b><br />
        <b>Date of manufacturing -
          <?php echo htmlspecialchars( $row['t_d_of_manufac']); ?>
        </b>

        <div class="row align-items-start">

          <div class="col m-2">
            <form action="datab.php" method="post">
              <button type="button" style="width: 200px;" name="update" 
                class="btn btn-primary btn-lg">Update
                Record</button>
            </form>
          </div>
        </div>


        <div class="row align-items-start">

          <div class="col m-2">
            <form action="datab.php" method="post">
              <button type="button" style="width: 200px;" name="delete"  
                class="btn btn-primary btn-lg">Delete
                Record</button>
            </form>
          </div>


        </div>


        <br /><br /><br /><br />
      </div>
      <?php  endforeach;  ?>

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