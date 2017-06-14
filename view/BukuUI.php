<?php 

require_once 'View.php';
/**
* 
*/
class BukuUI extends View
{
	
	public function tampilBuku()
	{
		include_once 'model/buku.php';

		$brt = new buku();

		$isi_buku = $brt->ambilBuku();

		include_once 'pages/utama.php';
		$this->end();
	}
}



 ?>