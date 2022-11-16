<?php

include("config.php");

// Mengecek apakah tombol daftar sudah diklik
if(isset($_POST['daftar'])){

    // Mengambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // Membuat query untuk menambahkan data
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // Mengecek apakah query INSERT berhasil
    if( $query ) {
        // Jika berhasil arahkan ke index.php dengan status sukses
        header('Location: index.php?status=sukses');
    } else {
        // Jika tidak arahkan ke index.php dengan status gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses Dilarang...");
}

?>