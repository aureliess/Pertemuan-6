<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="widht=devide-widht, initial=scale=1.0">
    <title>Form Tambah Mahasiswa</title>
</head>
<body >
    <h1 align="center">Data Mahasiswa</h1>
    <form method="post" action="action.php" align="center">
        ID Mahasiswa : <br><input type="text" name="id_mhs"></br>
        <br>
        Nama Mahasiswa  : <br><input type="text" name="nama_mhs"></br>
        <br>
        Prodi Mahasiswa  : <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="nama_prodi">
                <option selected>Prodi</option>
                    <option value="1">Teknik Informatika</option>
                    <option value="2">Sistem Informasi</option>
                    <option value="2">Teknik Elektro</option>>
                    <option value="2">Teknik Industri</option>

                </select>
            </div>
            <br>
        Alamat Mahasiswa  : <br><input type="text" name="alamat_mhs"></br>
        <br>
        Status Mahasiswa : <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="status_prodi">
                <option selected>Status</option>
                    <option value="1">Aktif</option>
                    <option value="2">Non Aktif</option>>
                </select>
            </div>
        </br><input type="submit" value="Submit" name="terkirim" style="background-color:#C689C6"></input>
    </form>
</body>