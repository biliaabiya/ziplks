<?php include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php'; ?>
<?php 
if( isset($_POST['id']) && isset($_POST['sekolah_id']) && isset($_POST['nama']) && isset($_POST['nip']) && isset($_POST['bagian']) && isset($_POST['telepon'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    $password = sha1($_POST['password']);
    $stmt = $conn->prepare("UPDATE staft SET sekolah_id = ?, nama = ?, nip = ?, bagian = ?, telepon = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $sekolah_id, $nama, $nip, $bagian, $telepon, $id);

    if ($stmt->execute()) {
        header('Location: /lkscloudbabel2024/app/daftar_staft.php');
        echo 
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