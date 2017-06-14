<?php 

$id_berita = $_GET['id'];
echo $id_berita;


$host = 'localhost';
$dbname = 'sisfonews';
$username = 'root';
$password = 'deliana';
$db = '';
//mengambil data berita
try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}
try {
	$stmt = $db->prepare("SELECT * FROM berita WHERE id_berita=:id");
	$stmt->bindparam(":id",$id_berita);
	$stmt->execute();
	$data = $stmt->fetch();
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}
//mengambil data kategori

try {
	$stmt2 = $db->prepare("SELECT * FROM kategori ");
	$stmt2->execute();
	$data2 = $stmt2->fetchAll();
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}
 ?>

<form action="aksi_ubah.php?id=<?php echo $id_berita?>" method = "POST">
<label for = "judul">JUDUL</label><br>
<input type="text" name="judul" value="<?php echo $data['judul']?>" /><br>
<label for ="isi">ISI</label><br>
<textarea name="isi"><?php echo $data['isi']?></textarea><br>
<select name="kategori">
<?php foreach ($data2 as $kat): ?>
<option value="<?php echo $kat['id_kategori'] ?>" 
<?php 
if($kat['id_kategori']==$data['id_kategori']){
	echo "selected";
 }
 ?>
><?php echo $kat['nama_kategori'] ?></option>
<?php endforeach ?>
</select><br><br>

<input type="submit" name="submit" value="submit">
</form>