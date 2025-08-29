<?php
include 'tong.php';

$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM saya WHERE id = $id");

if ($result->num_rows === 0) {
    die("Data tidak ditemukan.");
}

$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = htmlspecialchars(trim($_POST['firstName']));
    $service   = htmlspecialchars(trim($_POST['service']));
    $merk      = htmlspecialchars(trim($_POST['merk']));
    $phone     = htmlspecialchars(trim($_POST['phone']));
    $plat      = htmlspecialchars(trim($_POST['plat']));
    $pesan     = htmlspecialchars(trim($_POST['address']));
    $terms     = isset($_POST['terms']) ? 1 : 0;

    $stmt = $conn->prepare("UPDATE saya SET firstName=?, service=?, merk=?, phone=?, plat=?, address=?, terms=? WHERE id=?");
    $stmt->bind_param("ssssssii", $firstName, $service, $merk, $phone, $plat, $pesan, $terms, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location.href='apa.php';</script>";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
<link rel="stylesheet" type="text/css" href="style/apaedit.css">

</head>
<body>

<h2>Edit Data Pendaftar</h2>
<div class="tai">
<form method="post">
    <label for="firstName">Nama Lengkap</label>
    <input type="text" name="firstName" id="firstName" value="<?= htmlspecialchars($data['firstName']) ?>" required>

    <label for="service">Layanan</label>
    <select name="service" id="service" required>
        <option value="">Pilih Layanan</option>
        <option value="service-rutin" <?= $data['service'] === 'service-rutin' ? 'selected' : '' ?>>Service Rutin</option>
        <option value="perbaikan-mesin" <?= $data['service'] === 'perbaikan-mesin' ? 'selected' : '' ?>>Perbaikan Mesin</option>
        <option value="service-ac" <?= $data['service'] === 'service-ac' ? 'selected' : '' ?>>Service AC</option>
        <option value="body-repair" <?= $data['service'] === 'body-repair' ? 'selected' : '' ?>>Body Repair</option>
    </select>

    <label for="merk">Merk Mobil</label>
    <input type="text" name="merk" id="merk" value="<?= htmlspecialchars($data['merk']) ?>" required>

    <label for="phone">Nomor Telepon</label>
    <input type="text" name="phone" id="phone" value="<?= htmlspecialchars($data['phone']) ?>" required>

    <label for="plat">Plat Mobil</label>
    <input type="text" name="plat" id="plat" value="<?= htmlspecialchars($data['plat']) ?>" required>

    <label for="address">Pesan</label>
    <textarea name="address" id="address" rows="4" required><?= htmlspecialchars($data['address']) ?></textarea>

    <p>
        <label>
            <input type="checkbox" name="terms" <?= $data['terms'] ? 'checked' : '' ?>> Saya menyetujui syarat dan ketentuan
        </label>

    <p>
         <input type="submit" value="Daftar Sekarang">
    </p>
</div>