<?php
include "koneksi.php";
$id= $_POST['id_mhs'];
$nama = $_POST['nama_mhs'];
$prodi = $_POST['nama_prodi'];
$alamat = $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES('$id','$prodi','$nama', '$alamat')";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Eksekusi Gagal";
}else{
    echo "Eksekusi Berhasil <a href='index.php'>Cek Data</a>";
    
}
?>