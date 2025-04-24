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
        header('Location: /lkscloudbabel2024/app/daftar_guru.php'); 
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Terjadi Kesalahan Saat Menambah Data";
}
?>