<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username = $_POST["username"];
$nama = $_POST["nama"];
$level = $_POST["level"];
$email = $_POST["email"];
$password = md5($_POST["password"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel users
$sql = "insert into users (username,nama,level,email,password) values
		('$username','$nama','$level','$email','$password')";

//Mengeksekusi/menjalankan query diatas	
$hasil = mysqli_query($kon, $sql);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
    echo "Berhasil simpan data users";
    exit;
} else {
    echo "Gagal simpan data users";
    exit;
}
