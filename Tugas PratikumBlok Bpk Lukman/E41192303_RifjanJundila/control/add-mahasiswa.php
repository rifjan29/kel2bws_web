<?php
    include 'connect.php';
    session_start();
    if (isset($_POST['submit'])) {
        $nim_mhs = $_POST['nim'];
        $nm = $_POST['nama'];
        $tanggal = $_POST['tanggal_lahir'];
        $agm = $_POST['agama'];
        $almt = $_POST['alamat'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $sql = mysqli_query($connect, "INSERT INTO `tb_mahasiswa`(`nim`, `nama_mahasiswa`, `tgl_lahir`, `agama`, `alamat`, `username`, `pass`) VALUES('$nim_mhs','$nm','$tanggal','$agm','$almt','$user','$pass')")or die(mysqli_error($connect)); 
            
            if ($sql) {
                $_SESSION['pesan-berhasil'] = "Data Berhasil Ditambahkan !";
                
            }else{
                $_SESSION['pesan-salah'] = "Data Ada Tidak Boleh Kosong !";
               
            }

                header('Location:../mahasiswa.php'); 
    }else{
    
    }
    if (isset($_GET['delete'])) {
        $nim = $_GET['delete'];
        $sql = mysqli_query($connect, "DELETE FROM tb_mahasiswa WHERE nim = '$nim'") or die(mysqli_error($connect)); 
       if ($sql) {
        header('Location:../mahasiswa.php');
        $_SESSION['pesan-dihapus'] = "Data Berhasil Dihapus !";
       }     
    }
    if (isset($_POST['edit'])) {
        $nim = $_POST['edit'];
       
        $nm = $_POST['nama'];
        $tanggal = $_POST['tanggal_lahir'];
        $agm = $_POST['agama'];
        $almt = $_POST['alamat'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $sql = mysqli_query($connect, "UPDATE tb_mahasiswa SET nama_mahasiswa='$nm',tanggal_lahir='$tanggal', alamat='$almt', username='$user', pass='$pass',agama='$agm' WHERE nim='$nim'");
       if ($sql) {
        header('Location:../mahasiswa.php');
       
       }     
    }

?>