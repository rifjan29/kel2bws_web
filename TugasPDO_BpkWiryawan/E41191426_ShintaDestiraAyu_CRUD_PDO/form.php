<?php
include "database.php"; 
?>

<form method="POST" action="insert.php">
   Nama : <input type="text" name="nama"> </br>
   Alamat : <textarea name="alamat"></textarea> </br>
   <button type="submit" >Simpan</button>
</form>

<hr/>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hapus</th>
            <th>Ubah</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM person";
        $data = $db->prepare($query);
        $data->execute();

        $no = 1;
        while($person = $data->fetch(PDO::FETCH_LAZY)){
        ?>
        
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $person->nama ?></td>
            <td><?php echo $person['alamat'] ?></td>
            <td><a href="delete.php?xyz=<?php echo $person->id ?>">Hapus</a></td>
            <td><a href="from-ubah.php?xyz=<?php echo $person->id ?>">Ubah</a></td>
        </tr>

        <?php
            $no++;
        } 
        ?>
    </tbody>
</table>