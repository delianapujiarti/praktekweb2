<?php 

/**
* 
*/

include_once 'Model.php';
class buku extends Model
{
	
	public function ambilBuku()
	{
		$query = $this->db->prepare("SELECT * FROM berita");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>