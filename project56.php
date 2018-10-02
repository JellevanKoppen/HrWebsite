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
      <nav class="navbar navbar-expand navbar-light bg-light">
        <div id="navbarColor03">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#top"> Project 5/6</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bestanden">Bestanden</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallerij">Gallerij</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#github">Github</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-12 my-2">
            <p>Aan het begin van project 5/6 hebben wij aan het project klimaatbeheersing gewerkt voor Laurens Dijkveld. Hiervoor hebben wij ook aparte
            pitches en vooronderzoeken ingeleverd. Wegens bewaarplicht en beoordeling zijn deze bestanden <a href="project56oud.php">hier</a> te vinden.</p>
          </div>
          <div class="col-12 my-4">
            <h2  id="bestanden">Bestanden:</h2>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Bestandsnaam</th>
                  <th scope="col">Soort</th>
                  <th scope="col">Beschrijving</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><a href="assets/doc/samenwerkingscontract.pdf" target="_blank">Samenwerkingscontract</a></th>
                  <td>.pdf</td>
                  <td>Opgestelt in overeenkomst met de leden van Clearskies</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12">
            <h2 id="gallerij">Gallerij:</h2>
            <div class="row margin-row">
              <div class="col-md-3 gallerij">
              </div>
              <div class="col-md-3 offset-md-1 gallerij">
              </div>
              <div class="col-md-3 offset-md-1 gallerij">
              </div>
            </div>
          </div>
          <div class="col-12" style="margin-top: 50px;">
            <h2 id="github">Github:</h2>
            <center>
              <a href="https://github.com/JellevanKoppen/Project56" target="_blank">
                <img src="assets/img/Github.jpg" alt="Github" class="img-fluid">
              </a>
          </center>
          </div>
        </div>
      </div>
    </div>
    <?php include_once "inc/topbtn.php"?>
    <?php include_once "inc/footer.php"?>
  </body>
</html>
