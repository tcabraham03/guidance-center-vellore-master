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
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="images/logo.png"></a>
      <ul class="right hide-on-med-and-down">
        <!-- <li><a class="waves-effect waves-light btn modal-trigger liz-orange" href="#about">About us</a></li> -->
        <li><a class="waves-effect waves-light" href="index.html">Home</a> </li>
        <li><a class="waves-effect waves-light" href="about.html">About Us</a> </li>
        <li><a class="waves-effect waves-light" href="gallery.html">Gallery</a> </li>
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
  <br/><br/><br/><br/>
  <div class="container">
<?php
  $id=$_GET['id'];

  $servername = "localhost";
  $username = "root";
  $password = " ";
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
          }
          ?>
          <label for="address" class="active">Address</label>
        </div>
        <div class="input-field">
            <input type="text" id="home_parish" name="home_parish" placeholder="Home Parish"/>
            <label for="home_parish" class="active">Home Parish</label>
        </div>
        <div class="input-field">
            <input type="text" id="present_parish" name="present_parish" placeholder="Present Parish"/>
            <label for="present_parish" class="active">Present Parish</label>
        </div>
        <div class="input-field">
            <input type="tel" id="phone" name="phone" placeholder="Phone Number"/>
            <label for="phone" class="active">Phone Number</label>
        </div>
        <div class="input-field">
            <input type="email" id="email" name="email" placeholder="Email"/>
            <label for="email" class="active">Email</label>
        </div>
        <div class="input-field">
            <input type="submit" value="Submit" class="btn col s12"/>
        </div>
      </form>
    </div>
    <?php
  }
?>

  </div>
</body>
</html>
