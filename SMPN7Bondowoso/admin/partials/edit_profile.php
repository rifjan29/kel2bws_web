      
           <div class="modal fade" id="myModal<?=$id_admin;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
                    </div>
                    <div class="modal-body">
                    <?php 

                      $sql = mysqli_query($db, "SELECT * FROM admin WHERE id =1");

                      while ($data =mysqli_fetch_assoc($sql)) {
                     
                    ?>  
                        <div class="col-lg-12 ">
                          <img src="<?=$_ENV['base_url']?>img_uploaded/<?=$data['picture_admin']?>" style="margin-bottom: 10px;" class="img-thumbnail" alt="asdaf">
                        </div>
                        <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="<?=$_ENV['base_url']?>controller/edit_akun.php">
                            <div class="form-group">
                                <label for="picture_employees" class="control-label col-md-4">Foto 4x6</label> 
                                <div class="col-md-8 ">
                                  <input type="file" name="gambar_admin" id="gambar_admin"/>
                                    <div class="picture_employees">
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                            <strong style="color:red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</strong>
                                        </span>
                                    </div>
                                </div>    
                            </div>     
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-4">Nama Lengkap</label>
                                <div class="col-lg-8">
                                <input class=" form-control" id="nama" name="nama" minlength="2" type="text"  value="<?=$data['name_admin']?>" />
                                </div>
                            </div>                                                               
                            <input type="text" hidden name="id" id="" value="<?=$data['id']?>">  
                            <input type="text" hidden name="gambar_profile" id="" value="<?=$data['picture_admin']?>">                                                            
                        </div>
                        <div class="modal-footer">
                         <div class="form-group"> 
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-default">Batal</button>
                          <button type="submit" id="simpan_profile" class="btn btn-primary">Simpan</button>
                        </div>
                        </div>
                    </form>
                  
                  </div>
                <?php }?>
                </div>
            </div>
