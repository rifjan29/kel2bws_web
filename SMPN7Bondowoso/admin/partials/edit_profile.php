      
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
                    </div>
                    <div class="modal-body">
              
                        <form class="cmxform form-horizontal style-form" id="commentForm" method="get" action="">
                            <div class="form-group">
                                <label for="picture_employees" class="control-label col-md-4">Foto 4x6</label> 
                                <div class="col-md-8 ">
                                    <input type="file" name="foto" required="required" id="picture_employees" />
                                    <div class="picture_employees">
                                        <span class="label label-info">NOTE!</span>
                                        <span>
                                            <strong style="color:red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</strong>
                                        </span>
                                    </div>
                                </div>    
                            </div>
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-4">Username</label>
                                <div class="col-lg-8">
                                  <input class=" form-control" id="title" name="title" minlength="2" type="text" required />
                                </div>
                            </div>       
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-4">Nama Lengkap</label>
                                <div class="col-lg-8">
                                  <input class=" form-control" id="title" name="title" minlength="2" type="text" required />
                                </div>
                            </div> 
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-4">Password Lama<strong> (Wajib)</strong></label>
                                <div class="col-lg-8">
                                  <input class=" form-control" id="title" name="title" minlength="2" type="password" placeholder="Masukkan Password Baru" required />
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-4">Password Baru<strong> (Wajib)</strong></label>
                                <div class="col-lg-8">
                                  <input class=" form-control" id="title" name="title" minlength="2" type="password" placeholder="Masukkan Password Baru" required />
                                </div>
                            </div>                                                                
                    </div>
                    <div class="modal-footer">
                      <button type="reset" value="reset" class="btn btn-default">Batal</button>
                      <button type="button" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                  
                  </div>
                </div>
            </div>
