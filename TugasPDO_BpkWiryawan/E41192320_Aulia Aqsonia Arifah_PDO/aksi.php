<?php
session_start();
include 'database.php';
$db = new DB();
$tblName = 'tb_user';
if(isset($_REQUEST['action_type']) && !empty($_REQUEST['action_type'])){
    if($_REQUEST['action_type'] == 'add'){
        $userData = array(
            'nama' => $_POST['nama'],
            'email' => $_POST['email'],
            'hp' => $_POST['hp']
        );
        $insert = $db->insert($tblName,$userData);
        $statusMsg = $insert?'Data User Berhasil Disimpan.':'Ada Kesalahan Silahkan Periksa Lagi.';
        $_SESSION['statusMsg'] = $statusMsg;
        header("Location:index.php");
    }elseif($_REQUEST['action_type'] == 'edit'){
        if(!empty($_POST['id'])){
            $userData = array(
                'nama' => $_POST['nama'],
                'email' => $_POST['email'],
                'hp' => $_POST['hp']
            );
            $condition = array('id' => $_POST['id']);
            $update = $db->update($tblName,$userData,$condition);
            $statusMsg = $update?'Data User Berhasil diUpdate.':'Ada Kesalahan Silahkan Periksa Lagi.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:index.php");
        }
    }elseif($_REQUEST['action_type'] == 'delete'){
        if(!empty($_GET['id'])){
            $condition = array('id' => $_GET['id']);
            $delete = $db->delete($tblName,$condition);
            $statusMsg = $delete?'Data User Berhasil Dihapus.':'Ada Kesalahan Silahkan Periksa Lagi.';
            $_SESSION['statusMsg'] = $statusMsg;
            header("Location:index.php");
        }
    }
}