<?php 
/*
+--_--_-- Facebook Video Downloader --_--_--_+
+------- http://github.com/mikimaine ----------- +
--------------------------------------------------------
--------------------------------------------------------
@file index.php .........+
@author Miki Maine Amdu, TMG Production Inc. <mikias.amdu@yahoo.com>
@original idea by https://github.com/Sxsumit
*
*/

defined('FBDOWNLOADER')? null:define('FBDOWNLOADER',"Version 0.0.1");
require_once('include/init.php');

if($_POST){
	$downloader = new lib\FbDownloader($_POST['URL']);
	$download_link = $downloader->download();
}

require_once('view/home.php');

?>