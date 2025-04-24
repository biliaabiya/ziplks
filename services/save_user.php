<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/lkscloudbabel2024/services/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username   = trim($_POST['username']);
    $nama       = trim($_POST['nama']);
    $role       = trim($_POST['role']);
    $sekolah_id = !empty($_POST['sekolah_id']) ? $_POST['sekolah_id'] : null;
    $password   = trim($_POST['password']);

    // Validasi simple
    if (empty($username) || empty($nama) || empty($role) || empty($password)) {
        echo "Semua field wajib diisi!";
        exit;
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, nama, role, sekolah_id, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssds", $username, $nama, $role, $sekolah_id, $password_hash);

    if ($stmt->execute()) {
        header("Location: /lkscloudbabel2024/app/daftar_user.php?success=1");
        exit();
    } else {
        echo "Gagal menyimpan data: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Request tidak valid.";
}
$conn->close();
