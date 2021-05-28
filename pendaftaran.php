<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Form Pendaftaran Anggota</h2>
        <form action="simpan-pendaftaran.php" method="post">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
            </div>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan email" />
            </div>
            <div class="form-group">
                <label>Pilih Level:</label>
                <select class="form-control" name="level" id="level">
                    <option value="">Pilih Hak Akses</option>
                    <option value="1">Admin</option>
                    <option value="2">Desainer</option>
                    <option value="3">Penjual</option>
                </select>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>

</html>