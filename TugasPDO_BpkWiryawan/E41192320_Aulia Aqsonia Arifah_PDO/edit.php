<?php
include 'database.php';
$db = new DB();
$userData = $db->getRows('tb_user',array('where'=>array('id'=>$_GET['id']),'return_type'=>'single'));
if(!empty($userData)){
?>
<div class="row">
    <div class="panel panel-default user-add-edit">
        <div class="panel-heading">Edit Data User <a href="index.php" class="glyphicon glyphicon-arrow-left"></a></div>
        <div class="panel-body">
            <form method="post" action="aksi.php" class="form" id="userForm">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $userData['nama']; ?>"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $userData['email']; ?>"/>
                </div>
                <div class="form-group">
                    <label>hp</label>
                    <input type="text" class="form-control" name="hp" value="<?php echo $userData['hp']; ?>"/>
                </div>
                <input type="hidden" name="id" value="<?php echo $userData['id']; ?>"/>
                <input type="hidden" name="action_type" value="edit"/>
                <input type="submit" class="form-control btn-default" name="submit" value="Update User"/>
            </form>
        </div>
    </div>
</div>
<?php } ?>