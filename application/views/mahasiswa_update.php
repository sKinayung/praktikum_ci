<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mahasiswa oleh Nama dan NIM</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
        }
        .content {
            flex: 1;
        }

        /* Ubah warna biru menjadi lebih tua */
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
            <h1 class="fw-bold mb-2">Form Update Mahasiswa</h1>
            <p class="mb-0">Perbaharui data mahasiswa sesuai NIM dan Nama</p>
        </div>

        <!-- Form Update -->
        <div class="card shadow-sm mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <form action="<?php echo site_url('mahasiswa/perbaharui/'.$mahasiswa->id_mahasiswa) ?>" method="post">
                    <div class="mb-3">
                        <label for="nim" class="form-label fw-semibold">NIM</label>
                        <input type="text" id="nim" name="nim" class="form-control" value="<?php echo $mahasiswa->nim ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_mahasiswa" class="form-label fw-semibold">Nama Mahasiswa</label>
                        <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control" value="<?php echo $mahasiswa->nama_mahasiswa ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="id_prodi">Program Studi</label>
                        <select name="id_prodi" id="id_prodi" required>
                            <option value="">Pilih Program Studi</option>
                            <?php foreach ($prodi as $ps) : ?>
                                <option value="<?= $ps->id_prodi ?>" <?php $mahasiswa->id_prodi == $ps->id_prodi ? 'selected' : '' ?>>
                                    <?=
                                         $ps->nama_prodi
                                    ?>
                                    </option>
                                    <?php endforeach; ?>
                        </select><br>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-darkblue text-white">Perbaharui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p class="mb-0 fw-semibold">Dibuat Oleh : Satriyo Kinayung - 2310010617</p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
