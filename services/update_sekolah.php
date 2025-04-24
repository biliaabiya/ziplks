<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php';
if(isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['telepon']) && isset($_POST['email'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $stmt = $conn->prepare("UPDATE sekolah SET nama = ?, alamat = ?, telepon = ?, email = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $nama, $alamat, $telepon, $email, $id);
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Data berhasil diupdate.";
                header('Location: /lkscloudbabel2024/app/daftar_sekolah.php');
            } else {
                echo "Tidak ada perubahan pada data.";
            }
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }
?>