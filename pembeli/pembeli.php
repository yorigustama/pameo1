<?php
include '../koneksi.php';
$tgl = date('d-m-Y');
session_start();

if (!isset($_SESSION["username"])) {
    echo "Anda harus login dulu <br><a href='../login.php'>Klik disini</a>";
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
<?php include '../pembeli/header.php'; ?>
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

</body>

</html>