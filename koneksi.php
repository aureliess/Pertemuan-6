<?php
$host="localhost";
$user="root";
$password="";
$dbname="paw_5";

$koneksi= mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "KONEKSI GAGAL";
}
?>



