<?php 
    include "../../config/conn.php";

    $title = stripslashes(strip_tags(htmlspecialchars($_POST['judul_informasi'] ,ENT_QUOTES)));
    $content = $_POST['isi_informasi'];
    // membuat slug url 
    $slug = str_replace(" ", "-", $title);
    // selesai
    $kategori = $_POST['kategori_informasi'];

   
    $picture = $_FILES['foto']['name'];
    $aid = $_POST['id'];

         
    if ($picture != "" && $kategori != "--pilih--") {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.',$picture);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];
        $acak = rand(1,999);
        $name_picture = $acak.'-'.$picture;
        
        if (in_array($ekstensi,$ekstensi_diperbolehkan)==true) {
            move_uploaded_file($file_tmp,'../../img_uploaded/informasi/'.$name_picture);
            $sql = "INSERT INTO `news` (`id`, `news_tittle`, `news_content`, `news_picture`, `slug`, `news_category`, `news_date`, `aid`) VALUES (NULL, '$title', '$content', '$name_picture', '$slug', '$kategori', NOW(), '$aid');";
            $result = mysqli_query($db, $sql);
            if (!$result) {
                session_start();
                $_SESSION['failed_message'] = "Data Gagal Tersimpan !";
                header('Location: ../../public/informasi/add-data.php');
                exit();
                die ("Query gagal dijalankan ".mysqli_errno($db));
            } else {
                session_start();
                $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
                header('Location: ../../public/informasi/');
                exit();    
            }
            
        }else{
            session_start();
            $_SESSION['failed_message'] = "Ekstensi Gambar Tidak Tersimpan !";
            header('Location: ../../public/informasi/add-data.php');
            exit();

        }
        

    } else {
        session_start();
        $_SESSION['kategori_message'] = "Kategori Terdapat Kesalahan!";
        header('Location: ../../public/informasi/add-data.php');
        exit();
    }


        

?>