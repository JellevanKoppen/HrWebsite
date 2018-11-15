<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logo.png"/>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/master.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <title>Clear Skies</title>
    <?php session_start() ?>
  </head>
  <body>
    <div class="wrapper">
      <div class="headerDiv">
        <div class="headerText">
          <h1>Welkom bij Clear Skies! <br /><small>Streeft naar een betere toekomst...</small></h1>
        </div>
      </div>
      <?php $pageName = "Home"; include_once "inc/navbar.php"?>
      <div class="container">
        <div class="row">
          <div id="carouselIndex" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselIndex" data-slide-to="0" class="active"></li>
              <li data-target="#carouselIndex" data-slide-to="1"></li>
              <li data-target="#carouselIndex" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <a href="project56.php"><img class="d-block w-100 img-fluid" src="assets/img/exoskeleton.png" alt="First slide"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Exoskelet</h5>
                  <p>Ons huidige project</p>
                </div>
            </div>
              <div class="carousel-item">
                <a href="about.php"><img class="d-block w-100 img-fluid" src="assets/img/hrlogo.jpg" alt="Second slide"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Meet the Team</h5>
                  <p>Klik op de afbeelding!</p>
                </div>
              </div>
              <div class="carousel-item">
                <a href="login.php"><img class="d-block w-100 img-fluid" src="assets/img/hrlogo.jpg" alt="Third slide"></a>
                <div class="carousel-caption d-none d-md-block">
                  <h5>Inloggen</h5>
                  <p>Klik op de afbeelding!</p>
                </div>
              </div>
          </div>
            <a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselIndex" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php include_once "inc/topbtn.php"?>
    <?php include_once "inc/footer.php"?>
  </body>
</html>
