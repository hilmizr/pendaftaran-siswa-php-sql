<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet'>
</head>

<body class="fixed">

    <div class="merged">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container" id="navbar-content">
            <a class="navbar-brand" href="index.php">PSB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="form-daftar.php">Daftar Baru</a>
                    <a class="nav-item nav-link active" href="list-siswa.php">Pendaftar</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card border-0 shadow" id="frm-card">
            <div class="card-body p-5">
                <h1 class="mb-4 px-md-5 mx-auto" id="frm-daftar-title">Formulir <span>Edit Siswa</span></h1>
                <form action="proses-edit.php" method="POST" id="frm-daftar">
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
                    <div class="mb-3 row">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $siswa['nama'] ?>"/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $siswa['alamat'] ?></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin1" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>>
                                <label class="form-check-label" for="kelamin1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin2" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>>
                                <label class="form-check-label" for="kelamin2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="agama" class="col-md-2 col-form-label">Agama</label>
                        <?php $agama = $siswa['agama']; ?>
                        <div class="col-md-10"> 
                            <select class="form-select selectpicker" name="agama" id="agama-select">
                                <option <?php echo ($agama == 'Islam') ? "selected": "" ?> class="agama">Islam</option>
                                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?> class="agama">Kristen</option>
                                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?> class="agama">Hindu</option>
                                <option <?php echo ($agama == 'Budha') ? "selected": "" ?> class="agama">Budha</option>
                                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?> class="agama">Atheis</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sekolah_asal" class="col-md-2 col-form-label">Sekolah Asal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $siswa['sekolah_asal'] ?>">
                        </div>
                    </div>
                    <input type="submit" value="Simpan" name="simpan" class="btn fw-semibold" id="daftar-btn-2"></input>
                </form>
            </div>
        </div>
        </main>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>