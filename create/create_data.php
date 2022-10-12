<?php
    include "../connection.php";

    //input random
    $id = rand(11,99);
    $id_siswa = rand(11,99);

    //tidak random
    $nama = htmlspecialchars($_POST['nama']);
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $insert = mysqli_query($connection, "INSERT INTO siswa SET id='$id', id_siswa='$id_siswa',
    nama='$nama', kelas='$kelas', jurusan='$jurusan'");

    if($insert){
        $pesan = 'data berhasil masuk';
        echo "<script> alert('$pesan')
            window.location.replace('../index.php');
        </script>";
    } else {
        echo"gagal";
    }
?>

