<?php
include 'config.php'; $i=1;

$tanggal_awal = $_GET['tanggal_awal'] ?? date('Y-m-01');
$tanggal_akhir = $_GET['tanggal_akhir'] ?? date('Y-m-d');

$query = "SELECT * FROM riwayat_service WHERE tanggal_service BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
$result = mysqli_query($conn, $query);

$total_query = "SELECT SUM(total_pembayaran) as total FROM riwayat_service WHERE tanggal_service BETWEEN '$tanggal_awal' AND '$tanggal_akhir'";
$total_result = mysqli_query($conn, $total_query);
$total_data = mysqli_fetch_assoc($total_result);
$total_pendapatan = $total_data['total'] ?? 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pendapatan</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
<?php include("bootstrap/html/navbar.html") ?>
<div style="height:100vh" class="container mt-5">
    <h2 class="mb-4">Data Pendapatan</h2>

    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-4">
            <label for="tanggal_awal" class="form-label">Dari Tanggal:</label>
            <input type="date" id="tanggal_awal" name="tanggal_awal" class="form-control" value="<?php echo $tanggal_awal; ?>">
        </div>
        <div class="col-md-4">
            <label for="tanggal_akhir" class="form-label">Sampai Tanggal:</label>
            <input type="date" id="tanggal_akhir" name="tanggal_akhir" class="form-control" value="<?php echo $tanggal_akhir; ?>">
        </div>
        <div class="col-md-4 align-self-end">
            <button type="submit" class="btn btn-primary w-100">Filter</button>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Paket Service</th>
                    <th>Total Pembayaran</th>
                    <th>Tanggal Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['paket_service']; ?></td>
                        <td>Rp <?php echo number_format($row['total_pembayaran'], 2, ',', '.'); ?></td>
                        <td><?php echo $row['tanggal_service'] ?? date('Y-m-d'); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <div class="alert alert-success mt-4">
        <h4 class="mb-0">Total Pendapatan: Rp <?php echo number_format($total_pendapatan, 2, ',', '.'); ?></h4>
    </div>
</div>1
<?php include("bootstrap/html/footer.html") ?>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
