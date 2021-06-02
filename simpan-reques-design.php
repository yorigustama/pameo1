<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$nama_design = $_POST["nama_design"];
$jenis_design = $_POST["jenis_design"];
$batas_waktu = $_POST["batas_waktu"];
$jumlah_design = $_POST["jumlah_design"];
$catatan_khusus = $_POST["catatan_khusus"];
$jenis_design = $_POST["waktu_reques"];
$materi_pendukung = $_POST["materi_pendukung"];


//Query input menginput data kedalam tabel reques_design
$sql = "insert into reques_design (nama_design,jenis_design,batas_waktu,jumlah_design,catatan_khusus,waktu_reques,materi_pendukung) values
		('$nama_design','$jenis_design','$batas_waktu','$jumlah_design','$catatan_khusus,'$waktu_reques','$materi_pendukung')";

//Mengeksekusi/menjalankan query diatas	
$hasil = mysqli_query($kon, $sql);

//Kondisi apakah berhasil atau tidak
if ($hasil) {
    echo "Berhasil simpan data reques_design";
    exit;
} else {
    echo "Gagal simpan data reques_design";
    exit;
}
