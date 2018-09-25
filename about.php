<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/master.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="./js/scroll.js"></script>
    <title>Clearskies</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="headerDiv">
        <div class="headerText">
          <h1>Welkom bij Clearskies! <br /><small>Streeft naar een betere toekomst...</small></h1>
        </div>
      </div>
      <?php $pageName = "Home"; include_once "inc/navbar.php"?>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-5">
                <img src="assets/img/persons/jelle.jpg" class="rounded-circle img-fluid" alt="Jelle">
              </div>
              <div class="col-7 m-t-2">
                <h3>Jelle van Koppen</h3>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-5">
                <img src="assets/img/persons/jelle.jpg" class="rounded-circle img-fluid" alt="Jelle">
              </div>
            </div>
          </div>
          <div class="lijn d-none d-md-block"></div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-5">
                <img src="assets/img/persons/jelle.jpg" class="rounded-circle img-fluid" alt="Jelle">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-5">
                <img src="assets/img/persons/jelle.jpg" class="rounded-circle img-fluid" alt="Jelle">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include_once "inc/footer.php"?>
  </body>
</html>
