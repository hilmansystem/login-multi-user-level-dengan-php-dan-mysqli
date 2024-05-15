<?php 
$koneksi = mysqli_connect("localhost","root","","multi_user");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>



// UNTUK HOSTING GUNAKAN FILE DIBAWAH, UNTUK LOKAL HOST XAMPP BIASA GUNAKAN FILE DIATAS, DAN HAPUS YANG TIDAK DIPAKAI ATAS ATAU BAWAH GUNAKAN SALAHSATU.

<?php
// Konfigurasi koneksi ke database
$host = "sql112.infinityfree.com"; // Host MySQL
$username = "if0_36550349"; // Username MySQL
$password = "YSSdZuW3MNxNibS"; // Password MySQL
$database = "if0_36550349_multi_user"; // Nama Database

// Buat koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

 
?>
