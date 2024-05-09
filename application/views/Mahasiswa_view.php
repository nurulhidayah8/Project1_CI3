<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <h1 style="text-align:center;">Data Mahasiswa</h1>
        <form class="d-flex" action="<?php echo base_url('mahasiswa/search'); ?>" method="post">
            <input class="form-control me-2" type="text" required name="keyword" placeholder="Cari mahasiswa berdasarkan nama / NPM / angkatan / kelas / alamat / mata kuliah favorit " style="margin: 1px;">
            <button class="btn btn-primary" type="submit" style="margin: 2px;">Cari</button>
            <button class="btn btn-secondary" onclick="window.location.href='<?php echo base_url('mahasiswa'); ?>'" type="button" style="margin: 2px;">Reset</button>
        </form>
        <br>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Angkatan</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Mata Kuliah Favorit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?php echo $mhs['id']; ?></td>
                        <td><?php echo $mhs['nama']; ?></td>
                        <td><?php echo $mhs['npm']; ?></td>
                        <td><?php echo $mhs['angkatan']; ?></td>
                        <td><?php echo $mhs['kelas']; ?></td>
                        <td><?php echo $mhs['alamat']; ?></td>
                        <td><?php echo $mhs['mata_kuliah_favorit']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>