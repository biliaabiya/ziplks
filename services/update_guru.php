<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php';
if(isset($_POST['id']) && isset($_POST['sekolah_id']) && isset($_POST['nama']) && isset($_POST['nip']) && isset($_POST['mata_pelajaran'])){
        $id = $_POST['id'];
        $alamat = $_POST['sekolah_id'];
        $nama = $_POST['nama'];
        $telepon = $_POST['nip'];
        $email = $_POST['mata_pelajaran'];
        $stmt = $conn->prepare("UPDATE guru SET sekolah_id = ?, nama = ?, nip = ?, mata_pelajaran = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $nsekolah_id, $nama, $nip, $mata_pelajaran, $id);
    
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Data berhasil diupdate.";
                header('Location: /lkscloudbabel2024/app/daftar_guru.php');
            } else {
                // echo "Tidak ada perubahan pada data.";
            }
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }
?>