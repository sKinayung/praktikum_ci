<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa oleh Nama dan NIM</title>
</head>
<body>
    <h1>Selamat Datang di Web Nama Metode Result Array</h1>
    <table border="2">
        <thead>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($resultArray as $row) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nim']; ?></td>
                <td><?php echo $row['nama_mahasiswa']; ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>