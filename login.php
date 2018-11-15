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
    <title>Login</title>
    <?php session_start() ?>
  </head>
  <body>
    <?php
    if($_SESSION['ingelogd'] == "yes"){
      header("Location: dashboard.php");
    }
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gebruikersnaam = $_POST['userName'];
        $wachtwoord = $_POST['password'];

        if($gebruikersnaam == "clearskies" && $wachtwoord == "theskyisthelimit"){
          $_SESSION['ingelogd'] = "yes";
          header("Location: dashboard.php");
        } else {
          $error_message = "Foute inloggegevens! Controleer gebruikersnaam en/of wachtwoord";
        }
      }
      //   $sql="SELECT * FROM gebruikers";
      //   $result = mysqli_query($conn, $sql);
      //   while($dbemail = mysqli_fetch_assoc($result)){
      //     if ($dbemail['email'] == $email){
      //       $error_message = "Foutmelding: Deze email staat al geregistreerd!";
      //       $fout = "true";
      //       header("Refresh:4");
      //     }
      //   }
      //   if(empty($email)){
      //     $error_message = "Graag een email invullen!";
      //   } else if($fout != "true"){
      //     $sql="INSERT INTO email (email) VALUES ('$email');";
      //     $resultaat = mysqli_query($conn, $sql);
      //     if ($resultaat){
      //       $error_message = "";
      //       $success_message = "Gelukt! Je hoort van ons!";
      //     } else {
      //       $error_message = "Er is een fout opgetreden: " . mysqli_error($conn);
      //       header("Refresh:4");
      //     }
      //   }
      //   DB naam: email
      //   Sla email op in server
      //
      // }

    ?>
    <div class="headerDiv">
      <div class="streep d-none d-md-block" style="float: left;"></div>
      <img src="assets/img/anonymous.jpg" class="rounded-circle profileHeader" alt="standaard image">
      <div class="streep d-none d-md-block" style="float: right;"></div>
    </div>
    <?php $pageName = "Login"; include_once "inc/navbar.php"?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 jumbotron">
          <?php if(!empty($success_message)) { ?>
            <div class="success-message col-sm-4 col-md-12"><?php if(isset($success_message)) echo $success_message; ?></div>
          <?php } ?>
          <?php if(!empty($error_message)) { ?>
            <div class="error-message col-sm-4 col-md-12"><?php if(isset($error_message)) echo $error_message; ?></div>
          <?php } ?>
          <h1>Inloggen</h1>
          <form  method="post" enctype="multipart/form-data" action="login.php">
            <fieldset>
              <div class="form-group">
                <label for="userName">Gebruikersnaam</label>
                <input type="text" class="form-control form-control-login" style="padding-left: 5px;" name="userName" id="userName" placeholder="Voer gebruikersnaam in" data-dpmaxz-eid="12">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Wachtwoord</label>
                <input type="password" class="form-control form-control-login" style="padding-left: 5px;" name="password" id="exampleInputPassword1" placeholder="Wachtwoord" data-dpmaxz-eid="13">
              </div>
              <button type="submit" class="btn btn-primary" data-dpmaxz-eid="17">Login</button>
            </fieldset>
          </form>
        </div>
      </div>
      <div class="longAssDiv">
      </div>
    </div>
    <?php include_once "inc/topbtn.php"?>
    <?php include_once "inc/footer.php"?>
  </body>
</html>
