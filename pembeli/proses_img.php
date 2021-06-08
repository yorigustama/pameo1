<?php
include '../koneksi.php';
if ($_GET['action'] == 'edit' || $_GET['action'] == 'tambah') {
	$path = "images/"; //folder buat menyimpan file gambar
	$file = $_FILES['materi_pendukung']['name'];
	$temp = $_FILES['materi_pendukung']['tmp_name'];
	if ($_GET['action'] == 'edit') {
		$d = mysqli_fetch_array(mysqli_query($kon, "select * from reques_design where jenis='img' and id='{$_GET['id']}'"));
		unlink("images/" . $d['materi_pendukung']);
	}
	move_uploaded_file($temp, $path . $file);
}
if ($_GET['action'] == 'tambah') {
	mysqli_query($kon, "insert into reques_design values (default, '{$_POST['nama_design']}', '{$_POST['jenis_design']}','{$_POST['batas_waktu']}','{$_POST['jumlah_design']}','{$_POST['catatan_khusus']}','{$_POST['waktu_reques']}', '$file', now(),'img')");
}
if ($_GET['action'] == 'edit') {
	mysqli_query($kon, "update reques_design set materi_pendukung='$file',nama_design='{$_POST['nama_design']}',jenis_design='{$_POST['jenis_design']}',batas_waktu='{$_POST['batas_waktu']}',jumlah_design='{$_POST['jumlah_design']}',catatan_khusus='{$_POST['catatan_khusus']}',waktu_reques='{$_POST['waktu_reques']}' where id={$_GET['id']}");
}
if ($_GET['action'] == 'hapus') {
	$d = mysqli_fetch_array(mysqli_query($kon, "select * from reques_design where jenis='img' and id='{$_GET['id']}'"));
	unlink("images/" . $d['materi_pendukung']); {
		mysqli_query($kon, "delete from reques_design where jenis='img' and id='{$_GET['id']}'");
	}
}
header("location:reques_design.php");
