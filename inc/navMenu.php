<?php
    include "./inc/get_login.php";
?>
<div class="navbar" id="stickybar">
  <ul class="nav">
    <li class="navitem active"><a href="#">Clear Skies</a></li>
    <li class="navitem"><a href="#">Home</a></li>
    <li class="navitem"><a href="#">The Team</a></li>
    <li class="navitem navEnd"><a href="#">Projecten</a></li>
    <div class="navRight">
    <?php if ($_SESSION['online'] == "no"){
      echo '<li class="navitem"> <a href="#"><span class="fa fa-user"></span> Inloggen </a> </li>';
    } else if ($_SESSION['online'] == "yes"){

      echo '<li class="navitem"><a href="#"><span class="fa fa-user"></span> Mijn Account</a></li>';
    }
    ?>
    </div>
  </ul>
</div>
