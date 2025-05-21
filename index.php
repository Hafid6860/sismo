<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Pendaftaran</title>
    <link rel="stylesheet" href="bootstrap/css/index.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <?php include("bootstrap/html/navbar.html") ?>
    <div style="height:100vh; margin:20px 80px 10px 80px">
        <h1>Data Pendaftaran</h1>
        <div class="add-button">
            <a href="halamantambah.php">+ Tambah Data</a>
        </div>

        <?php
        include 'config.php';

        $query = "SELECT * FROM pendaftaran";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<table>";
            echo "<tr>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Nopol</th>
              <th>Type Motor</th>
              <th>Paket Service</th>
              <th>Keluhan</th>
              <th width='160'>Aksi</th>
              </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["alamat"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["nopol"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["type_motor"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["paket_service"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["keluhan"]) . "</td>";
                echo "<td class='action-button'>
            <a href='halamanedit.php?id=" . $row["id_pendaftaran"] . "' class='edit'>Edit</a>
            <a href='#' onclick='confirmDelete(" . $row["id_pendaftaran"] . ")' class='hapus'>Hapus</a>
            <a href='prosesbayar.php?id=" . $row["id_pendaftaran"] . "' class='bayar'>Bayar</a>
            </td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            ?>
            <table style="text-align: center;"><tr><th>Belum Ada data</th></tr><tr><td style="text-align: center;">Masukan Data Terlebuh Dahulu</td></tr></table>
            <?php
        }

        mysqli_close($conn);
        ?>
    </div>
    <?php include("bootstrap/html/footer.html") ?>
    <script src="bootstrap/js/bootstrap.bundle.min.js">
        function confirmDelete(id) {
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = `proseshapus.php?id=${id}`;
            }
        }
    </script>

</body>

</html>