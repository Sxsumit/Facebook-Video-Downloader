<!DOCTYPE html>
<html>
<head>
	<title>Facebook Video Downloader</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/thisstyle.css">

<div id="section">
<h1>Facebook Video Downloader</h1>
<form action="" method="POST">
<input type="text" placeholder="Copy Your Facebook Video URL Over Here" name = "URL" >
<input type="submit" name="submit" value="Download"></input>
</form>
<?php
if($_POST){
	if(isset($download_link)){
		if(!array_key_exists('hd',$download_link) || !array_key_exists('sd',$download_link)){
			echo "  <h1>:( </h1> <h2>The video might be private hence cannot be downloaded!</h2>";
			echo "  <h3>Or check you internet connection B/c the server is not responding properly</h3>";
		}else{
			if(array_key_exists('hd',$download_link)) {
				 echo "<h2>Download The Video In HD Quality</h2>";
				 echo "<a href='".$download_link['hd']."' download='video.mp4' >Click Here To Download The Video In HD </a>"; 
			}else {
				echo "This Video isn't available in HD quality";
			}
			echo "<h2>Download Video In Sd Quality</h2>";
			echo "<a href='".$download_link['sd']."' download='video.mp4' >Click Here To Download The Video In SD </a>";
		} 
		 
	}else {
		echo "<h2>Please Enter appropriate FaceBook Video URL!</h2>";
	}
}

?>

</div>
<div id="footer">
Copyright © © Sumit Sharma https://github.com/Sxsumit/ @Apache License 2.0 
</div>

</body>
</html>
