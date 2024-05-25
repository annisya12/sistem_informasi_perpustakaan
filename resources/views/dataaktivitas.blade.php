<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aktivitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #0C014F;
        color: white;
    }

    .sidebar {
        background-color: #0C014F;
        height: 105vh;
        border-right: 2px solid white;
    }

    .navbar {
        background-color: #0C014F;
        border-bottom: 3px solid white;
        position: relative;
    }

    .navbar-brand span {
        font-family: 'Inter', sans-serif;
        font-weight: black;
        font-size: 23px;
    }

    .navbar-card {
        background-color: #C47CB0;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 180px;
        height: 36px;
        margin-left: 200px;
    }

    .navbar-card .card-body {
        padding: 0.31rem;
        text-align: left;
        display: flex;
        align-items: center;
    }

    .data-aktivitas {
        color: white;
        text-decoration: none;
        font-family: 'Inter', sans-serif;
        font-size: 16px;
    }

    .plus-img {
        width: 25px;
        height: 25px;
        margin-left: 180px;
        margin-bottom: 250px;
    }

    .main-content {
        border-left: 2px solid white;
    }

    .sidebar h4 {
        font-family: 'Inter', sans-serif;
        font-weight: medium;
        font-size: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #AE95D0;
        padding: 8px;
        text-align: center;
        background-color: #AE95D0;
    }

    th {
        background-color: #1a194b;
    }

    tr:nth-child(even) {
        background-color: #1a194b;
    }

    .denda-img {
        width: 18px;
        height: auto;
    }

    .status-img {
        width: 18px;
        height: auto;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" style="position: relative;">
                <img src="assets/img/logo.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
                <span>SIPerpus</span>
            </a>
            <div class="card navbar-card">
                <div class="card-body">
                    <a href="#" class="nav-link data-aktivitas" style="pointer-events: none;">
                        Data Aktivitas
                        <img src="assets/img/dataaktivitas.png" alt="Data Aktivitas" style="width: 25px; height: 25px; margin-left: 140px; margin-top: -50px;">
                    </a>
                    <a href="{{ url('/formkeloladata/create') }}" class="plus-link">
                        <img src="assets/img/plus.png" alt="Tambah Data" style="width: 25px; height: 25px; margin-left: 50px; margin-bottom: 20px;">
                    </a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ url('/profilepetugas') }}" class="nav-link">
                        <img src="assets/img/fotopetugas.jpg" alt="" width="24" height="24" class="d-inline-block align-text-top">
                        <span>Petugas</span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar">
                <a href="#" class="mt-3"
                    style="background-color: #a27bd8; display: block; text-decoration: none; color: inherit; padding: 10px;">
                    <img src="assets/img/kelola.png" alt="" width="24" height="24"
                        class="d-inline-block align-text-top">
                    Kelola Data
                </a>
                <a href="dashlaporan" class="mt-3"
                    style="display: block; text-decoration: none; color: inherit; padding: 10px;">
                    <img src="assets/img/laporan.png" alt="" width="24" height="24"
                        class="d-inline-block align-text-top">
                    Laporan
                </a>
                <a href="#" class="mt-3" data-bs-toggle="modal" data-bs-target="#logoutModal"
                    style="display: block; text-decoration: none; color: inherit; padding: 10px;">
                    <img src="assets/img/log.png" alt="" width="24" height="24"
                        class="d-inline-block align-text-top">
                    Keluar
                </a>
            </div>
            <div class="col main-content">
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Judul Buku</th>
                            <th>Tgl Peminjaman</th>
                            <th>Tgl Pengembalian</th>
                            <th>Denda</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($formkelola as $data)
                        <tr>
                            <td>{{ $data->Nik }}</td>
                            <td>{{ $data->Nama }}</td>
                            <td>{{ $data->Judul_Buku }}</td>
                            <td>{{ $data->Tgl_Peminjaman }}</td>
                            <td>{{ $data->Tgl_Pengembalian }}</td>
                            <td>{{ $data->Denda }}</td>
                            <td>{{ $data->Status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="modal modal-logout fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <h2 class="text-black pb-4 text-center pt-4">Yakin keluar?</h2>
                <div class="row mb-2">
                    <div class="col-md-4 text-right">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" style="margin-left: 200px;">Tidak</button>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-left">
                       <button class="btn btn-success mr-2" style="margin-right: 10px;" onclick="redirectToDash()">Ya</button>
                    </div>
                </div>
                <div class="w-100 text-center">
                    <img src="{{ asset('assets/img/logout.png') }}" width="70%" alt="Logout">
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
    function redirectToDash() {
        // Mengarahkan pengguna ke halaman dash
        window.location.href = "dash";
    }
</script>
</body>
</html>
