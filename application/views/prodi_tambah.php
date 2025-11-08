<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa oleh Nama dan NIM</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #fff;
        }

        .content {
            flex: 1;
        }

        /* Warna biru tua */
        .bg-darkblue {
            background-color: #0300b1ff !important;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #0300b1ff;
            color: white;
            text-align: center;
            padding: 10px 0;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-darkblue {
            background-color: #0300b1ff;
            border-color: #0300b1ff;
        }

        .btn-darkblue:hover {
            background-color: #08345b;
            border-color: #08345b;
        }
    </style>
</head>

<body>
    <div class="content container mt-3 mb-5">

        <!-- Header -->
        <div class="text-center mb-4 bg-darkblue text-white p-4 rounded-3 shadow-sm">
            <h1 class="fw-bold mb-2">Form Tambah Program Studi</h1>
            <p class="mb-0">Masukkan program studi baru ke dalam sistem</p>
        </div>

        <!-- Form Tambah -->
        <div class="card shadow-sm mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <form action="<?= site_url('prodi/simpan') ?>" method="post">
                    <div class="mb-3">
                        <label for="kode_prodi" class="form-label fw-semibold">Kode Prodi</label>
                        <input type="text" id="kode_prodi" name="kode_prodi" class="form-control" placeholder="Masukkan Kode Prodi" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_prodi" class="form-label fw-semibold">Nama Prodi</label>
                        <input type="text" id="nama_prodi" name="nama_prodi" class="form-control" placeholder="Masukkan Nama Prodi" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="<?= site_url('prodi') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-darkblue text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p class="mb-0 fw-semibold">Dibuat Oleh : Satriyo Kinayung - 2310010617</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
