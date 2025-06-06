<?php
include("koneksi.php"); 
//melakukan input tampil data ke halaman tblkendaraan.php
if (isset($_POST['simpan'])) {
    $merk=mysqli_real_escape_string($koneksi, $_POST['merk']);
    $foto=mysqli_real_escape_string($koneksi, $_POST['foto']);
    $no_polisi=mysqli_real_escape_string($koneksi, $_POST['no_polisi']);
    $warna=mysqli_real_escape_string($koneksi, $_POST['warna']);
    $tahun=mysqli_real_escape_string($koneksi, $_POST['tahun']);
    $keterangan=mysqli_real_escape_string($koneksi, $_POST['keterangan']);
    $status_kendaraan=mysqli_real_escape_string($koneksi, $_POST['status_kendaraan']);
    $tarif_kendaraan=mysqli_real_escape_string($koneksi, $_POST['tarif_kendaraan']);
    $harga=mysqli_real_escape_string($koneksi, $_POST['harga']);
    $denda=mysqli_real_escape_string($koneksi, $_POST['denda']);
    $simpan=mysql_query($koneksi,"INSERT INTO `tblkendaraan`(`id_kendaraan`, `no_polisi`, `merk`, `warna`, `tahun`, `tarif_kendaraan`, `keterangan`, `status_kendaraan`, `foto`, `harga`, `denda`) VALUES ('id_kendaraan','no_polisi','merk','warna','tahun','tarif_kendaraan','keterangan','status_kendaraan','foto','harga','denda')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add Vehicle</title>
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/brands.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/regular.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/regular.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/solid.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/solid.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/svg-with-js.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/svg-with-js.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/v4-shims.css">
    <link rel="stylesheet" type="text/css" href="vendor/fontawesome-free/css/v4-shims.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Numito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <!--CSS Admins-->
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.min.css">
    <!--CSS Bootstrap and Signin as well as also Style-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!--Custom Style Bootstrap-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap-reboot.min.css.map">
    <!-- Custom Style DataTables-->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/dataTables.bootstrap4.css">
</head>
<body class="page-top">
    <div class="container">
        <div class="card">
            <div class="card-header text-gray-900">
                <h1 class="h1 mb-5 font-weight-bold text-gray-900">Tambah Data Kendaraan</h1>
                    <div class="float-right">
                        <a href="daftarkendaraan.php" class="btn btn-secondary" onClick="return confirm('Are you sure want to back!')"><i class="fa fa-reply"></i>&nbsp;Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="prosestambahkendaraan.php" method="post" encytype="multipart/form-data">
                    <form action="upload.php" method="post" encytype="multipart/form-data">
                    <div class="row">
                            <div class="form-group">
                                <label for="merk">Merk</label>
                                <input type="text" class="form-control" name="merk" value="" placeholder="Enter Brand" required>
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" accept="image/*" class="form-control" name="foto" value="" placeholder="Enter Photos" required>
                            </div>
                            <div class="form-group">
                                <label for="no_polisi">No. Polisi</label>
                                <input type="text" class="form-control" name="no_polisi" value="" placeholder="Enter Police Number" required>
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna</label>
                                <input type="text" class="form-control" name="warna" value="" placeholder="Enter Color" required>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input type="date" class="form-control" name="tahun" value="" placeholder="Enter Year" required>
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" class="form-control" id="" placeholder="Enter Information" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="status_kendaraan">Status Kendaraan</label>
                                <select class="form-control btn-block" name="status" required>
                                    <option value="" disabled selected>Pilih Status</option>
                                    <option>Tersedia</option>
                                    <option>Tidak Tersedia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tarif_kendaraan">Tarif Kendaraan</label>_
                                <input type="number" class="form-control" name="tarifkendaraan" value="" placeholder="Enter Rates Vehcle" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="number" class="form-control" name="harga" value="" placeholder="Enter Price" required>
                            </div>
                            <div class="form-group">
                                <label for="denda">Denda</label>
                                <input type="number" class="form-control" name="denda" value="" placeholder="Enter Fine" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-block" onClick="return confirm('This data have been added!')"><i class="fa fa-plus"></i>&nbsp;Save</button>
                            <button type="reset" class="btn btn-danger btn-block" name="cancel" onClick="return confirm('This data have been already canceled!')"><i class="fa fa-times"></i>&nbsp;Cancel</button>
                            </div>
                        </div>
                    </textarea>
                </form>
            </form>
        </div>
    </div>
</div>
    
<?php include("footer.php"); ?>
    
<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery/jquery.min.map"></script>
<script src="vendor/jquery/jquery.slim.js"></script>
<script src="vendor/jquery/jquery.slim.min.js"></script>
<script src="vendor/jquery/jquery.slim.min.map"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.compatibility.js"></script>
<script src="vendor/js/bootstrap.js"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="vendor/js/bootstrap.min.js.map"></script>
<script src="vendor/js/bootstrap.bundle.min.js.map"></script>
<script src="vendor/js/bootstrap.bundle.min.js"></script>
<script src="vendor/js/bootstrap.bundle.js.map"></script>
<script src="js/sb-admin-2.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/js/bootstrap.bundle.js"></script>
<script src="vendor/js/bootstrap.bundle.js.map"></script>
<script src="vendor/js/bootstrap.bundle.min.js"></script>
<script src="vendor/js/bootstrap.bundle.min.js.map"></script>
<script src="vendor/js/bootstrap.js"></script>
<script src="vendor/js/bootstrap.js.map"></script>
<script src="vendor/js/bootstrap.min.js"></script>
<script src="vendor/js/bootstrap.min.js.map"></script>
<script src="vendor/fontawesome-free/js/all.js"></script>
<script src="vendor/fontawesome-free/js/all.min.js"></script>
<script src="vendor/fontawesome-free/js/brands.js"></script>
<script src="vendor/fontawesome-free/js/brands.min.js"></script>
<script src="vendor/fontawesome-free/js/conflict-detection.js"></script>
<script src="vendor/fontawesome-free/js/conflict-detection.min.js"></script>
<script src="vendor/fontawesome-free/js/fontawesome.js"></script>
<script src="vendor/fontawesome-free/js/fontawesome.min.js"></script>
<script src="vendor/fontawesome-free/js/regular.js"></script>
<script src="vendor/fontawesome-free/js/regular.min.js"></script>
<script src="vendor/fontawesome-free/js/solid.js"></script>
<script src="vendor/fontawesome-free/js/solid.min.js"></script>
<script src="vendor/fontawesome-free/js/v4-shims.js"></script>
<script src="vendor/fontawesome-free/js/v4-shims.min.js"></script>
</body>
</html>