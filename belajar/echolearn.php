<?php 
$nama= "Deliana pujiarti";
$a=1;
//echo "Saya ".$nama." berasal dari manismata<br>";  //untuk menggabungkan kata atau kalimat, maka gunakan titik (.)
//dapat menyisipkan kode html dalam html, dan sebaliknya, contoh <h1>
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $nama ?></title>
 </head>
 <body>
 <?php 
 for ($i=0; $i<5;$i++){?>

<h1><?php echo $nama ?></h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
 
<?php }//untuk meringkas php di simbolkan dengan tanda tanya  ?>

<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
	</tr>
	<?php for ($i=0; $i<10;$i++){?>
	<tr>
		<td><?php echo $i+1 ?></td>
		<td><?=$nama ?></td> 
	</tr>
	<?php } ?>

</table>


 </body>
 </html>