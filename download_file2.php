<?php
ini_set("user_agent", "PHP");
if (isset($_POST['URL']))
{
	@$URL = $_POST["URL"];
@$output = file_get_contents($URL);
if ($output !== null) {
preg_match('#.*-2\\\(.*)","sd_src"#', $output, $match);
 if (@$match[1]!== null) {
$link_1 = "https://video-hkg3-1.xx.fbcdn.net/v/t43.1792-2" .$match[1];
}
preg_match('#"sd_src":".*-2\\\(.*)","hd_#', $output, $match);
if (@$match[1]!== null) {
	$link_3 = "https://video-hkg3-1.xx.fbcdn.net/v/t42.1790-2" .$match[1];
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Facebook Video Downloader</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="thisstyle.css">

<div id="section">
<h1>Facebook Video Downloader</h1>
<form action="download_file2.php" method="POST">
<input type="text" placeholder="Copy Your Facebook Video URL Over Here" name = "URL" >
<input type="submit" name="submit" value="Download"></input>
</form><?php
if(@$link_1 === null && @$link_3 === null)
 {
echo "<h2>The video might be private hence cannot be downloaded</h2>";
 }
else
{
echo "<h2>Download Video In HD Quality</h2>";
 if (@$link_1 !== null) {
 echo "<a href='".$link_1."' download='video.mp4'  >Click Here To Download The Video In HD </a>"; 
}
else 
{
echo "This Video isn't avialable in HD quality";
}
echo "<h2>Download Video In Sd Quality</h2>";
echo "<a href='".$link_3."' download='video.mp4' >Click Here To Download The Video In SD </a>";
} 
?>
</div>
<div id="footer">
Copyright © © Sumit Sharma https://github.com/Sxsumit/ @Apache License 2.0 
</div>

</body>
</html>
