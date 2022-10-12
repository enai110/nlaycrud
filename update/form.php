<?php
    include "../connection.php";
    $id = $_GET['id'];
    $select = mysqli_query($connection, "SELECT * FROM siswa WHERE id='$id'");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <h2>Edit Data</h2>
        <?php
        while ($data = mysqli_fetch_array($select)){
            ?>
    <form action="update_data.php" value="id"  method="post">
    <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Id</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>" readonly>
            </div>
        </div>
    <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" >
            </div>
          </div>
            <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Kelas</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'] ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Jurusan</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="jurusan" value="<?php echo $data['jurusan'] ?>">
            </div>
          </div>
          <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
            <button type="submit" class="col-sm-3 col-form-label">Kirim</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="../update.php" name="proses" role="button">Cancel</a>
            </div>
          </div>
        </form>
    </div>
    <?php break;
    }
    ?>
</body>
</html>