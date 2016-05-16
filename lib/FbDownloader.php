<?php 
/*
+--_--_-- Facebook Video Downloader --_--_--_+
+------- http://github.com/mikimaine ----------- +
--------------------------------------------------------
--------------------------------------------------------
@file FbDownloader.php .........+
@author Miki Maine Amdu, TMG Production Inc. <mikias.amdu@yahoo.com>
@original idea by https://github.com/Sxsumit
*
*/
  
namespace lib;

 defined('FBDOWNLOADER')? null:die('NO DIRECT SCRIPT ACCESS ALLOWED');
 
class FbDownloader implements DownloaderInterface {
	
	
	private $url;
	
	private $file_content;
	
	private $download_link = array();
	
	private $links = array('sd' =>'https://video-hkg3-1.xx.fbcdn.net/v/t43.1792-2',
	                       'hd' =>'https://video-hkg3-1.xx.fbcdn.net/v/t42.1790-2');
				   
	public function __construct ($url)
	{
	 $this->url = $url;	
		
	}
	
	public function download()
	{     
	$this->file_content = file_get_contents($this->url);
	
	    if ($this->file_content !== null) {
				
			foreach($this->links as $key => $link){
				if( $this->check_match($key)){
					$match[$key] = $this->check_match($key);
					$this->download_link[$key] = $link.$match[$key][1];
				}
			}
		}
			
			return $this->download_link;
	}
	
	public function check_match($key){
		if($key == 'sd' ){
			
			if(preg_match('#.*-2\\\(.*)","sd_src"#', $this->file_content, $match) !== null){
			return $match;
		      }
		}
		if($key == 'hd' ){
			
			if(preg_match('#"sd_src":".*-2\\\(.*)","hd_#', $this->file_content, $match) !== null){
				return $match;
			}
		}
		
		return false;
	}
	
}


?>