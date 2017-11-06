<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    
    <title>Vellore Guidance Center</title>

    
    <!-- Bootstrap core CSS -->
    <link href="boostrap/css/bootstrap.min.css" rel="stylesheet"/>
   
     <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="bower_components/materialize/dist/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet"/>
    <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css"/>
    <link href="styles/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick-theme.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css">

    <style type="text/css">

body
{
 background:#fff;
}
img
{
 width:auto;
 box-shadow:0px 0px 20px #cecece;
 -moz-transform: scale(0.7);
 -moz-transition-duration: 0.6s; 
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.7);
 
 -ms-transform: scale(0.7);
 -ms-transition-duration: 0.6s; 
}
img:hover
{
  box-shadow: 20px 20px 20px #dcdcdc;
 -moz-transform: scale(0.8);
 -moz-transition-duration: 0.6s;
 -webkit-transition-duration: 0.6s;
 -webkit-transform: scale(0.8);
 
 -ms-transform: scale(0.8);
 -ms-transition-duration: 0.6s;
 
}
</style>
  </head>

  <body>
    <nav class="soft-crust" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="home.html" class="brand-logo"><img src="images/logo.png"></a>
            <ul class="right hide-on-med-and-down">
                <!-- <li><a class="waves-effect waves-light btn modal-trigger liz-orange" href="#about">About us</a></li> -->
                <li><a class="waves-effect waves-light" href="home.html">Home</a> </li>
                <li><a class="waves-effect waves-light" href="gallery_upload.php">Gallery</a> </li>
                <li><a class="waves-effect waves-light" href="">Control center</a> </li>
                <li><a class="waves-effect waves-light" href="logout.php">Logout</a> </li>
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

        <div class="container">
    
    	<div class="row">
	       <?php 
	       	//scan "uploads" folder and display them accordingly
	       $folder = "gallery";
	       $results = scandir('gallery');
	       foreach ($results as $result) {
	       	if ($result === '.' or $result === '..') continue;
	       
	       	if (is_file($folder . '/' . $result)) {
	       		echo '
	       		<div class="col-md-3">
		       		<div class="thumbnail">
			       		<img src="'.$folder . '/' . $result.'" alt="...">
				       		<div class="caption">
				       		<p><a href="remove.php?name='.$result.'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
			       		</div>
		       		</div>
	       		</div>';
	       	}
	       }
	       ?>
    	</div>
    	
		

	      <div class="row">
	      	<div class="col-lg-12">
	           <form class="well" action="upload.php" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="file">Select a file to upload</label>
				    <input type="file" name="file">
				  </div>
				  <input type="submit" class="btn btn-lg btn-primary" value="Upload">
				</form>
			</div>
	      </div>
    </div>


    <footer class="liz-orange page-footer ">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"><img src="images/icon_destination.png" width="30" height="30"> Address</h5>
          <h6 class="white-text">Mar Thoma New Guidance Home,<br/>Old Bypass Rd, Behind New Fish Market,<br/>Thottapalayam, Vellore Fort P.O,<br/>Vellore, Tamil Nadu 632-004<br/>India<br/><br/></h6>
          <ul>
          <li>
            <div class="icon white-text">
              <i class="fa fa-phone black-text" style="font-size:20px; width:28px; text-align:center;"></i> 0416 - 2220542
            </div>
          </li>
          <li>
            <div class="icon white-text">
              <i class="fa fa-mobile black-text" style="font-size:20px; width:28px; text-align:center;"></i> +919445410542
            </div>
          </li>
          <li>
            <div class="icon white-text">
              <i class="fa fa-envelope black-text" style="font-size:20px; width:28px; text-align:center;"></i> mtguidancehome@gmail.com
            </div>
          </li>
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


  <!--  Scripts-->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/materialize/dist/js/materialize.js"></script>
  <script src="bower_components/slick-carousel/slick/slick.js"></script>
  <!-- <script src="js/init.js"></script> -->
  
  <script type="text/javascript">
      $(document).ready(function(){
          $('.centers-slider').slick({
              arrows:true
          })
          $('ul.tabs').tabs()
          $('.modal-trigger').leanModal()
          $('.carousel.carousel-slider').carousel({fullWidth: true})
      });
  </script>
  </body>
</html>