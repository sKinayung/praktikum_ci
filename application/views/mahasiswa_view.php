<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mahasiswa oleh Nama dan NIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: white;
        }

        .bg-darkblue {
            background-color: #0300b1ff !important;
        }

        .content {
            flex: 1;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #0300b1ff; /* Biru tua bootstrap */
            color: white;
            text-align: center;
            padding: 10px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="content container mt-3 mb-5">
        <div class="text-center mb-4 bg-darkblue text-white p-4 rounded-3 shadow-sm">
            <h1 class="fw-bold mb-2">Selamat Datang di Universitas FYP</h1>
            <p class="mb-0">Daftar Mahasiswa berdasarkan NIM dan Nama</p>
        </div>

        <div class="d-flex justify-content-end mb-3 gap-2">
            <a href="<?php echo site_url('mahasiswa/tambah') ?>" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Data Mahasiswa
            </a>
            <a href="<?php echo site_url('mahasiswa/cetak') ?>" class="btn btn-primary" target="_blank">
                <i class="bi bi-printer"></i> Cetak Data Mahasiswa
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover align-middle text-center">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>NO</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($mahasiswa as $row) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row->nim ?></td>
                                <td><?php echo $row->nama_mahasiswa ?></td>
                                <td><?php echo $row->nama_prodi ?></td>
                                <td>
                                    <a href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>"
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <p class="mb-0 fw-semibold">Dibuat Oleh : Satriyo Kinayung - 2310010617</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
