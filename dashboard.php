<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/logo.png"/>

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/master.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <title>Dashboard</title>
    <?php session_start() ?>
  </head>
  <body>
    <?php
      if($_SESSION['ingelogd'] !== "yes"){
        header("Location: login.php");
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $required = array('title', 'content', 'date', 'auteur');
        foreach($required as $field){
          if(empty($_POST[$field])){
            $error_message = "Zorg dat alle velden zijn ingevuld!";
            header("Refresh:2");
            $error = True;
          }
        }

        if(!isset($error)){
          $titel = $_POST['title'];
          $content = $_POST['content'];
          $date = $_POST['date'];
          $date = date("d-m-Y", strtotime($date));
          $auteur = $_POST['auteur'];

          if($auteur == "jelle"){
            $naam = "Jelle van Koppen";
          } else if($auteur == "ruud"){
            $naam = "Ruud Wander";
          } else if($auteur == "rick"){
            $naam = "Rick Kloppers";
          } else if($auteur == "thomas"){
            $naam = "Thomas Martens";
          }

          $newpost = '<section>
            <div class="col-12 my-4 blokkie">
              <h2>'. $titel .'</h2>
              <div class="streepje"></div>
              <p>'. $content .'</p>
              <div class="row midden_wrapper">
                <div class="col-6">
                  <div class="row midden_wrapper">
                    <div class="col-2">
                      <img src="assets/img/persons/'. $auteur .'.jpg" class="img-fluid rounded-circle" alt="ruud">
                    </div>
                    <div class="col-10 midden_content">
                      <h4>'. $naam .'</h4>
                    </div>
                  </div>
                </div>
                <div class="col-6 midden_content">
                  <h5>'. $date .'</h5>
                </div>
              </div>
            </div>
          </section>';

          $error_message = "";
          $success_message = "Je Update is gepost!";

          $search      = "start input";
          $lines       = file('project56voortgang.php', FILE_IGNORE_NEW_LINES);
          $line_number = false;

          while (list($key, $line) = each($lines) and !$line_number) {
             $line_number = (strpos($line, $search) !== FALSE) ? $key + 1 : $line_number;
          }

          $line = $lines[$line_number];   // read line
          array_splice($lines, $line_number, 0, $newpost);    // insert $newline at $offset
          file_put_contents('project56voortgang.php', join("\n", $lines));    // write to file

          header("Refresh: 2;url=project56voortgang.php");
        }
      }

    ?>
    <div class="headerDiv">
      <div class="streep d-none d-md-block" style="float: left;"></div>
      <img src="assets/img/logo.png" class="profileHeader" alt="standaard image">
      <div class="streep d-none d-md-block" style="float: right;"></div>
    </div>
    <?php $pageName = "Dashboard"; include_once "inc/navbar.php"?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 jumbotron">
          <?php if(!empty($success_message)) { ?>
            <div class="success-message col-sm-4 col-md-12"><?php if(isset($success_message)) echo $success_message; ?></div>
          <?php } ?>
          <?php if(!empty($error_message)) { ?>
            <div class="error-message col-sm-4 col-md-12"><?php if(isset($error_message)) echo $error_message; ?></div>
          <?php } ?>
          <h1>Schrijf een Update</h1>
          <form  method="post" enctype="multipart/form-data" action="dashboard.php">
            <fieldset>
              <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" class="form-control form-control-login" style="padding-left: 5px;" name="title" id="userName" placeholder="Vul een titel in" data-dpmaxz-eid="12">
              </div>
              <div class="form-group">
                <label for="content">Inhoud</label>
                <textarea class="form-control form-control-login" id="content" name="content" rows="3" style="margin-top: 0px; margin-bottom: 0px; height: 159px;"></textarea>
              </div>
              <div class="form-group">
                <label for="date">Datum</label>
                <input type="date" class="form-control" id="date" name="date" style="padding-left: 5px;">
              </div>
              <div class="form-group">
                <label for="Auteur">Auteur</label>
                <select class="custom-select"name="auteur">
                  <option selected="">Auteur</option>
                  <option value="jelle">Jelle van Koppen</option>
                  <option value="rick">Rick Kloppers</option>
                  <option value="ruud">Ruud Wander</option>
                  <option value="thomas">Thomas Martens</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary" data-dpmaxz-eid="17">Post</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
    <?php include_once "inc/topbtn.php"?>
    <?php include_once "inc/footer.php"?>
  </body>
</html>
