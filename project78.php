<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logo.png"/>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/master.css" rel="stylesheet" type="text/css">
    <link href="css/modal.css" rel="stylesheet" type="text/css">
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
      <?php $pageName = "Project 7/8"; include_once "inc/navbar.php"?>
      <div class="project" style="background-color: #94d3c0;">
          <img src="assets/img/headerproject78.jpg" class="headerImageProject img-fluid" alt="HeaderAFD">
          <img src="assets/img/hrlogowit.png" alt="hrlogo" class="img-fluid hrlogo d-none d-md-block">
          <h1 class="d-none d-md-block" style="text-shadow: 4px 3px 0px #7A7A7A;">Project 7/8: Autonomous Following Drone <br /> <small class="d-none d-md-block">Rotterdam University of Applied Sciences</small></h3>
          <h1 class="d-md-none" style="text-shadow: 4px 3px 0px #7A7A7A;">Project 7/8: AFD</h1>
        <div id="gradient"></div>
      </div>
      <nav class="navbar navbar-expand navbar-light bg-light">
        <div id="navbarColor03">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#scrum">Scrum</a>
            </li>
            <li>
              <a class="nav-link" href="#Onderzoeksmethodes">Onderzoeksmethodes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#bestanden">Bestanden</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#media">Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#github">Github</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-12 my-4 mb-5">
            <h2  id="scrum">Scrum:</h2>
            <p>Voor dit project is er gebruik gemaakt van de werkmethode scrum. Het scrumbord wat wij gebruiken staat op trello.
            Alle bestanden met betrekking tot dit bord zijn te vinden op deze website.</p>
            <div class="panel-group">
              <div class="panel panel-default">
                <div style="height: 45px;">
                  <h4 class="sprintButton">
                    <div data-toggle="collapse" href="#sprint1">Sprint 1 <i class="fas fa-angle-down" style="margin: 0 5px;"></i></div>
                  </h4>
                </div>
                <div id="sprint1" class="panel-collapse collapse" style="padding-top: 5px;">
                  <table class="table table-hover panel-body">
                    <thead>
                      <th scope="col">User Story</th>
                      <th scope="col">Status</th>
                    </thead>
                    <tbody>
                      <tr class="tableDone">
                        <td>De drone moet kunnen vliegen</td>
                        <td>Klaar</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="panel-group">
              <div class="panel panel-default">
                <div style="height: 45px;">
                  <h4 class="sprintButton">
                    <div data-toggle="collapse" href="#sprint2">Sprint 2 <i class="fas fa-angle-down" style="margin: 0 5px;"></i></div>
                  </h4>
                </div>
                <div id="sprint2" class="panel-collapse collapse" style="padding-top: 5px;">
                  <table class="table table-hover">
                    <thead>
                      <th scope="col">User Story</th>
                      <th scope="col">Status </th>
                    </thead>
                    <tbody>
                      <tr class="tableDone">
                        <td>Onderzoek doen naar communicatie</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Onderzoek doen naar person tracking</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Onderzoek doen naar sensoren</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Onderzoek doen naar App development</td>
                        <td>Klaar</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="panel-group">
              <div class="panel panel-default">
                <div style="height: 45px;">
                  <h4 class="sprintButton">
                    <div data-toggle="collapse" href="#sprint3">Sprint 3 <i class="fas fa-angle-down" style="margin: 0 5px;"></i></div>
                  </h4>
                </div>
                <div id="sprint3" class="panel-collapse collapse" style="padding-top: 5px;">
                  <table class="table table-hover">
                    <thead>
                      <th scope="col">User Story</th>
                      <th scope="col">Status </th>
                    </thead>
                    <tbody>
                      <tr class="tableDone">
                        <td>Drone onderdelen bestellen m.b.t. autonoom vliegen</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Drone moet kunnen hoveren</td>
                        <td>Klaar</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="panel-group">
              <div class="panel panel-default">
                <div style="height: 45px;">
                  <h4 class="sprintButton">
                    <div data-toggle="collapse" href="#sprint4">Sprint 4 <i class="fas fa-angle-down" style="margin: 0 5px;"></i></div>
                  </h4>
                </div>
                <div id="sprint4" class="panel-collapse collapse" style="padding-top: 5px;">
                  <table class="table table-hover">
                    <thead>
                      <th scope="col">User Story</th>
                      <th scope="col">Status </th>
                    </thead>
                    <tbody>
                      <tr class="tableDone">
                        <td>Experiment Communicatie (Bluetooth Range)</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Sensoren m.b.t. autonoom vliegen bestellen</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Sensoren m.b.t. telemetry communicatie bestellen</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Code schrijven voor GPS Hold</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Sensoren m.b.t. obstakel detectie bestellen</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Sensoren m.b.t. obstakel detectie monteren</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Sensoren m.b.t. obstakel detectie uitlezen</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Enquete doen gebruiksvriendelijkheid App</td>
                        <td>Klaar</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="panel-group">
              <div class="panel panel-default">
                <div style="height: 45px;">
                  <h4 class="sprintButton">
                    <div data-toggle="collapse" href="#sprint5">Sprint 5 <i class="fas fa-angle-down" style="margin: 0 5px;"></i></div>
                  </h4>
                </div>
                <div id="sprint5" class="panel-collapse collapse" style="padding-top: 5px;">
                  <table class="table table-hover">
                    <thead>
                      <th scope="col">User Story</th>
                      <th scope="col">Status </th>
                    </thead>
                    <tbody>
                      <tr class="tableDone">
                        <td>Code schrijven voor GPS Hold (vervolg)</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Sensoren m.b.t. obstakel detectie monteren (vervolg)</td>
                        <td>Klaar</td>
                      </tr>
                      <tr class="tableLate">
                        <td>Drone moet kunnen hoveren op één plek (m.b.v. GPS Hold)</td>
                        <td>Vertraagd</td>
                      </tr>
                      <tr class="tableDone">
                        <td>Drone en Applicatie moeten kunnen communiceren</td>
                        <td>Gepland</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <h4 class="mt-5">Sprint 6</h4>
            <table class="table table-hover">
              <thead>
                <th scope="col">User Story</th>
                <th scope="col">Status </th>
              </thead>
              <tbody>
                <tr class="tableDoing">
                  <td>Drone moet kunnen hoveren op één plek (m.b.v. GPS Hold)</td>
                  <td>In bedrijf</td>
                </tr>
                <tr class="">
                  <td>Drone moet van punt A naar punt B kunnen vliegen (m.b.v. GPS)</td>
                  <td>Gepland</td>
                </tr>
                <tr>
                  <td>App heeft een functie om drone een routen kunnen laten vliegen</td>
                  <td>Gepland</td>
                </tr>
                <tr class="tableDoing">
                  <td>Obstakel detectie wordt geïmplementeerd</td>
                  <td>In Bedrijf</td>
                </tr>
              </tbody>
            </table>
            <div id="currentSprint">
              <div id="currentSprintText">Huidige Sprint</div>
              <h4 class="mt-5">Sprint 7</h4>
              <table class="table table-hover">
                <thead>
                  <th scope="col">User Story</th>
                  <th scope="col">Status </th>
                </thead>
                <tbody>
                  <tr class="tableDoing">
                    <td>Drone moet kunnen hoveren op één plek (m.b.v. GPS Hold)</td>
                    <td>In Bedrijf</td>
                  </tr>
                  <tr>
                    <td>Drone moet van punt A naar punt B kunnen vliegen (m.b.v. GPS)</td>
                    <td>Gepland</td>
                  </tr>
                  <tr>
                    <td>Obstakeldetectie programmeren</td>
                    <td>Gepland</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h4 class="mt-5">Scrum bestanden</h4>
            <table class="table table-hover">
               <thead>
                 <tr>
                   <th scope="col">Beschrijving</th>
                   <th scope="col">Bestand</th>
                   <th scope="col">Type</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>Contacttijden OP3</td>
                   <td><a href="assets/doc/Project78IndelingOP3.pdf" target="_blank">Project78 OP3 Indeling</a></td>
                   <td>PDF</td>
                 </tr>
                 <tr>
                   <td>Contacttijden OP4</td>
                   <td><a href="assets/doc/Project78IndelingOP4.pdf" target="_blank">Project78 OP4 Indeling</a></td>
                   <td>PDF</td>
                 </tr>
                 <tr>
                   <td>Scrumbord</td>
                   <td><a href="https://trello.com/b/RHjxuKDi/drone-team">Trello</a></td>
                   <td>URL</td>
                 </tr>
                 <tr>
                   <td>Product backlog</td>
                   <td><a href="assets/doc/ProductBacklog.pdf" target="_blank">Product Backlog</a></td>
                   <td>PDF</td>
                 </tr>
                 <tr>
                   <td>Sprint 5 Overzicht</td>
                   <td><a href="https://docs.google.com/presentation/d/1IivQUDIn3YujFi9CzJk8u_f_NHZXrm6ZXfUbLr6g4IA/edit?usp=sharing">Google Slides</a></td>
                   <td>URL</td>
                 </tr>
               </tbody>
             </table>
          </div>
          <div class="col-12">
            <h2 id="Onderzoeksmethodes">Onderzoeksmethodes:</h2>
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <p class="panel-title bold">
                    <div class="panelstyling" data-toggle="collapse" href="#problemdefinition"><b>Problem Definition </b><i class="fas fa-sort-down"></i></div>
                  </p>
                </div>
                <div id="problemdefinition" class="panel-collapse collapse">
                  <div class="panel-body panelbstyling">Literature Study</div>
                  <div class="panel-body panelbstyling">Problem Analysis</div>
                  <div class="panel-body panelbstyling">Brainstorm</div>
                </div>
              </div>
            </div>
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <p class="panel-title bold">
                    <div class="panelstyling" data-toggle="collapse" href="#analysis"><b>Analysis </b><i class="fas fa-sort-down"></i></div>
                  </p>
                </div>
                <div id="analysis" class="panel-collapse collapse">
                  <div class="panel-body panelbstyling">SWOT Analysis</div>
                  <div class="panel-body panelbstyling">Requirements Priorization</div>
                  <div class="panel-body panelbstyling">Focus Group</div>
                </div>
              </div>
            </div>
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <p class="panel-title bold">
                    <div class="panelstyling" data-toggle="collapse" href="#design"><b>Design </b><i class="fas fa-sort-down"></i></div>
                  </p>
                </div>
                <div id="design" class="panel-collapse collapse">
                  <div class="panel-body panelbstyling">Community Research</div>
                  <div class="panel-body panelbstyling">Design Pattern</div>
                  <div class="panel-body panelbstyling">Prototyping</div>
                </div>
              </div>
            </div>
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <p class="panel-title bold">
                    <div class="panelstyling" data-toggle="collapse" href="#realisation"><b>Realisation </b><i class="fas fa-sort-down"></i></div>
                  </p>
                </div>
                <div id="realisation" class="panel-collapse collapse">
                  <div class="panel-body panelbstyling">Component Test</div>
                  <div class="panel-body panelbstyling">Hardware Validation</div>
                  <div class="panel-body panelbstyling">System Test</div>
                  <div class="panel-body panelbstyling">Usability Test</div>
                  <div class="panel-body panelbstyling">Code Review</div>
                  <div class="panel-body panelbstyling">Prototyping</div>
                </div>
              </div>
            </div>
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <p class="panel-title bold">
                    <div class="panelstyling" data-toggle="collapse" href="#evaluation"><b>Evaluation </b><i class="fas fa-sort-down"></i></div>
                  </p>
                </div>
                <div id="evaluation" class="panel-collapse collapse">
                  <div class="panel-body panelbstyling">Product Review</div>
                  <div class="panel-body panelbstyling">Pitch</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12" style="margin-top: 50px;">
            <h2  id="bestanden">Bestanden:</h2>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Bestandsnaam</th>
                  <th scope="col">Soort</th>
                  <th scope="col" class="d-none d-md-block" >Beschrijving</th>
                  <th scope="col">Auteur</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><a href="assets/doc/SamenwerkingscontractAFD.pdf" target="_blank">Samenwerkingscontract</a></th>
                  <td>.pdf</td>
                  <td class="d-none d-md-block">Opgestelt in overeenkomst met de leden van Clearskies</td>
                  <td>Jeffrey Brons</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12" style="margin-top: 50px;">
            <h2 id="media">Media:</h2>
              <div class="row">
              <div class="col-md-6">
                <h3>Testvlucht 1</h3>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MrP_dHqrT0E" allowfullscreen></iframe>
                </div>
              </div>
              <div id="video2" class="col-md-6">
                <h3>Testvlucht 2</h3>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uFh92WgTrGw" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12" style="margin-top: 50px;">
            <h2 id="github">Github:</h2>
            <center>
              <a href="https://github.com/JellevanKoppen/Project78" target="_blank">
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
