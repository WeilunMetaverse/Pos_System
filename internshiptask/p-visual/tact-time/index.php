<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=11">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tact Time L25</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="library/js/jquery.js"></script>

</head>
<body  style="   

width: 100%;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <!-- <div class="container"> -->
      <a class="navbar-brand" align="left" href="#" style="font-family:arial;color:white;font-weight:bold">Tact Time L25</a>
      <!-- <a class="navbar-brand" >Production V2.0
      </a> -->
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <!-- <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div> -->
    <!-- </div> -->
  </nav>

  <!-- Page Content -->
</br>
  <!-- <div class="container"> -->

  <div class="row justify-content-md-center">

    <!-- Prod Style line data  -->
    <?php include("lineProdStyle.php"); ?>
    <!-- Production1 data  -->
    <?php include("assembly-module.php"); ?>
    
    <div class="col col-lg-4" align="center">
      <header>
        <h2 style="font-family:impact;color:black">Assembly</h2>
      </header>

      <!-- line Production 1 -->
      <div class="row justify-content-md-center" style="padding-right:10px;padding-left:20px">
        <div class="table-responsive">
          <table id="assemblyTable" class="table table-bordered">
          <thead>
              <tr align="center" style="font-size:13px;cursor:pointer">
                <th scope="col">Station</th>
                <th scope="col">Value</th>
              </tr>
            </thead>
            <!-- Data handle by javascript  -->
          </table>
        </div>
      </div>

    </div>


    <!-- Production2 data  -->
    <?php include("inspection-module.php"); ?>
    <div class="col col-lg-4" align="center">
      <h2 style="font-family:impact;color:black">Inspection</h2>


       <!-- line Production 2 -->
       <div class="row justify-content-md-center" style="padding-right:10px;padding-left:10px">
        <div class="table-responsive">
          <table id="inspectionTable" class="table table-bordered">
          <thead>
              <tr align="center" style="font-size:13px;cursor:pointer">
                <th scope="col">Station</th>
                <th scope="col">Value</th>
              </tr>
            </thead>
           <!-- Data handle by javascript  -->
          </table>
        </div>
      </div>

    </div>

 
    
  </div>
 
<!-- </div> -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="library/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
  <script src="library/js/scripts.js"></script>

</body>

</html>
