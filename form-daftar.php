<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900' rel='stylesheet'>
</head>

<body>
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
                    <a class="nav-item nav-link active" href="form-daftar.php">Daftar Baru</a>
                    <a class="nav-item nav-link" href="list-siswa.php">Pendaftar</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="card border-0 shadow" id="frm-card">
            <div class="card-body p-5">
                <h1 class="mb-4 px-md-5" id="frm-daftar-title">Formulir <span>Pendaftaran</span></h1>
                <form action="proses-pendaftaran.php" method="POST" id="frm-daftar">
                    <div class="mb-3 row">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"/>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-10 d-flex align-items-center">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin1" value="Laki-laki">
                                <label class="form-check-label" for="kelamin1">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="kelamin2" value="Perempuan">
                                <label class="form-check-label" for="kelamin2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 row">
                        <label for="agama" class="col-md-2 col-form-label">Agama</label>
                        <div class="col-md-10">
                            <select class="form-select" name="agama">
                                <option selected>-</option>
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                                <option>Atheis</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sekolah_asal" class="col-md-2 col-form-label">Sekolah Asal</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="Nama Sekolah">
                        </div>
                    </div>
                    <input type="submit" name="daftar" value="Daftar" class="btn fw-semibold" id="daftar-btn-2"></input>
                </form>
            </div>
        </div>
    </main>

    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>