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

<body>

    <div class="container" style="margin-top:20px">
        <h2>Form Reques Gambar</h2>



        <hr>

        <?php
        if (isset($_POST['submit'])) {
            $nama_design    = $_POST['nama_design'];
            $jenis_design    = $_POST['jenis_design'];
            $batas_waktu        = $_POST['batas_waktu'];
            $jumlah_design         = $_POST['jumlah_design'];
            $catatan_khusus         = $_POST['catatan_khusus'];
            $waktu_reques         = $_POST['waktu_reques'];
            $materi_pendukung         = $_POST['materi_pendukung'];

            $cek = mysqli_query($kon, "SELECT * FROM reques_design  WHERE nama_design='$nama_design'") or die(mysqli_error($kon));

            if (mysqli_num_rows($cek) == 0) {
                $sql = mysqli_query($kon, "INSERT INTO reques_design (nama_design, jenis_design, batas_waktu, jumlah_design, catatan_khusus, waktu_reques, materi_pendukung) VALUES('$nama_design', '$jenis_design', '$batas_waktu', '$jumlah_design', '$catatan_khusus', '$waktu_reques', '$materi_pendukung')") or die(mysqli_error($kon));



                if ($sql) {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>BERHASIL DITAMBAHKAN!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
                } else {
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }
            } else {
                echo '<div class="alert alert-warning">Gagal, Nama sudah terdaftar.</div>';
            }
        }
        ?>

        <form action="pembeli.php" method="post">
            <div class="form-group">
                <label for="nama_design">Nama design</label>
                <input type="text" class="form-control" id="nama_design" placeholder="Enter nama design" name="nama_design">
            </div>
            <div class="form-group">
                <label for="jenis_design">Jenis design</label>
                <input type="text" class="form-control" id="jenis_design" placeholder="Enter jenis design" name="jenis_design">
            </div>
            <div class="form-group">
                <label for="batas_waktu">Batas waktu</label>
                <input type="date" class="form-control" id="batas_waktu" placeholder="Enter batas waktu" name="batas_waktu">
            </div>
            <div class="form-group">
                <label for="jumlah_design">Jumlah design</label>
                <input type="number" class="form-control" id="jumlah_design" placeholder="Enter angka" name="jumlah_design">
            </div>
            <div class="form-group">
                <label for="catatan_khusus">Catatan Khusus</label>
                <input type="text" class="form-control" id="catatan_khusus" placeholder="Enter angka" name="catatan_khusus">
            </div>
            <div class="form-group">
                <label for="waktu_reques">Waktu Reques</label>
                <input type="text" class="form-control" id="waktu_reques" placeholder="<?php $tgl = date('d/m/Y');
                                                                                        echo $tgl; ?>" name="waktu_reques">
            </div>
            <div class="form-group">
                <label for="materi_pendukung">Materi Pendukung</label>
                <input type="file" class="form-control" id="materi_pendukung" placeholder="Enter angka" name="materi_pendukung">
            </div>



            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                    <a href="reques_design _data.php" class="btn btn-warning">KEMBALI</a>
                </div>
            </div>

        </form>

    </div>

</body>