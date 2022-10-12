<?php
    include "../connection.php";

    if(isset($_GET['keyword'])) {
        $cari = $_GET['keyword'];
        $delete = mysqli_query($connection ,"DELETE FROM siswa WHERE id='$cari'");
        if ($delete) {
            header("location: ../delete.php");
        }
        else {
            echo "<script>alert('Gagal')</script>";
        }
    }
   
?>