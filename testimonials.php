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
        <li><a class="waves-effect waves-light" href="gallery.html">Gallery</a> </li>
        <li><a class="waves-effect waves-light" href="services.html">Services</a> </li>
        <li><button href="#contact" id="download-button" class="btn-flat waves-effect liz-orange modal-trigger" >Contact</button> </li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <!-- <li><a class="waves-effect waves-light btn modal-trigger liz-orange" href="#about">About us</a></li> -->
        <!--TODO: Copy the above nav here for mobile support-->
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <br/><br/><br/><br/>
        <!-- Modal Structure -->
        <div id="contact" class="modal">
          <div class="modal-content">
            <h4>Contact</h4>
            <form>
              <input type="text" name="name" placeholder="Name" class="col s12">
              <input type="text" name="email" placeholder="Email" class="col s12">
              <input type="text" name="phno" placeholder="Phone No/Mobile" class="col s12">
              <textarea class="col s12" placeholder="Type your message here"></textarea>
            </form>
          </div>
          <div class="modal-footer">
            <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Submit</a>
          </div>
        </div>

        <?php

          $servername = "localhost";
          $username = "root";
          $password = "pwd4MySQL";
          $dbname = "privilege_card_members";
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          $sql="SELECT * FROM testimony";
          $result=$conn->query($sql);
          ?>
          <div class="container">
          <div class="row">
            <br/><br/>
            <h5 class="center">Previous Testimonies!</h5>
            <br/><br/>
          <?php
          if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
              ?>
              <div class="card col m4 s12" style="margin:0px;">
                <div class="card-content">
                  <div class="card-title">
                    <?php echo $row['name']; ?> says...
                  </div>
                  <?php echo $row['message']; ?>
                </div>
              </div>
              <?php
            }
          }
        ?>
        <br/><br/>
        <br/>
        <div class="row">
        <button class="btn col m3 push-m3 submit-testimony-button waves-effect" id="testimony-submit">
          Submit a Testimony
        </button>
      </div>
      </div>
    </div>
        <div class="center submit-testimony-hidden" id="testimony_submit_form">
          <br/><br/><br/>
            <form action="testimony_submit.php">
              <div class="row">
                <div class="card col s4 push-s8 left-align">
                  <div class="card-content">
                  <h5 class="card-title">Submit a testimony!</h5>
                  <br/>
                  <div class="input-field">
                    <input type="text" name="name" id="name"/>
                    <label class="active" for="name">Your Name</label>
                  </div>
                  <div class="input-field">
                    <textarea class="materialize-textarea" name="message" id="message"></textarea>
                    <label class="active" for="message">Message</label>
                  </div>
                  <div class="input-field">
                    <input type="submit" class="btn col s12"/>
                  </div>
                  <br/>
                  <br/>
                  <div class="input-field">
                    <button class="btn col s12" id="close_submit_form">Close</button>
                  </div>
                  <br/><br/>
                </div>
                </div>
              </div>
            </form>
        </div>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/materialize/dist/js/materialize.js"></script>
        <script src="scripts/testimony.js"></script>
</body>
</html>
