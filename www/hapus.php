<?php
$id = $_GET["id"] ;

//1. ada koneksi
$link = mysqli_connect("db","user","test","akademik") ;

//2. perintah sql
$sql = "delete from mahasiswa where id='".$id."'" ;

//3. menjalankan sql
$query = mysqli_query($konek,$sql) ;
if($query)
	header("Location: index.php") ;
else
	echo "data gagal dihapus" ;


//6. tutup koneksi
mysqli_close($konek) ;
?>