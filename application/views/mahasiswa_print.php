<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Daftar Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #ffffff;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: #000;
            margin: 20px;
        }

        /* Header dengan warna biru tua */
        .header-box {
            background-color: #0300b1ff;
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 28px;
            margin: 0;
        }

        /* Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th {
            background-color: #0300b1ff;
            color: white;
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        tr:nth-child(even) {
            background-color: #f5f7fa;
        }

        /* Cetak hanya konten utama */
        @media print {
            body {
                margin: 0;
            }
            .header-box {
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-box shadow-sm">
        <h1 class="fw-bold">Daftar Mahasiswa</h1>
        <p class="mb-0">Universitas Contoh - Data Mahasiswa Aktif</p>
    </div>

    <!-- Tabel Data -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($mahasiswa as $mhs): ?>
            <tr>
                <td><?= $mhs->nim; ?></td>
                <td><?= $mhs->nama_mahasiswa; ?></td>
                <td><?= $mhs->nama_prodi; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        window.print();
    </script>
</body>
</html>
