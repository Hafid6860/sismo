<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pendaftaran</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Data Pendaftaran</h2>
        <form action="prosestambah.php" method="post">
            <input type="hidden" name="id_pendaftaran" value="<?= $data['id_pendaftaran']; ?>">

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="mb-3">
                <label for="nopol" class="form-label">Nopol:</label>
                <input type="text" class="form-control" id="nopol" name="nopol" required>
            </div>

            <div class="mb-3">
                <label for="type_motor" class="form-label">Type Motor:</label>
                <input type="text" class="form-control" id="type_motor" name="type_motor"  required>
            </div>

            <div class="mb-3">
                <label for="paket_service" class="form-label">Paket Service:</label>
                <select class="form-select" id="paket_service" name="paket_service" onchange="updateHargaService()" required>
                    <option value="service_ringan">Service Ringan - 75rb</option>
                    <option value="service_berat">Service Berat - 150rb</option>
                    <option value="ganti_oli">Ganti Oli - 50rb</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan:</label>
                <input type="text" class="form-control" id="keluhan" name="keluhan" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

<script src="bootstrap/js/bootstrap.bundle.min.js">
    function updateHargaService() {
        var paketService = document.getElementById('paket_service').value;
        var hargaService = 0;

        if (paketService === 'service_ringan') {
            hargaService = 75000;
        } else if (paketService === 'service_berat') {
            hargaService = 150000;
        } else if (paketService === 'ganti_oli') {
            hargaService = 50000;
        }

        document.getElementById('harga_service').value = hargaService;
    }

    onchange = updateHargaService()
</script>


</html>