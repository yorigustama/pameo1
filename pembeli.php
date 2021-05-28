<?php
session_start();

if (!isset($_SESSION["username"])) {
    echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
    exit;
}

$level = $_SESSION["level"];

if ($level != 3) {
    echo "Anda tidak punya akses pada halaman pembeli";
    exit;
}

$id_user = $_SESSION["id_user"];
$username = $_SESSION["username"];
$nama = $_SESSION["nama"];
$email = $_SESSION["email"];


?>
<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>
    <div class="jumbotron text-center">
        <h1>Selamat Datang di Halaman Pembeli</h1>
        <h4>Halaman ini hanya dapat diakses oleh user admin dan pembeli</h4>
        <p>Nama : <?php echo $nama; ?></p>
        <p>Username : <?php echo $username; ?></p>
        <p>Email : <?php echo $email; ?></p>


        <a href="logout.php" class="btn btn-warning" role="button">Logout</a>
    </div>


    <div class="container">
        <h2>Form Reques Gambar</h2>
        <form action="simpan-reques-design.php">
            <div class="form-group">
                <label for="nama_desain">Nama Desain</label>
                <input type="text" class="form-control" id="nama_desain" placeholder="Enter nama desain" name="nama_desain">
            </div>
            <div class="form-group">
                <label for="jenis_desain">Jenis Desain</label>
                <input type="text" class="form-control" id="jenis_desain" placeholder="Enter jenis desain" name="jenis_desain">
            </div>
            <div class="form-group">
                <label for="batas_waktu">Batas waktu</label>
                <input type="date" class="form-control" id="batas_waktu" placeholder="Enter batas waktu" name="batas_waktu">
            </div>
            <div class="form-group">
                <label for="jumlah_desain">Jumlah Desain</label>
                <input type="number" class="form-control" id="jumlah_desain" placeholder="Enter angka" name="jumlah_desain">
            </div>
            <div class="form-group">
                <label for="catatan_khusus">Catatan Khusus</label>
                <input type="text" class="form-control" id="catatan_khusus" placeholder="Enter angka" name="jumlah_desain">
            </div>
            <div class="form-group">
                <label for="waktu_reques">Waktu Reques</label>
                <input type="date" class="form-control" id="waktu_reques" placeholder="Enter angka" name="waktu_reques">
            </div>
            <div class="form-group">
                <label for="materi_pendukung">Materi Pendukung</label>
                <input type="file" class="form-control" id="materi_pendukung" placeholder="Enter angka" name="materi_pendukung">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>



</body>

</html>