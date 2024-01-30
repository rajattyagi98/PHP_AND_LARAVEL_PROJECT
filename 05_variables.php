<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo with php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body style="background-image: url('first_page_background_image.png'); width: 100%; height: 100vh; background-repeat: no-repeat; background-size: cover;"> 
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <a class="navbar-brand" href="#">RAJAT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="06_variables.php">Income Tax Calculator</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Purchased items</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Link
              </button>
              <?php 
                echo "   ";
              ?>
            </li>
            
            <li>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertedmodal">
                Home
              </button>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search" data-bs-theme="cyan">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" data-bs-theme="light">
            <button class="btn btn-outline-success" type="submit" data-bs-theme="light">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- Modal -->
    <!-- Background image -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Objective</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <?php
                echo "I am building this website for Webline Infosoft Pvt Ltd.";
              ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="alertedmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Home</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <?php
                echo "Hello Friends!!!!";
              ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container el el-align-center fab fa-align-center bg-light" >
      <form>
        <div><br></br></div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Calculated minimum balance:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="calulatedP" name="calculatedP" placeholder="Enter calculated minimum balance">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="time">Time:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="time" name ="time" placeholder="Enter the time period">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="rate">Rate of Interest:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="rate" name="rate" placeholder="Enter the rate of interest decided">
          </div>
        </div>
        <div><br></br></div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success" name="submit">Calculate Interest</button>
          </div>
        </div>
      </form>
    </div>
    <!-- HTML form  -->
    <?php
      
    // When the submit button is clicked 
    if (isset($_GET['submit'])) { 
      
        // Creating variables and  
        // storing values in it 
        $amount =  $_GET['calculatedP'];
        $rate =  $_GET['rate'];
        $time =  $_GET['time'];
        $months = $time*12;
        $todisplay = ($amount * $rate * $time )/(100 * $months);
        echo "<h1><i>Your calculated amount$todisplay</i></h1>";
    } 
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </body>
</html>