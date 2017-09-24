<?php
  $servername = "localhost";
  $username = "root";
  $password = "pwd4MySQL";
  $dbname = "privilege_card_members";
  $name=$_GET['name'];
  $message=$_GET['message'];
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql="INSERT INTO `testimony` ( `name`, `message`) VALUES ('$name', '$message');";

  if($conn->query($sql)===TRUE){
    Redirect('testimonials.php?status=Success');
  }
  else{
    Redirect('testimonials.php?status=Error');
    echo 'Error';
  }

  function Redirect($url, $permanent = false){
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
  }

?>
