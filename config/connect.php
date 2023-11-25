<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$localhost = 'localhost:3308';
$user = 'root';
$nama = 'modul4';
$pass = "";
// 
$db = mysqli_connect('localhost:3308', 'root', '', 'modul4');
// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$db){
    die("connection failed : ". mysqli_connect_error());
}
// 
?>