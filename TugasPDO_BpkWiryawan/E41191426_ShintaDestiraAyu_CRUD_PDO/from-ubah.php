<?php
include "database.php";

$query = "SELECT * FROM person WHERE id='$_GET[xyz]'";
$data = $db->prepare($query);
$data->execute();

$person = $data->fetch(PDO::FETCH_LAZY);
?>

<h3>FROM UBAH</h3>
<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $person->id ?>"/>
   Nama : <input type="text" name="nama" value="<?php echo $person->nama ?>"> </br>
   Alamat : <textarea name="alamat"><?php echo $person->alamat ?></textarea> </br>
   <button type="submit" >Simpan</button>
</form>