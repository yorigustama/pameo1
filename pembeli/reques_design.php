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

        <form action="../pembeli/proses_img.php" method="post" enctype="multipart/form-data">
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
                <input name="MAX_FILE_SIZE" value="50000000" type="hidden" />
                <input name="materi_pendukung" size="37" type="file" formenctype="multipart/form-data">
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">&nbsp;</label>
                <div class="col-sm-10">
                    <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
                    <a href="reques_design_data.php" class="btn btn-warning">KEMBALI</a>
                </div>
            </div>

        </form>

    </div>

</body>