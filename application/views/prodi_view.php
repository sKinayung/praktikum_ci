<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Program Studi</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Membuat halaman penuh agar footer bisa menempel di bawah */
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

        /* Konten utama agar bisa mengisi ruang sebelum footer */
        .content {
            flex: 1;
        }

        /* Footer tetap di bawah halaman */
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

        <!-- Header dengan box biru tua -->
        <div class="text-center mb-4 bg-darkblue text-white p-4 rounded-3 shadow-sm">
            <h1 class="fw-bold mb-2">Selamat Datang di Web Program Studi</h1>
            <p class="mb-0">Daftar Program Studi berdasarkan Kode Prodi dan Nama Prodi</p>
        </div>

        <!-- Tombol Tambah -->
        <div class="d-flex justify-content-end mb-3">
            <a href="<?php echo site_url('prodi/tambah') ?>" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Data Prodi
            </a>
        </div>

        <!-- Tabel Mahasiswa -->
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover align-middle text-center">
                    <thead class="table-dark text-white">
                        <tr>
                            <th>NO</th>
                            <th>Kode Prodi</th>
                            <th>Nama Prodi</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($prodi as $row) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row->kode_prodi ?></td>
                                <td><?php echo $row->nama_prodi ?></td>
                                <td>
                                    <a href="<?php echo site_url('prodi/edit/' . $row->id_prodi) ?>" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('prodi/hapus/' . $row->id_prodi) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">
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

    <!-- Footer sticky -->
    <footer>
        <p class="mb-0 fw-semibold">Dibuat Oleh : Satriyo Kinayung - 2310010617</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- (Opsional) Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
