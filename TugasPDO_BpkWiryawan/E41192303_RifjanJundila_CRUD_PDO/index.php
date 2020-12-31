<?php 
session_start();
require_once "config/conn.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PDO PHP || Rifjan Jundila</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-info btn-md mt-5 text-white mb-3" data-toggle="modal" data-target="#exampleModal3">Tambah</a>
                <?php
                    if (isset($_SESSION['pesan_berhasil']) && !empty($_SESSION['pesan_berhasil'])) {?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Berhasil!</strong><?=$_SESSION['pesan_berhasil']?>
                    </div>
                    <?php
                    session_unset();
                    }
                    if (isset($_SESSION['pesan_gagal']) && !empty($_SESSION['pesan_gagal'])) {?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Gagal!</strong><?=$_SESSION['pesan_gagal']?>
                    </div>
                        <?php
                        session_unset();
                    }
                    if (isset($_SESSION['edit']) && !empty($_SESSION['edit'])) {?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Warning!</strong><?=$_SESSION['edit']?>
                         </div>
                        <?php
                        session_unset();
                    }
                    if (isset($_SESSION['hapus']) && !empty($_SESSION['hapus'])) {?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Warning!</strong><?=$_SESSION['hapus']?>
                         </div>
                        <?php
                        session_unset();
                    }
                ?>
                <div class="mt-3">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat</th>
                        <th>Golongan</th>
                        <th rowspan="2">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $sql  = "SELECT m.nama_mahasiswa, m.alamat,m.id_mahasiswa, n.nama_golongan FROM tb_mahasiswa AS m INNER JOIN tb_golongan AS n ON m.id_golongan = n.id_golongan";
                        $row = $conn->prepare($sql);
                        $row->execute();
                        $hasil = $row->fetchAll();
                        $no = 1;
                        foreach ($hasil as $isi) {  
                    ?>
                        <tr>
                        <th scope="row"><?=$no++?></th>
                        <td><?=$isi['nama_mahasiswa']?></td>
                        <td><?=$isi['alamat']?></td>
                        <td><?=$isi['nama_golongan']?></td>
                        <td>
                          <a class="btn btn-warning text-white" data-toggle="modal" data-target="#exampleModal2<?=$isi['id_mahasiswa']?>"> <span class="fa fa-edit"></span></a>  |
                          <a href="control/delete.php?id=<?=$isi['id_mahasiswa']?>" onclick="return confirm('Apakah yakin data akan di hapus?')" class="btn btn-danger text-white"><span class="fa fa-trash"></span></a>    
                        </td>
                        </tr>
                        <div class="modal fade" id="exampleModal2<?=$isi['id_mahasiswa']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal3Label">Edit Data Mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php 
                                        $id = $isi['id_mahasiswa'];
                                        $sql = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$id'";
                                        $row = $conn->prepare($sql);
                                        $row->execute(array($id));
                                        $data = $row->fetch();
                                        $berhasil = "selected";
                                        $gagal = ""
                                    ?>
                                    <p><strong>Edit data : </strong><?=$data['nama_mahasiswa']?></p>
                                    <form method="POST" action="control/edit.php">
                                        <div class="form-group">
                                            <label for="formGroupExampleInput">Nama Mahasiswa</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama" name="nama" value="<?=$data['nama_mahasiswa']?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="formGroupExampleInput2">Alamat</label>
                                            <textarea class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Alamat" name="alamat" required><?=$data['alamat']?></textarea>
                                        </div>
                                        <div class="form-group">
                                        <?php $x = $data['id_golongan'];?>
                                        <label for="formGroupExampleInput2">Golongan</label>
                                        <select class="custom-select" name="golongan" required>
                                            <option value="1" <?php echo($x == '1') ? "selected" : ''?>>TIF</option>
                                            <option value="2"  <?php echo($x == '2') ? "selected" : ''?>>TKK</option>
                                            <option value="3"  <?php echo($x == '3') ? "selected" : ''?>>MIF</option>
                                            <option value="4" <?php echo($x == '4') ? "selected" : ''?>>Internasional</option>
                                        </select>
                                        </div>   
                                        <div class="form-group">
                                            <input type="text" name="id" value="<?=$data['id_golongan'];?>">
                                        </div> 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>  
                                </div>
                            </div>
                        </div>                        
                    <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    

<!-- Simpan Data -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal3Label">Tambah Mahasiswa</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="control/add.php">
            <div class="form-group">
                <label for="formGroupExampleInput">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Alamat</label>
                <textarea class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Alamat" name="alamat" required></textarea>
            </div>
            <div class="form-group">
            <label for="formGroupExampleInput2">Golongan</label>
            <select class="custom-select" name="golongan" required>
                <option value="1">TIF</option>
                <option value="2">TKK</option>
                <option value="3">MIF</option>
                <option value="4">Internasional</option>
            </select>
            </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>  
    </div>
  </div>
</div>
<!-- end SIMPAN DATA -->


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>