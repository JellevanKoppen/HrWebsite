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
      <?php $pageName = "Project 5/6"; include_once "inc/navbar.php"?>
      <div class="project" style="background-color: black;">
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
              <a class="nav-link" href="#voortgang">Voortgang</a>
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
            <h2  id="voortgang">Voortgang:</h2>
            <p>Klik <a href="project56voortgang.php">hier </a>om een duidelijk voortgangsoverzicht te krijgen van project56.</p>
          </div>
          <div class="col-12">
            <h2  id="voortgang">Taakverdeling:</h2>
            <p>Voor dit project waren er een groot aantal taken om te vedelen. Zo moest er niet alleen een arm worden ontworpen en uitgeprint, maar er moet
             ook een gebruikersvriendelijke omgeving worden opgezet voor de EEG Headset. De taakverdeling die we hebben aangehouden is als volgt:</p>
             <table class="table table-hover">
               <h4>Nog te doen</h4>
               <thead>
                 <tr>
                   <th scope="col">Taak</th>
                   <th scope="col">Groepsleden</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>Definitieve Python code creeëren</td>
                   <td>Thomas, Jelle</td>
                 </tr>
                 <tr>
                   <td>Onderzoek Batterijen</td>
                   <td>Thomas, Jelle</td>
                 </tr>
                 <tr>
                   <td>Exoskelet arm modificatie</td>
                   <td>Ruud, Rick</td>
                 </tr>
                 <tr>
                   <td>Communucatie Raspberry Pi, EEG headset</td>
                   <td>Thomas, Jelle</td>
                 </tr>
                 <tr>
                   <td>Onderzoek feedback motoren</td>
                   <td>Ruud, Rick</td>
                 </tr>
                 <tr>
                   <td>Onderzoek filteren hersengolven</td>
                   <td>Thomas, Jelle</td>
                 </tr>
               </tbody>
             </table>
             <table class="table table-hover">
               <h4>Klaar</h4>
               <thead>
                 <tr>
                   <th scope="col">Taak</th>
                   <th scope="col">Groepsleden</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>3D Print Ontwerp V1</td>
                   <td>Ruud, Rick</td>
                 </tr>
                 <tr>
                   <td>Onderzoek Motoren</td>
                   <td>Ruud, Rick</td>
                 </tr>
                 <tr>
                   <td>Onderzoek Raspberry Pi</td>
                   <td>Jelle, Thomas</td>
                 </tr>
                 <tr>
                   <td>Onderzoek Arduino</td>
                   <td>Jelle, Thomas</td>
                 </tr>
                 <tr>
                   <td>Onderzoek 3D materialen</td>
                   <td>Ruud, Rick</td>
                 </tr>
                 <tr>
                   <td>Onderzoek dataoverdracht</td>
                   <td>Jelle, Thomas</td>
                 </tr>
                 <tr>
                   <td>Onderzoek Python vs C++</td>
                   <td>Jelle, Thomas</td>
                 </tr>
                 <tr>
                   <td>Website development</td>
                   <td>Jelle</td>
                 </tr>
               </tbody>
             </table>
          </div>
          <div class="col-12">
            <h2  id="bestanden">Bestanden:</h2>
            <h3>Onderzoek Clearskies</h3>
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
                  <th scope="row"><a href="assets/doc/samenwerkingscontract.pdf" target="_blank">Samenwerkingscontract</a></th>
                  <td>.pdf</td>
                  <td class="d-none d-md-block">Opgestelt in overeenkomst met de leden van Clearskies</td>
                  <td>Thomas Martens</td>
                </tr>
                <tr>
                  <th scope="row"><a href="assets/doc/Vooronderzoekproject56Exoskelet.pdf" target="_blank">Vooronderzoek</a></th>
                  <td>.pdf</td>
                  <td class="d-none d-md-block">Een onderzoek over het exoskelet</td>
                  <td>Jelle van Koppen</td>
                </tr>
                <tr>
                  <th scope="row"><a href="assets/doc/Vooronderzoek Rick Kloppers (0943631)EXO.docx" target="_blank">Vooronderzoek</a></th>
                  <td>.docx</td>
                  <td class="d-none d-md-block">Een onderzoek over het exoskelet</td>
                  <td>Rick Kloppers</td>
                </tr>
                <tr>
                  <th scope="row"><a href="assets/doc/Vooronderzoek_Ruud_Wander_0943741.docx" target="_blank">Vooronderzoek</a></th>
                  <td>.docx</td>
                  <td class="d-none d-md-block">Een onderzoek over het exoskelet</td>
                  <td>Ruud Wander</td>
                </tr>
                <tr>
                  <th scope="row"><a href="assets/doc/Vooronderzoek EEG Hogeschool Rotterdam.pdf" target="_blank">Vooronderzoek</a></th>
                  <td>.pdf</td>
                  <td class="d-none d-md-block">Een onderzoek over het exoskelet</td>
                  <td>Thomas Martens</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-12">
            <h2 id="gallerij">Gallerij:</h2>
            <div class="row margin-row">
              <div class="col-md-3 gallerij">
                <img id="chart" src="assets/img/morph.jpeg" style="width: 90%; position: absolute; height: 80%; margin-top: 10%;" alt="morphological chart">
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
              <a href="https://github.com/thomasmartensgithub/Emotiv_EEG" target="_blank">
                <img src="assets/img/Github.jpg" alt="Github" class="img-fluid">
              </a>
          </center>
          </div>
        </div>
      </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- The Close Button -->
      <span class="close">&times;</span>

      <!-- Modal Content (The Image) -->
      <img class="modal-content" id="img01">

      <!-- Modal Caption (Image Text) -->
      <div id="caption"></div>
    </div>
    <?php include_once "inc/topbtn.php"?>
    <?php include_once "inc/footer.php"?>
  </body>
</html>
