<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/master.css" rel="stylesheet" type="text/css">
    <link href="css/footer.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="./js/scroll.js"></script>
    <title>Login</title>
  </head>
  <body>
    <?php

      // include "./inc/dbconnect.php";

      // if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //   $gebruikersnaam = mysqli_real_escape_string($conn, $_POST['userName']);
      //   $wachtwoord = mysqli_real_escape_string($conn, $_POST['password']);
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
          <form data-dpmaxz-eid="10">
            <fieldset>
              <div class="form-group">
                <label for="userName">Gebruikersnaam</label>
                <input type="text" class="form-control form-control-login" name="userName" id="userName" placeholder="Voer gebruikersnaam in" data-dpmaxz-eid="12">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Wachtwoord</label>
                <input type="password" class="form-control form-control-login" name="password" id="exampleInputPassword1" placeholder="Wachtwoord" data-dpmaxz-eid="13">
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
