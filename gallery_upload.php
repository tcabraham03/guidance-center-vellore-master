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
				    <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed.</p>
				  </div>
				  <input type="submit" class="btn btn-lg btn-primary" value="Upload">
				</form>
			</div>
	      </div>
    </div> <!-- /container -->

  </body>
</html>