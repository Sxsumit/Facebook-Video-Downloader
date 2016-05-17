<?php
/*
+--_--_-- Facebook Video Downloader --_--_--_+
+------- http://github.com/mikimaine ----------- +
--------------------------------------------------------
--------------------------------------------------------
@file DownloaderInterface.php .........+
@author Miki Maine Amdu, TMG Production Inc. <mikias.amdu@yahoo.com>
@original idea by https://github.com/Sxsumit
*
*/

namespace lib;

defined('FBDOWNLOADER')? null:die('NO DIRECT SCRIPT ACCESS ALLOWED');
 
interface DownloaderInterface{
	
	public function download();
	
}

?>