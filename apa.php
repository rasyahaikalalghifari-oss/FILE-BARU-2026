<?php
include 'tong.php';

// Handle delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM saya WHERE id = $id");
    header("Location: apa.php");
    exit();
}

// Ambil semua data
$sql = "SELECT * FROM saya ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            margin-right: 5px;
            border-radius: 4px;
            font-size: 14px;
        }
        .btn-edit {
            background-color: #4CAF50;
            color: white;
        }
        .btn-delete {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>

<?php include 'navigasi.php'; ?>

<h1>Daftar Pendaftar</h1>

<?php if ($result->num_rows > 0): ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Layanan</th>
                <th>Merk Mobil</th>
                <th>No. Telepon</th>
                <th>Plat Mobil</th>
                <th>Pesan</th>
                <th>Setuju?</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row['firstName']) ?></td>
                <td><?= htmlspecialchars($row['service']) ?></td>
                <td><?= htmlspecialchars($row['merk']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['plat']) ?></td>
                <td><?= htmlspecialchars($row['address']) ?></td>
                <td><?= $row['terms'] ? 'Ya' : 'Tidak' ?></td>
                <td>
                    <a href="apaedit.php?id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
                    <a href="apa.php?delete=<?= $row['id'] ?>" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Belum ada data pendaftaran.</p>
<?php endif; ?>

<?php $conn->close(); ?>

</body>
</html>
