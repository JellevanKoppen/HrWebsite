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
    <title>Clearskies</title>
    <?php session_start() ?>
  </head>
  <body>
    <div class="wrapper">
      <div class="headerDiv">
        <div class="headerText">
          <h1>Clearskies<br /><small>Meet the Team!</small></h1>
        </div>
      </div>
      <?php $pageName = "The Team"; include_once "inc/navbar.php"?>
      <div class="container">
          <div class="col-sm-12">
            <div class="col-sm-6">
              <div id="afdbutton" onclick="toggleTeam()" class="teamButton teamButtonActive mr-2">
                <h3>Team AFD</h3>
              </div>
            </div>
            <div class="col-sm-6">
              <div id="exobutton" onclick="toggleTeam()" class="teamButton">
                <h3>Team Exoskelet</h3>
              </div>
            </div>
          </div>
          <div id="teamAfd" class="row custom-container">
          <div class="col-md-6">
            <div class="row">
              <div class="col-4">
                <img src="assets/img/persons/jelle.jpg" class="rounded-circle img-fluid" alt="Jelle">
              </div>
              <div class="col-8 headerName">
                <h3>Jelle van Koppen <br /><small>Website Beheerder, Software Expert</small></h3>
                <div class="personalSocials">
                  <a class="fb-ic" href="https://www.facebook.com/jelle.koppen">
                    <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <!-- Google-->
                  <a class="gplus-ic" href="assets\doc\CV_Jelle_van_Koppen_0944862.pdf">
                    <i class="fas fa-file fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <!--Linkedin -->
                  <a class="li-ic" href="https://www.linkedin.com/in/jelle-van-koppen-390148151/">
                    <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <!--Website-->
                  <a  href="0944862/index.html">
                    <i class="fas fa-globe-americas fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                </div>
              </div>
              <div class="col-12">
                <br />
                <p>Ik ben een enthousiasteling als het aankomt op techniek. Het liefst wil ik hier zoveel mogelijk over leren
en weten. Programmeren is dan ook een hobby van mij. Ik zit op dit moment in het tweede jaar van
Technische Informatica op de Hogeschool Rotterdam. Ik heb mijn propedeuse weten te behalen en
heb nog steeds veel plezier in het volgen van de opleiding.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-4">
                <img src="assets/img/persons/rick.jpg" class="rounded-circle img-fluid" alt="Rick">
              </div>
              <div class="col-8 headerName">
                <h3>Rick Kloppers <br /><small>Contactpersoon</small></h3>
                <div class="personalSocials">
                  <a class="fb-ic" href="https://www.facebook.com/rick.kloppers">
                    <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <!-- Instagram-->
                  <a class="gplus-ic" href="https://www.instagram.com/rickkie941/">
                    <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <!--Linkedin -->
                  <a class="li-ic">
                    <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                  <!--Instagram-->
                  <a href="0943631/index.html">
                    <i class="fas fa-globe-americas fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                  </a>
                </div>
              </div>
              <div class="col-12">
                <br />
                <p>"Hoi, Ik ben Rick Kloppers!"</div>
              </div>
            </div>
            <div class="lijn d-none d-md-block"></div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-4">
                  <img src="assets/img/persons/ruud.jpg" class="rounded-circle img-fluid" alt="Ruud">
                </div>
                <div class="col-8 headerName">
                  <h3>Ruud Wander <br /><small>Creatief Brein, Hardware Expert</small></h3>
                  <div class="personalSocials">
                    <a class="fb-ic" href="https://www.instagram.com/jdm_ruudtje/" target="_blank">
                      <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google-->
                    <a class="gplus-ic">
                      <i class="fab fa-google fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                      <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a  href="0943741/index.html">
                      <i class="fas fa-globe-americas fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <br />
                  <p></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-4">
                  <img src="assets/img/persons/jeffrey.jpg" class="rounded-circle img-fluid" alt="Jeffrey">
                </div>
                <div class="col-8 headerName">
                  <h3>Jeffrey Brons <br /><small>Designer</small></h3>
                  <div class="personalSocials">
                    <a class="fb-ic" href="https://www.facebook.com/jeffrey.brons.5">
                      <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google-->
                    <a class="gplus-ic">
                      <i class="fab fa-google fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                      <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a href="https://stud.hr.nl/0950733">
                      <i class="fas fa-globe-americas fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <br />
                  <p></p>
                </div>
              </div>
            </div>
          </div>
          <div id="teamExo" style="display:none;" class="row custom-container">
            <div class="col-md-6">
              <div class="row">
                <div class="col-4">
                  <img src="assets/img/persons/jelle.jpg" class="rounded-circle img-fluid" alt="Jelle">
                </div>
                <div class="col-8 headerName">
                  <h3>Jelle van Koppen <br /><small>Website Beheerder</small></h3>
                  <div class="personalSocials">
                    <a class="fb-ic" href="https://www.facebook.com/jelle.koppen">
                      <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google-->
                    <a class="gplus-ic" href="assets/doc/CV_Jelle_van_Koppen_0944862.pdf">
                      <i class="fas fa-file fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic" href="https://www.linkedin.com/in/jelle-van-koppen-390148151/">
                      <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Website-->
                    <a  href="0944862/index.html">
                      <i class="fas fa-globe-americas fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <br />
                  <p>Ik ben een enthousiasteling als het aankomt op techniek. Het liefst wil ik hier zoveel mogelijk over leren
