<div class="row">
    <div class="panel panel-default user-add-edit">
        <div class="panel-heading">Tambah Data User <a href="index.php" class="glyphicon glyphicon-arrow-left"></a></div>
        <div class="panel-body">
            <form method="post" action="aksi.php" class="form" id="userForm">
                <div class="form-group">
                    <label>nama</label>
                    <input type="text" class="form-control" name="nama"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label>hp</label>
                    <input type="text" class="form-control" name="hp"/>
                </div>
                <input type="hidden" name="action_type" value="add"/>
                <input type="submit" class="form-control btn-default" name="submit" value="Add User"/>
            </form>
        </div>
    </div>
</div>