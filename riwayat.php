<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Service</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body  class="bg-light">
<?php include("bootstrap/html/navbar.html") ?>
<div style="height:100vh"  class="container mt-5">
    <h2 class="mb-4">Riwayat Service</h2>

    <div class="card">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nopol</th>
                            <th>Type Motor</th>
                            <th>Paket Service</th>
                            <th>Keluhan</th>
                            <th>Tanggal Service</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'config.php'; $i=1;

                        $query = "SELECT * FROM riwayat_service";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" .$i++. "</td>";
                                echo "<td>{$row['nama']}</td>";
                                echo "<td>{$row['alamat']}</td>";
                                echo "<td>{$row['nopol']}</td>";
                                echo "<td>{$row['type_motor']}</td>";
                                echo "<td>{$row['paket_service']}</td>";
                                echo "<td>{$row['keluhan']}</td>";
                                echo "<td>{$row['tanggal_service']}</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center'>Tidak ada data riwayat service.</td></tr>";
                        }

                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include("bootstrap/html/footer.html") ?>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