en weten. Programmeren is dan ook een hobby van mij. Ik zit op dit moment in het tweede jaar van
Technische Informatica op de Hogeschool Rotterdam. Ik heb mijn propedeuse weten te behalen en
heb nog steeds veel plezier in het volgen van de opleiding.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-4">
                  <img src="assets/img/persons/rick.jpg" class="rounded-circle img-fluid" alt="Rick">
                </div>
                <div class="col-8 headerName">
                  <h3>Rick Kloppers <br /><small>Contactpersoon</small></h3>
                  <div class="personalSocials">
                    <a class="fb-ic" href="https://www.facebook.com/rick.kloppers">
                      <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Instagram -->
                    <a class="gplus-ic" href="https://www.instagram.com/rickkie941/">
                      <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                      <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a href="0943631/index.html">
                      <i class="fas fa-globe-americas fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                  </div>
                </div>
                <div class="col-12">
                  <br />
                  <p>"Hoi, Ik ben Rick Kloppers!"</div>
                </div>
              </div>
              <div class="lijn d-none d-md-block"></div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-4">
                    <img src="assets/img/persons/ruud.jpg" class="rounded-circle img-fluid" alt="Ruud">
                  </div>
                  <div class="col-8 headerName">
                    <h3>Ruud Wander <br /><small>Creatief Brein</small></h3>
                    <div class="personalSocials">
                      <a class="fb-ic" href="https://www.instagram.com/jdm_ruudtje/" target="_blank">
                        <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                      </a>
                      <!-- Google-->
                      <a class="gplus-ic">
                        <i class="fab fa-google fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                      </a>
                      <!--Linkedin -->
                      <a class="li-ic">
                        <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                      </a>
                      <!--Instagram-->
                      <a  href="0943741/index.html">
                        <i class="fas fa-globe-americas fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                      </a>
                    </div>
                  </div>
                  <div class="col-12">
                    <br />
                    <p></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-4">
                    <img src="assets/img/persons/thomas.jpg" class="rounded-circle img-fluid" alt="Thomas">
                  </div>
                  <div class="col-8 headerName">
                    <h3>Thomas Martens <br /><small>...</small></h3>
                    <div class="personalSocials">
                      <a class="fb-ic">
                        <i class="fab fa-facebook fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                      </a>
                      <!-- Google-->
                      <a class="gplus-ic">
                        <i class="fab fa-google fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                      </a>
                      <!--Linkedin -->
                      <a class="li-ic">
                        <i class="fab fa-linkedin fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                      </a>
                      <!--Instagram-->
                      <a>
                        <i class="fas fa-globe-americas fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                      </a>
                    </div>
                  </div>
                  <div class="col-12">
                    <br />
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    <?php include_once "inc/topbtn.php"?>
    <?php include_once "inc/footer.php"?>
  </body>
</html>
