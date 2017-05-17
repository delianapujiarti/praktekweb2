<?php 

/**
* 
*/

include_once 'Model.php';
class Berita extends Model
{
	
	public function ambilBerita()
	{
		$query = $this->db->prepare("SELECT * FROM berita");//prepare adalah fungsi dari PDO
    	$query->execute();
    	$data = $query->fetchAll(); //untuk membuka bungkusan data

    	return $data;
	}

}


 ?>