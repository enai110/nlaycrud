<?php
    include "../connection.php";
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $update = mysqli_query($connection, "UPDATE siswa SET  nama='$nama', kelas='$kelas', jurusan='$jurusan' WHERE id = '$id'");
    if($update){
        header('location: ../update.php');
    } else {
        echo "<script>alert('Gagal input data pendaftar')</script>";
    }