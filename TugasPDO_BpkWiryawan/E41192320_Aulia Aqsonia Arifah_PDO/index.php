<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php
session_start();
if(!empty($_SESSION['statusMsg'])){
    echo '<p>'.$_SESSION['statusMsg'].'</p>';
    unset($_SESSION['statusMsg']);
}
?>
<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">Manajemen User <a href="add.php" class="glyphicon glyphicon-plus"></a></div>
        <div class="panel-body">
        
        <table class="table">
            <tr>
                <th witdh="10%">#</th>
                <th witdh="25%">Nama</th>
                <th witdh="10%">Email</th>
                <th witdh="20%">Handphone</th>
                <th witdh="25%">Created</th>
                <th witdh="10%"></th>
            </tr>
            <?php
            include 'database.php';
            $db = new DB();
            $users = $db->getRows('tb_user',array('order_by'=>'id DESC'));
            if(!empty($users)){ $count = 0; foreach($users as $user){ $count++;?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $user['nama']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['hp']; ?></td>
                <td><?php echo $user['created']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-edit"></a>
                    <a href="aksi.php?action_type=delete&id=<?php echo $user['id']; ?>" class="glyphicon glyphicon-trash" onclick="return confirm('Anda Yakin?');"></a>
                </td>
            </tr>
            <?php } }else{ ?>
            <tr><td colspan="4">Tidak Ada Data User......</td>
            <?php } ?>
        </table>
        </div>
        
    </div>
</div>