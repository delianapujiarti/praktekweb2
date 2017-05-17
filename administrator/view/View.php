<?php 

/**
* 
*/
class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'navigasi.php';
		include_once 'header.php';
		// include_once 'content.php';
		
	}

	protected function end()
	{
		include 'footer.php';
	}
	
}



 ?>