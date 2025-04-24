<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php';
if(isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['sekolah_id']) && isset($_POST['nip']) && isset($_POST['bagian']) && isset($_POST['telepon'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['sekolah_id'];
        $telepon = $_POST['nip'];
        $email = $_POST['bagian'];
        $nama = $_POST['telepon'];
        $stmt = $conn->prepare("UPDATE staft SET nama = ?, sekolah_id = ?, nip = ?, bagian = ?, telepon = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $nama, $sekolah_id, $nip, $bagian, $telepon, $id);
    
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Data berhasil diupdate.";
                header('Location: /lkscloudbabel2024/app/daftar_staft.php');
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