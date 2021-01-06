@@ -0,0 +1,37 @@

            <div class="modal fade" id="resetPassword<?=$id_admin;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Reset Password</h4>
                    </div>
                    <div class="modal-body">                     
                        <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="<?=$_ENV['base_url']?>controller/reset-password.php">   
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-4">Password Lama</label>
                                <div class="col-lg-8">
                                  <input class=" form-control" id="password_lama" name="password_lama" type="password"/>
                                </div>
                            </div> 
                            <div class="form-group ">
                                <label for="title" class="control-label col-lg-4">Password Baru</label>
                                <div class="col-lg-8">
                                  <input class=" form-control" required id="password_baru" name="password_baru"  type="password"/>
                                  <input type="checkbox" onclick="myFunction()"> Lihat Password
                                </div>
                            </div>                               
                            <input type="text" hidden name="id" id="" value="<?=$id_admin;?>">                                                          
                        </div>
                        <div class="modal-footer">
                         <div class="form-group"> 
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-default">Batal</button>
                          <button type="submit" id="simpan_profile" class="btn btn-theme">Simpan</button>
                        </div>
                        </div>
                    </form>
                  </div>

                </div>
            </div>