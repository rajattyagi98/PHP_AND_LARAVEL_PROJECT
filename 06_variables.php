<!-- We will amend income tax calculation to the previous version-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Income Tax Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body style="background-image: url('second_page_background_image.png'); width: 100%; height: 100vh; background-repeat: no-repeat; background-size: cover;">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid" >
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <a class="navbar-brand" href="#">Calculate Income Tax</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </nav>
    <div class="container el el-align-center fab fa-align-center bg-light">
      <form>
        <div><br></br></div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="income">Income:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="income" name="income" placeholder="Enter your income">
          </div>
        </div>
        <div><br></div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="hra_to_be_deducted">HRA To Be Deducted:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="hra_to_be_deducted" name="hra_to_be_deducted" placeholder="Enter your HRA deducted">
          </div>
        </div>
        <div><br></div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="lta_to_be_deducted">LTA To Be Deducted:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="lta_to_be_deducted" name="lta_to_be_deducted" placeholder="Enter your LTA deducted">
          </div>
        </div>
        <div><br></div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success" name="tax">Calculate Income Tax</button>
          </div>
        </div>
      </form>
    </div>
    <!-- HTML form  -->
    <?php
      if(isset($_GET['tax'])){
        $income = $_GET['income'];
        $hra = $_GET['hra_to_be_deducted'];
        $lta = $_GET['lta_to_be_deducted'];
        $standard_deduction = 50000;
        $income = $income - $standard_deduction - $hra - $lta;
        if($income <= 300000){
          $tax = 0;
          $alert = "alert alert-danger";
          $role = "alert";
          echo "<div class= $alert role= $role> <h1><i> Your calculated INCOME TAX Rs. $tax </i></h1> </div>";
        } else if($income >= 300001 && $income <= 600000){
          $tax = $income * 0.05;  
          $alert = "alert alert-danger";
          $role = "alert";
          echo "<div class= $alert role= $role> <h1><i> Your calculated INCOME TAX Rs. $tax </i></h1> </div>";
        } else if ($income >= 600001 && $income <= 900000){
          $tax = $income * 0.10;
          $alert = "alert alert-danger";
          $role = "alert";
          echo "<div class= $alert role= $role> <h1><i> Your calculated INCOME TAX Rs. $tax </i></h1> </div>";
        } else if ($income >= 900001 && $income <= 1200000){
          $tax = $income * 0.15;
          $alert = "alert alert-danger";
          $role = "alert";
          echo "<div class= $alert role= $role> <h1><i> Your calculated INCOME TAX Rs. $tax </i></h1> </div>";
        } else if ($income >= 1200001 && $income <= 1500000){
          $tax = $income * 0.20;
          $alert = "alert alert-danger";
          $role = "alert";
          echo "<div class= $alert role= $role> <h1><i> Your calculated INCOME TAX Rs. $tax </i></h1> </div>";
        } else{
          $tax = $income * 0.30;
          $alert = "alert alert-danger";
          $role = "alert";
          echo "<div class= $alert role= $role> <h1><i> Your calculated INCOME TAX Rs. $tax </i></h1> </div>";
        }
      }   
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  </body>
</html>