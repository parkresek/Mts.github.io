<?php
$servername = "localhost";
$database = "Mts";
$username = "root";
$password = "password";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);


//menerima nilai dari kiriman form pendaftaran
$email = $_POST["email"];
$password = $_POST["password"]; //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
$sql = "insert into user (email,password) values
		('$email','$password')";

//Mengeksekusi/menjalankan query diatas	
$hasil = mysqli_query($conn, $sql);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
    echo "Berhasil simpan data anggota";
    exit;
} else {
    echo "Gagal simpan data anggota";
    exit;
}
