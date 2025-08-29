<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style/pendaftaran.css">
</head>
<body>

    <?php include 'navigasi.php'; ?>

    <form action="proses.php" method="post">
        <h1>Form Pendaftaran</h1>
        <p class="ayo">Silakan lengkapi data diri Anda di bawah ini:</p>

        <fieldset>
            <legend>Data Pribadi</legend>

            <p>
                <label for="firstName">Nama lengkap:</label><br>
                <input type="text" id="firstName" name="firstName" required>
            </p>

            <div class="form-group">
                <label for="service">Layanan</label>
                <select id="service" name="service" required>
                    <option value="">Pilih Layanan</option>
                    <option value="service-rutin">Service Rutin</option>
                    <option value="perbaikan-mesin">Perbaikan Mesin</option>
                    <option value="service-ac">Service AC</option>
                    <option value="body-repair">Body Repair</option>
                </select>
            </div>

            <p>
                <label for="merk">Merk mobil:</label><br>
                <input type="text" id="merk" name="merk" required>
            </p>

            <p>
                <label for="phone">Nomor Telepon:</label><br>
                <input type="text" id="phone" name="phone" maxlength="15" required>
            </p>

            <p>
                <label for="plat">Plat mobil:</label><br>
                <input type="text" id="plat" name="plat" required>
            </p>

            <p>
                <label for="address">Pesan:</label><br>
                <textarea id="address" name="address" rows="4" cols="50" required></textarea>
            </p>
        </fieldset>

        <fieldset>
            <legend>Persetujuan</legend>

            <p>
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Saya menyetujui syarat dan ketentuan yang berlaku</label>
            </p>
        </fieldset>

        <p>
            <input type="submit" value="Daftar Sekarang">
            <input type="reset" value="Reset Form">
        </p>
    </form>

    <!-- JavaScript Validasi -->
    <script>
    document.querySelector("form").addEventListener("submit", function (e) {
        const nama = document.getElementById("firstName").value.trim();
        const layanan = document.getElementById("service").value;
        const merk = document.getElementById("merk").value.trim();
        const telp = document.getElementById("phone").value.trim();
        const plat = document.getElementById("plat").value.trim();
        const pesan = document.getElementById("address").value.trim();
        const setuju = document.getElementById("terms").checked;

        if (!nama || !layanan || !merk || !telp || !plat || !pesan || !setuju) {
            alert("Harap isi semua data dan centang persetujuan sebelum mengirim.");
            e.preventDefault();
        } else {
            const konfirmasi = confirm("Apakah Anda yakin ingin mengirim formulir?");
            if (!konfirmasi) {
                e.preventDefault();
            }
        }
    });

    // Hanya angka untuk nomor telepon
    document.getElementById("phone").addEventListener("input", function () {
        this.value = this.value.replace(/[^0-9]/g, "");
    });
    </script>
</body>
</html>
