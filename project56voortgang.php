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
    <link href="/css/voortgang.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <title>Clearskies</title>
    <?php session_start() ?>
  </head>
  <body>
    <div class="wrapper" id="top">
      <div class="headerDiv">
        <div class="headerText">
          <h1>Welkom bij Clearskies! <br /><small>Streeft naar een betere toekomst...</small></h1>
        </div>
      </div>
      <?php $pageName = "Project 5/6"; include_once "inc/navbar.php"?>
      <div class="project56">
          <img src="assets/img/headerproject56V2.jpg" class="headerImageProject img-fluid" alt="HeaderExoskalet">
          <img src="assets/img/hrlogowit.png" alt="hrlogo" class="img-fluid hrlogo d-none d-md-block">
          <h1>Project 5/6: Exoskelet <br /> <small class="d-none d-md-block">Rotterdam University of Applied Sciences</small></h3>
        <div id="gradient"></div>
      </div>
      <div class="container">
        <div class="row">
          <!-- start input -->
<section class="voortgang">
            <div class="col-12 my-4 blokkie">
              <h2>Update: Exoskelet arm</h2>
              <div class="streepje"></div>
              <p>De arm die wij ontvingen van het vorige project vonden wij te groot, zwaar en lomp, de motors die daar opzaten waren erg groot en zwaar. Daarom hebben wij besloten om een andere arm te maken. We hebben op internet gezocht naar Exo Suit armen. We hebben toen een mooie arm gevonden en die nagemaakt. We hebben de arm met een 3D printer gemaakt. Alle onderdelen zijn van PLA gemaakt. We gaan nu werken aan de aansturing. We moeten ook nog bevestigen maken voor de motoren die aan de arm komen.</p>
              <div class="row midden_wrapper">
                <div class="col-6">
                  <div class="row midden_wrapper">
                    <div class="col-2 profielfoto">
                      <img src="assets/img/persons/ruud.jpg" class="img-fluid rounded-circle" alt="ruud">
                    </div>
                    <div class="col-10 midden_content">
                      <h4>Ruud Wander</h4>
                    </div>
                  </div>
                </div>
                <div class="col-6 midden_content">
                  <h5>17-11-2018</h5>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <?php include_once "inc/topbtn.php"?>
    <?php include_once "inc/footer.php"?>
  </body>
</html>
