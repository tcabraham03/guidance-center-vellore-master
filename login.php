<?php
  $name=$_POST['uname'];
  $password=$_POST['pswd'];
  

  $servername = "localhost";
  $username = "vmtcguidance";
  $password = "abcd12345";
  $dbname = "velloremtcguidance";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
 
  $sql="SELECT `username`, `password` FROM `Login` WHERE `username`='admin' and `password`='Vell0re'";
  if($conn->query($sql)===TRUE){
    Redirect('home.html?message=Success');
  }
  else{
    Redirect('home.html?message=Error');
    echo 'Error';
  }

  function Redirect($url, $permanent = false){
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
  }
?>