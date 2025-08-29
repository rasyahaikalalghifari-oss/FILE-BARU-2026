<?php
include 'tong.php';

// Ambil dan filter data dari form
$firstName = htmlspecialchars(trim($_POST['firstName']));
$service   = htmlspecialchars(trim($_POST['service']));
$merk      = htmlspecialchars(trim($_POST['merk']));
$phone     = htmlspecialchars(trim($_POST['phone']));
$plat      = htmlspecialchars(trim($_POST['plat']));
$pesan     = htmlspecialchars(trim($_POST['address']));
$terms     = isset($_POST['terms']) ? 1 : 0;

// Validasi sisi server
if (!preg_match("/^[0-9]+$/", $phone)) {
    die("Nomor telepon hanya boleh berisi angka.");
}

// Query insert
$sql = "INSERT INTO saya (firstName, service, merk, phone, plat, address, terms) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssi", $firstName, $service, $merk, $phone, $plat, $pesan, $terms);

if ($stmt->execute()) {
    echo "<script>alert('Pendaftaran berhasil disimpan!'); window.location.href='index.php';</script>";
} else {
    echo "Terjadi kesalahan: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
