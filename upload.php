<!DOCTYPE html>
<!-- Change for change's sake -->
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Vellore Guidance Center</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="bower_components/materialize/dist/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
  <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css">
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
        <li><a class="waves-effect waves-light" href="testimonials.php">Testimonials</a></li>
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
		<div class="container">		
			<?php
			//turn on php error reporting
			error_reporting(E_ALL);
			ini_set('display_errors', 1);

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				
				$name     = $_FILES['file']['name'];
				$tmpName  = $_FILES['file']['tmp_name'];
				$error    = $_FILES['file']['error'];
				$size     = $_FILES['file']['size'];
				$ext	  = strtolower(pathinfo($name, PATHINFO_EXTENSION));
			
				switch ($error) {
					case UPLOAD_ERR_OK:
						$valid = true;
						//validate file extensions
						if ( !in_array($ext, array('jpg','jpeg','png','gif')) ) {
							$valid = false;
							$response = 'Invalid file extension.';
						}
						//validate file size
						if ( $size/1024/1024 > 2 ) {
							$valid = false;
							$response = 'File size is exceeding maximum allowed size.';
						}
						//upload file
						if ($valid) {
							$targetPath =  dirname( __FILE__ ) . DIRECTORY_SEPARATOR. 'gallery' . DIRECTORY_SEPARATOR. $name;
							move_uploaded_file($tmpName,$targetPath); 
							header( 'Location: gallery_upload.php' ) ;
							exit;
						}
						break;
					case UPLOAD_ERR_INI_SIZE:
						$response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
						break;
					case UPLOAD_ERR_PARTIAL:
						$response = 'The uploaded file was only partially uploaded.';
						break;
					case UPLOAD_ERR_NO_FILE:
						$response = 'No file was uploaded.';
						break;
					case UPLOAD_ERR_NO_TMP_DIR:
						$response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
						break;
					case UPLOAD_ERR_CANT_WRITE:
						$response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
						break;
					default:
						$response = 'Unknown error';
					break;
				}

				echo $response."<a href=gallery_upload.php>Click here</a>";
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
            <li><a class="white-text" href="gallery_upload.php">Gallery Upload</a></li>
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


  <!--  Scripts-->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/materialize/dist/js/materialize.js"></script>
  <script src="bower_components/slick-carousel/slick/slick.js"></script>

  </body>
</html>
