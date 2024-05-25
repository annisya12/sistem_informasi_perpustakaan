<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, .sidebar {
            background-color: #0C014F;
            color: white;
        }

        .sidebar {
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
            margin-bottom: 7px;
        }

        .navbar-card {
            background-color: #D0CADD;
            position: absolute;
            top: 22%;
            transform: translateY(-50%);
            width: 180px;
            height: 36px;
            margin-left: 50px;
        }

        .navbar-card .card-body {
            padding: 0.31rem;
            text-align: left;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }

        .data-member {
            text-decoration: none;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            text-align: center;
        }

        th, td {
            border: 1px solid #AE95D0;
            padding: 8px;
            text-align: center;
            background-color: white; /* Mengubah warna latar belakang menjadi putih */
            color: black; /* Mengubah warna teks menjadi hitam */
        }

        th {
            background-color: #AE95D0; /* Latar belakang elemen <th> */
            color: white; /* Warna teks pada elemen <th> */
        }
        tr:nth-child(even) {
            background-color: #1a194b;
        }
        .button-kembali {
            background-color: #E4EAF8;
            margin-top: 6px;
            color: black;
            margin-left: 0;
            align-self: flex-start;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" style="position: relative;">
            <img src="assets/img/logo.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
            <span>SIPerpus</span>
        </a>
        <div class="card navbar-card" style="margin-top: 20px; margin-left:200px;">
            <div class="card-body">
                <a class="nav-link data-member">
                    Data Member
                    <img src="assets/img/datamember.png" alt="Data Member" style="width: 25px; height: 25px; margin-left: 40px;">
                </a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="mt-1 profile-pic d-flex align-items-center" data-toggle="dropdown" href="{{ url('/profilepetugas') }}" aria-expanded="false" style="text-decoration: none;">
                        <img src="assets/img/fotopetugas.jpg" alt="" width="24" height="24">
                        <span style="color: white;">Petugas</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 sidebar">
            <a href="" class="mt-3" style="background-color: #a27bd8; display: block; text-decoration: none; color: inherit; padding: 10px;">
                <img src="assets/img/kelola.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                Kelola Data
            </a>
            <a href="dashlaporan" class="mt-3" style="display: block; text-decoration: none; color: inherit; padding: 10px;">
                <img src="assets/img/laporan.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                Laporan
            </a>
            <a href="#" class="mt-3" data-bs-toggle="modal" data-bs-target="#logoutModal" style="display: block; text-decoration: none; color: inherit; padding: 10px;">
                <img src="assets/img/log.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                Keluar
            </a>
        </div>
        <div class="col main-content">
    <table border="1">
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No. Tlp</th>
            <th>Foto</th>
            <th>Tanggal Daftar</th>
        </tr>
        <!-- Iterasi daftar anggota Anda di sini -->
        @foreach ($daftaranggotas as $anggota)
        <tr>
            <td>{{ $anggota['Nik'] }}</td>
            <td>{{ $anggota['Nama'] }}</td>
            <td>{{ $anggota['Asal'] }}</td>
            <td>{{ $anggota['Alamat'] }}</td>
            <td>{{ $anggota['Tempat_Lahir'] }}</td>
            <td>{{ $anggota['Tanggal_Lahir'] }}</td>
            <td>{{ $anggota['No_Tlp'] }}</td>
            <!-- Tautan untuk menampilkan file -->
           <!-- Tautan untuk mengunduh file -->
<td>
    <a href="{{ url('uploads/' . $anggota['Upload_Foto']) }}" target="_blank">{{ $anggota['Upload_Foto'] }}</a>
</td>
            <td>{{ $anggota['created_at'] }}</td>
        </tr>
        @endforeach
    </table>
        </div>
    </div>
</div>

<div class="modal modal-logout fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
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
                    <div class="w-100 text-center">
                        <img src="{{ asset('assets/img/logout.png') }}" width="70%" alt="Logout">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function redirectToDash() {
        window.location.href = "dash";
    }
</script>

</body>
</html>
