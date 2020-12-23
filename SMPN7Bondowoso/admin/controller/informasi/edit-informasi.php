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

    $id = $_POST['id_news'];
    $date = date('Y-m-d');    
    if ($picture != "" ) {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.',$picture);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];
        $acak = rand(1,999);
        $name_picture = $acak.'-'.$picture;
        
        if (in_array($ekstensi,$ekstensi_diperbolehkan)==true) {
            if(move_uploaded_file($file_tmp,'../../img_uploaded/informasi/'.$name_picture)){
                $query  = "UPDATE `news` SET `news_tittle` = '$title',`news_content` = '$content',`news_picture` = '$name_picture', `slug` = '$slug', `news_category` = '$kategori', news_date='$date' ,`aid` = '$aid' ";
                $query .= "WHERE `news`.`id` = '$id'";
                $result = mysqli_query($db, $query) or die (mysqli_error($db));
    
                if (!$result) {
                    session_start();
                    $_SESSION['failed_message'] = "Data Gagal Tersimpan !";
                    header("Location: ../../public/informasi/edit-data.php?id=$id");
                    exit();
                } else {
                    session_start();
                    $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
                    header('Location: ../../public/informasi/');
                    exit();
                }
            }else{
                session_start();
                $_SESSION['failed_message'] = "Gagal!";
                header("Location: ../../public/informasi/edit-data.php?id=$id");
                exit();
            }
        }else{
            session_start();
            $_SESSION['failed_message'] = "Ekstensi dilarang!";
            header("Location: ../../public/informasi/edit-data.php?id=$id");
            exit();
        }

    } else {
        if ($kategori !="pilih") {
            $sql  = mysqli_query($db,"UPDATE `news` SET `news_tittle` = '$title',`news_content` = '$content', `slug` = '$slug', `news_category` = '$kategori', news_date='$date',`aid` = '$aid' WHERE `news`.`id` = '$id'") or die(mysqli_error($db));
            session_start();
            $_SESSION['success_message'] = "Data Berhasil Tersimpan !";
            header('Location: ../../public/informasi/');
            exit();
        }else{
            session_start();
            $_SESSION['failed_message'] = "Kategori dilarang (Pilih)!";
            header("Location: ../../public/informasi/edit-data.php?id=$id");
            exit();
        }
    }
?>