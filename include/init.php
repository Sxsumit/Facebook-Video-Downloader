<?php 
/*
+--_--_-- Facebook Video Downloader --_--_--_+
+------- http://github.com/mikimaine ----------- +
--------------------------------------------------------
--------------------------------------------------------
@file Init.php .........+
@author Miki Maine Amdu, TMG Production Inc. <mikias.amdu@yahoo.com>
@original idea by https://github.com/Sxsumit
*
*/
 defined('FBDOWNLOADER')? null:die('NO DIRECT SCRIPT ACCESS ALLOWED');
 
  //define DS(DIRECTORY SEPARATOR) if not

    defined('DS')? null:define('DS',"/");
  //define the root directory

   defined('SITE_ROOT')? null:   define('SITE_ROOT', dirname(dirname(__file__)));

  //define the Library(include) Path

   defined('LIB_PATH')? null:define('LIB_PATH',SITE_ROOT.DS.'lib');

  //include the function for the hole apllication

   require_once(LIB_PATH.DS.'DownloaderInterface.php');
	
  //include the function for the hole apllication

    require_once(LIB_PATH.DS.'FbDownloader.php');
	
	
	
   
?>