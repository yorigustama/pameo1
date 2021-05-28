<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama_desain = $_POST["nama_desain"];
$jenis_desain = $_POST["jenis_desain"];
$batas_waktu = $_POST["batas_waktu"];
$jumlah_desain = $_POST["jumlah_desain"];
$catatan_khusus = $_POST["catatan_khusus"];
$jenis_desain = $_POST["waktu_reques"];
$materi_pendukung = $_POST["materi_pendukung"];


//Query input menginput data kedalam tabel users
$sql = "insert into users (nama_desain,jenis_desain,batas_waktu,jumlah_desain,catatan_khusus,waktu_reques,materi_pendukung) values
		('$nama_desain','$jenis_desain','$batas_waktu','$jumlah_desain','$catatan_khusus,'$waktu_reques','$materi_pendukung')";

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
