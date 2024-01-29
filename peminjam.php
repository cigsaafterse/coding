<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="Pengguna.php"><img src="smk.png" alt="Bootstrap" width="30" height="40"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Peminjaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="alert alert-primary" role="alert">
        Selamat Datang Di Halaman Peminjam
    </div>
    <div class="container">
        <h1 class="mt-5 mb-3">Peminjaman Buku</h1>
        <form>
            <div class="form-group ">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control mt-1" id="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group">
                <label for="judulBuku">Judul Buku:</label>
                <input type="text" class="form-control mt-1" id="judulBuku" placeholder="Masukkan judul buku">
            </div>
            <div class="form-group">
                <label for="tanggalPinjam">Tanggal Pinjam:</label>
                <input type="date" class="form-control mt-1" id="tanggalPinjam">
            </div>
            <div class="form-group">
                <label for="tanggalKembali">Tanggal Kembali:</label>
                <input type="date" class="form-control mt-1" id="tanggalKembali">
            </div>
            <button type="submit" class="btn btn-primary mt-1">Submit</button>
        </form>
    </div>
</body>

</html>