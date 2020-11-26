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
                <p class="lead">Menampilkan data dari database</p>
            </div>
        </div>
   

    <?php 
        session_start();
        if (isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            if ($pesan == "input") {
                ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Berhasil!</strong> data berhasil ditambahkan ke database 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                session_destroy();
                session_unset();
            }elseif($pesan == "update"){
                ?>
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Data Dirubah!</strong> data berhasil diganti 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                session_unset();
                session_destroy();
            }elseif($pesan == "hapus"){
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Data Dihapus!</strong> data berhasil dihapus selamanya
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
            }else{

            }
        }else{

        }
    ?>
    
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                <a class="btn btn-outline-primary mb-3" href="tambah.php" role="button">Tambah Data</a>
                    <h5 class="car-title">Data User</h5>
                    <hr>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        
                        <?php
                            include "config/conn.php";

                            $sql = mysqli_query($conn,"SELECT * FROM user");
                            $no = 1;
                            while ($data = mysqli_fetch_array($sql)) {
                                ?>
                                     <tbody>
                                        <tr>
                                        <th scope="row"><?=$no++ ?></th>
                                        <td><?=$data['nama']?></td>
                                        <td><?=$data['alamat']?></td>
                                        <td><?=$data['pekerjaan']?></td>
                                        <td> <a class="btn btn-outline-warning edit" href="edit.php?id=<?=$data['id'];?>" role="button">Edit</a> | 
                                        <a class="btn btn-outline-danger hapus" href="config/hapus.php?id=<?=$data['id'];?>" role="button">Hapus</a>
                                        </td>
                                        </tr>
                                    </tbody>
                                <?php
                            }
                        ?>
                    </table>
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