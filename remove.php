<?php
// get correct file path
$fileName = $_GET['name'];
$filePath = 'gallery/'.$fileName;
// remove file if it exists
if ( file_exists($filePath) ) {
	unlink($filePath);
	header('Location:gallery_upload.php');
}
?>