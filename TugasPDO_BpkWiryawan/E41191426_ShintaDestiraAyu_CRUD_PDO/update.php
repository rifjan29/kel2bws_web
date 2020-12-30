<?php
include "database.php";

$query = "UPDATE person SET nama='$_POST[nama]', alamat='$_POST[alamat]' WHERE id='$_POST[id]'";
$data = $db->prepare($query);
$data->execute();

header("location: form.php");