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
        <h2>Daftar Desain</h2>
        <hr>

        <table class="table table-striped table-hover table-sm table-bordered" id="datatable">
            <thead class="thead-blue">
                <tr>
                    <th>NO.</th>
                    <th>NAMA DESIGN</th>
                    <th>JENIS DESIGN</th>
                    <th>BATAS WAKTU</th>
                    <th>JUMLAH DESIGN</th>
                    <th>CATATAN KHUSUS</th>
                    <th>WAKTU REQUES</th>

                </tr>
            </thead>
            <tbody>
                <?php
                //query ke database SELECT tabel petugas urut berdasarkan id yang paling besar
                $sql = mysqli_query($kon, "SELECT * FROM reques_design ORDER BY id_reques_design DESC") or die(mysqli_error($kon));
                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if (mysqli_num_rows($sql) > 0) {
                    //membuat variabel $no untuk menyimpan nomor urut
                    $no = 1;
                    //melakukan perulangan while dengan dari dari query $sql
                    while ($data = mysqli_fetch_assoc($sql)) {
                        //menampilkan data perulangan
                        echo '
                <tr>
                    <td>' . $no . '</td>
                    <td>' . $data['nama_design'] . '</td>
                    <td>' . $data['jenis_design'] . '</td>
                    <td>' . $data['batas_waktu'] . '</td>
                    <td>' . $data['jumlah_design'] . '</td>
                    <td>' . $data['catatan_khusus'] . '</td>
                    <td>' . $data['waktu_reques'] . '</td>
                
                </tr>
                ';
                        $no++;
                    }
                    //jika query menghasilkan nilai 0
                } else {
                    echo '
            <tr>
                <td colspan="6">Tidak ada data.</td>
            </tr>
            ';
                }
                ?>
            <tbody>
        </table>

    </div>

</body>