<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php'; 

if( isset($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['telepon'], $_POST['email'])){
    $id = (int) $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['alamat'];
    $password = sha1($_POST['telepon']);
    $role = $_POST['email'];

    $stmt = $conn->prepare("UPDATE sekolah SET nama = ?, alamat = ?, telepon = ?, email = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $nama, $alamat, $telepon, $email, $id);

    if ($stmt->execute()) {
        header('Location: /lkscloudbabel2024/app/daftar_sekolah.php'); 
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
