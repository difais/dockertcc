<?php

$id = $_GET["id"] ;

//1. ada koneksi
$link = mysqli_connect("db","user","test","akademik") ;

//2. perintah sql
$sql = "select * from mahasiswa where id='".$id."'" ;

//3. menjalankan sql
$query = mysqli_query($konek,$sql) ;

//4. jika hasil menjalankan adalah resource data hasil select
//	maka ubah jadi array (fetch)
// ulang selama data record masih ada
$data = mysqli_fetch_assoc($query) ; 

?>
<h1>Update Data Mahasiswa</h1>
<form action="proses_update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data["id"] ?>" /> 
	NIM <br/>
	<input type="text" name="nim" value="<?php echo $data["nim"] ?>" /> <br/>
	Nama <br/>
	<input type="text" name="nama" value="<?php echo $data["nama"] ?>" /> <br/>
	Jurusan <br/>
	<input type="text" name="jurusan" value="<?php echo $data["jurusan"] ?>" /> <br/>
	<hr/>
	<button type="submit">SIMPAN</button>
</form>