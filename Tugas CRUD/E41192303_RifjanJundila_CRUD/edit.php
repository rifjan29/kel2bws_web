<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan data dari database</title>
 
    <!-- file css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <!-- awal container -->
    <div class="container">
        <div class="jumbotron jumbotron-fluid mt-3">
            <div class="container">
                <h1 class="Display-4">Membuat CRUD dengan PHP dan MySQL</h1>
                <hr>
                <p class="lead">Merubah data dari database</p>
            </div>
        </div>
    
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-outline-primary mb-3" href="index.php" role="button">Liat Data</a>
                    <hr>
                    <?php 
                        include "config/conn.php";

                        $id = $_GET['id'];
                        $sql = mysqli_query($conn,"SELECT * FROM user WHERE id = '$id'");
                        
                        while ($data = mysqli_fetch_array($sql)) {
                            ?>
                            <form action="config/edit-data.php" method="POST">
                                 <div class="form-group">
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?=$data['id'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Masukkan Nama</label>
                                    <input type="text" class="form-control" id="nama" value="<?=$data['nama'];?>" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Masukkan Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$data['alamat'];?>" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Masukkan Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" value="<?=$data['pekerjaan'];?>" name="pekerjaan" required>
                                </div>
                                <input type="submit" value="Simpan" class="btn btn-success">
                            </form>
                            <?php
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- akhir container -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>