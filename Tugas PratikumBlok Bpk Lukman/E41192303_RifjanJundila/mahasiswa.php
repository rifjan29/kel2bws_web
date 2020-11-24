<?php 
  include './template/head.php';
  include './template/sidebar.php';
 
?>

      <div class="container-fluid">
        <nav aria-label="breadcrumb ">
              <ol class="breadcrumb mt-3">
                  <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
              </ol>
        </nav>
              <div class="card">
                <div class="card-body">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data 
                  </button>
                  <?php 
                    session_start();
                    if(isset($_SESSION['pesan-salah'])) {
                      ?>
                         <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong><?=$_SESSION['pesan-salah'];?></strong> Data tidak bisa ditambahkan
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      <?php
                      session_unset();
                      session_destroy();
                    }else if(isset($_SESSION['pesan-berhasil'])){
                      ?>
                       <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong><?=$_SESSION['pesan-berhasil'];?></strong> Berhasil Menambahkan data
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                 <?php
                   session_unset();
                   session_destroy();
                  }else if(isset($_SESSION['pesan-dihapus'])){
                    ?>
                     <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><?=$_SESSION['pesan-dihapus'];?></strong> Berhasil Menghapus data
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                  <?php
                    session_unset();
                    session_destroy();
                  }
                  
                  ?>
                    <div class="row">
                      <div class="col-12">
                      <table class="table table-bordered" id="example">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIM</th>
                              <th>Nama Anda</th>
                              <th>Tanggal Lahir</th>
                              <th>Agama</th>
                              <th>Alamat</th>
                              
                              <th>Aksi</th>
                              <th style="display:none;"></th>
                            </tr>
                          </thead>
                          <tbody>
                        <?php
                          include 'control/connect.php';
                          $no = 1;
                          $data = mysqli_query($connect,"SELECT * FROM tb_mahasiswa ORDER BY nim DESC");
                          while ($i = mysqli_fetch_array($data)) {
                            ?>
                        
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $i['nim']; ?></td>
                              <td><?php echo $i['nama_mahasiswa']; ?></td>
                              <td><?php echo $i['tgl_lahir']; ?></td>
                              <td><?php echo $i['agama']; ?></td>
                              <td><?php echo $i['alamat']; ?></td>
                              <td style="display:none;"><?php echo $i['password']; ?></td>
                              <td>
                              <a href="control/add-mahasiswa.php?edit=<?php echo $i['nim'];?>" type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal<?php echo $i['nim']; ?>">Edit</a> || 
                                <a href="control/add-mahasiswa.php?delete=<?php echo $i['nim'];?>" class="btn btn-danger">Hapus</a>
                            </tr>
                            <div class="modal fade" id="myModal<?php echo $i['nim']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Data Mahasiswa</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="control/add-mahasiswa.php" method="post"> 
                            <?php
                              include 'control/connect.php';
                              $nim = $i['nim']; 
                              $query_edit = mysqli_query($connect, "SELECT * FROM tb_mahasiswa WHERE nim='$nim'");
                              while ($row = mysqli_fetch_array($query_edit)) {  
                              ?>
                            <div class="modal-body">
                                <div class="form-group">
                                  <label for="nama">NIM</label>
                                  <input type="text" id="nim" name="nim" value="<?php echo $row['nim']; ?>" class="form-control" max="5">
                                </div>
                                <div class="form-group">
                                  <label for="nama">Nama Lengkap</label>
                                  <input type="text" id="nama" name="nama" value="<?php echo $row['nama_mahasiswa']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" id="username" name="username" value="<?php echo $row['username']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="text" id="password" name="password" value="<?php echo $row['pass']; ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="umur">Tanggal Lahir</label>
                                  <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="<?php echo $row['tgl_lahir']; ?>" >
                                </div>
                              
                                <div class="form-group">
                                  <label for="pekerjaan">Agama</label>
                                  <select id="agama" class="form-control" name="agama" >
                                  
                                    <?php 
                                      if ($row['agama'] == 'islam') {
                                        echo "<option value='islam' selected>Islam</option>";
                                      }elseif($row['agama'] == 'Kristen'){
                                        echo "<option value='Kristen' selected>Kristen</option>";
                                      }elseif($row['agama'] == 'Katolik'){
                                        echo "<option value='Katolik'>Katolik</option";
                                      }elseif($row['agama'] == 'Hindu'){
                                        echo " <option value='Hindu'>Hindu</option>";
                                      }elseif($row['agama'] == 'Budha'){
                                        echo " <option value='Budha'>Budha</option>";
                                      }else{
                                        echo "<option value='pilih'  disabled>- Pilih Agama</option>";
                                      }
                                      
                                    ?>
                                  </select>
                                </div>                             
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <input type="text" id="nama" name="alamat" value="<?php echo $row['alamat']; ?>" class="form-control">
                                </div>
                             
          
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success" name="edit">Save</button>
                            </div>
                          </div>
                          <?php 
                            }
                            ?>  
                          </form>
                        </div>
                      </div>  
                          <?php
                          }
                        ?>
                         </tbody>
                        </table>
                      </div>
                    </div>
                </div>
              </div>
              
                   <!-- Modal -->
                   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="control/add-mahasiswa.php" method="post"> 
                            <div class="modal-body">
                                <div class="form-group">
                                  <label for="nama">NIM</label>
                                  <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM anda"  max="5">
                                </div>
                                <div class="form-group">
                                  <label for="nama">Nama Lengkap</label>
                                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" >
                                </div>
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username anda" >
                                </div>
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password anda" >
                                </div>
                                <div class="form-group">
                                  <label for="umur">Tanggal Lahir</label>
                                  <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="Contoh form angka ..." >
                                </div>
                              
                                <div class="form-group">
                                  <label for="pekerjaan">Agama</label>
                                  <select id="agama" class="form-control" name="agama">
                                    <option value="pilih" selected disabled>- Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                  </select>
                                </div>                             
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <textarea class="form-control" id="alamat" name="alamat"rows="3" placeholder="Alamat Anda" required></textarea>
                                </div>
                             
          
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success" name="submit">Save</button>
                            </div>
                          </div>
                          </form>
                        </div>
                    </div>  
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form action="control/add-mahasiswa.php" method="post"> 
                            <div class="modal-body">
                                <div class="form-group">
                                  <label for="nama">NIM</label>
                                  <input type="text" id="nim" name="nim" class="form-control" placeholder="Masukkan NIM anda"  max="5">
                                </div>
                                <div class="form-group">
                                  <label for="nama">Nama Lengkap</label>
                                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" >
                                </div>
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan Username anda" >
                                </div>
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password anda" >
                                </div>
                                <div class="form-group">
                                  <label for="umur">Tanggal Lahir</label>
                                  <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" placeholder="Contoh form angka ..." >
                                </div>
                              
                                <div class="form-group">
                                  <label for="pekerjaan">Agama</label>
                                  <select id="agama" class="form-control" name="agama">
                                    <option value="pilih" selected disabled>- Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                  </select>
                                </div>                             
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <textarea class="form-control" id="alamat" name="alamat"rows="3" placeholder="Alamat Anda" required></textarea>
                                </div>
                             
          
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success" name="submit">Save</button>
                            </div>
                          </div>
                          </form>
                        </div>
                      </div>  
                     
              
      </div>
      
    <!-- /#page-content-wrapper -->
<?php 
  include './template/footer.php';
?>