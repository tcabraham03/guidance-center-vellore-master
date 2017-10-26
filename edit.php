<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Vellore Guidance Center</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="bower_components/materialize/dist/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="soft-crust" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo"><img src="images/logo.png"></a>
      <ul class="right hide-on-med-and-down">
        <!-- <li><a class="waves-effect waves-light btn modal-trigger liz-orange" href="#about">About us</a></li> -->
        <li><a class="waves-effect waves-light" href="index.html">Home</a> </li>
        <li><a class="waves-effect waves-light" href="about.html">About Us</a> </li>
        <li><a class="waves-effect waves-light" href="gallery.ht  ml">Gallery</a> </li>
        <li><a class="waves-effect waves-light" href="services.html">Services</a> </li>
        <li><a class="waves-effect waves-light" href="facilities.html">Facilities</a> </li>
        <li><button href="#contact" id="download-button" class="btn-flat waves-effect liz-orange modal-trigger" >Contact</button> </li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <!-- <li><a class="waves-effect waves-light btn modal-trigger liz-orange" href="#about">About us</a></li> -->
        <!--TODO: Copy the above nav here for mobile support-->
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="custom-header center liz-orange-text"> Mar Thoma Fellowship And Guidance Home, Vellore</h1>
      <h6 class="custom-subsub-header center liz-orange-text"> Chennai - Banglore Diocese</h6>
      <h6 class="custom-subsub-header center liz-orange-text"> Mar Thoma Syrian Church of Malabar </h6>
      <div class="row center">
        <h5 class="custom-sub-header col s12 light">"A home away from home when you are at CMC Vellore and you need any help"</h5>
      </div>
    </div>
  </div>
  <hr style="width:65%; border:1px solid rgb(255, 115, 0);"/>
  <br/><br/><br/><br/>
  <div class="container">
<?php
  $id=$_GET['id'];

  $servername = "localhost";
  $username = "root";
  $password = "pwd4MySQL";
  $dbname = "privilege_card_members";
  $message=$_GET['message'];

    if($message){
      echo '<h1>'.$message.'!</h1>';
    }
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql="SELECT * FROM members WHERE regno= $id";
  $detail_result = $conn->query($sql);

  if($detail_result->num_rows>0){
    ?>
      <div class="row">
      <form action="editSubmit.php" class="col s12">
        <div class="input-field">
          <?php
            while($row = $detail_result->fetch_assoc()) {
              echo "<input style='display:none;' value=".$row['regno']." name='id'/>";
              echo "<input disabled type='text' id='name'  placeholder='Name' value='".$row['name']."'/>";
              echo "<input style='display:none;' type='text' name='name' value='".$row['name']."'/>";
          ?>
          <label for="name" class="active">Name (You cannot edit this)</label>
        </div>
        <div class="input-field">
          <?php
              echo "<textarea name='address' id='address' class='materialize-textarea'>".$row['address']."</textarea>";
          ?>
          <label for="address" class="active">Address</label>
        </div>
        <div class="input-field">
            <input type="text" id="home_parish" name="home_parish" placeholder="Home Parish" value="<?php echo $row['home_parish']?>"/>
            <label for="home_parish" class="active">Home Parish</label>
        </div>
        <div class="input-field">
            <input type="text" id="present_parish" name="present_parish" placeholder="Present Parish" value="<?php echo $row['present_parish']?>"/>
            <label for="present_parish" class="active">Present Parish</label>
        </div>
        <div class="input-field">
            <input type="tel" id="phone" name="phone" placeholder="Phone Number" value="<?php echo $row['phone']?>"/>
            <label for="phone" class="active">Phone Number</label>
        </div>
        <div class="input-field">
            <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $row['email']?>"/>
            <label for="email" class="active">Email</label>
        </div>
        <?php
      }
        ?>
        <div class="input-field">
            <input type="submit" value="Submit" class="btn col s12"/>
        </div>
      </form>
    </div>
    <?php
  }
?>

  </div>
  <footer class="liz-orange page-footer ">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"><img src="images/icon_destination.png" width="30" height="30"> Address</h5>
          <h6 class="white-text">Mar Thoma New Guidance Home,<br/>Old Bypass Rd, Behind New Fish Market,<br/>Thottapalayam, Vellore Fort P.O,<br/>Vellore, Tamil Nadu 632-004<br/>India<br/><br/></h6>
           <ul>
            <li><div class="icon white-text"><img src="images/icon_telephone.png"/> 0416 - 2220542</div></li>
            <li><div class="icon white-text"><img src="images/icon_mobile.png"/> +919445410542</div></li>
            <li><div class="icon white-text"><img src="images/icon_email.png"/> mtguidancehome@gmail.com</div></li>
           </ul>
          <p class="grey-text text-lighten-4"></p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="white-text" href="sitemap.html">Site Map</a></li>
            <li><a class="white-text" href="https://www.facebook.com/Dr-Alexander-Mar-Thoma-Memorial-Fellowship-and-Guidance-Home-345380575539622/">Facebook Page</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Support Us</h5>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-1" href="http://www.mtguidancehomevellore.in">© 2017 MTC Guidance Home, Vellore. </a> All Rights Reserved®
      </div>
    </div>
  </footer>


</body>
</html>
