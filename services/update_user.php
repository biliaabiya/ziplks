<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id         = $_POST['id'];
    $username   = trim($_POST['username']);
    $nama       = trim($_POST['nama']);
    $role       = trim($_POST['role']);
    $sekolah_id = !empty($_POST['sekolah_id']) ? $_POST['sekolah_id'] : null;
    $password   = trim($_POST['password']);

    if (!empty($password)) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE users SET username=?, nama=?, role=?, sekolah_id=?, password=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssisi", $username, $nama, $role, $sekolah_id, $password_hash, $id);
    } else {
        $sql = "UPDATE users SET username=?, nama=?, role=?, sekolah_id=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssii", $username, $nama, $role, $sekolah_id, $id);
    }

    if ($stmt->execute()) {
        header("Location: /lkscloudbabel2024/app/daftar_user.php?success=1");
        exit();
    } else {
        echo "Gagal update data: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Invalid request method.";
}
$conn->close();
