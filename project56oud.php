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
      <div class="project56oud">
          <img src="assets/img/laurens.jpg" class="headerImageProject img-fluid" alt="HeaderLaurens">
          <img src="assets/img/hrlogoblauw.png" alt="hrlogo" class="img-fluid hrlogo d-none d-md-block">
          <h1>Project 5/6: Klimaatbeheersing <br /> <small class="d-none d-md-block">Rotterdam University of Applied Sciences</small></h3>
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
              <a class="nav-link" href="#pitches">Pitches</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-12 my-2">
            <p>De bestanden die hier zijn te vinden zijn van het oude project 5/6 in samenwerking met Laurens Dijkveld. Ons nieuwe project 5/6 over het exoskelet is <a href="project56.php">hier</a> te vinden.</p>
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
                <tr>
                  <th scope="row">Bestanden van Jelle</th>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row"><a href="assets/doc/Vooronderzoekproject56.pdf" target="_blank">Vooronderzoek Project56</th>
                  <td>.pdf</td>
                  <td>Het onderzoek van Jelle met zijn oplossing voor Laurens Dijkveld</td>
                </tr>
                <tr>
                  <th scope="row">Bestanden van Rick</th>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row"><a href="assets/doc/Vooronderzoek Rick Kloppers (0943631).docx" target="_blank">Vooronderzoek Rick Kloppers</th>
                  <td>.docx</td>
                  <td>Het onderzoek van Rick met zijn oplossing voor Laurens Dijkveld</td>
                </tr>
                <tr>
                  <th scope="row">Bestanden van Ruud</th>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row"><a href="#" target="_blank">...</th>
                  <td>...</td>
                  <td>...</td>
                </tr>
                <tr>
                  <th scope="row">Bestanden van Thomas</i></th>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row"><a href="assets/doc/vooronderzoek-klimaatbeheersing.pdf" target="_blank">Vooronderzoek klimaatbeheersing</th>
                  <td>.pdf</td>
                  <td>Een persoonlijk onderzoek van Thomas met een oplossing voor het door Laurens Dijkveld opgestelde probleem</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12">
            <h2 id="pitches">Pitches</h2>
            <div class="row">
              <div class="col-md-6">
                <h3>Jelle</h3>
                <iframe src="https://www.youtube.com/embed/R6_GKi3ifsg?rel=0" class="youtube" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <h3>Rick</h3>
                <iframe src="https://www.youtube.com/embed/-BDCm2aT3Rk?rel=0" class="youtube" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="col-md-6">
                <h3>Ruud</h3>
                <iframe src="https://www.youtube.com/embed/1Fwfk7tuSSA?rel=0" class="youtube" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <h3>Thomas</h3>
                <iframe src="https://www.youtube.com/embed/HZD719UJEGU?rel=0" class="youtube" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
