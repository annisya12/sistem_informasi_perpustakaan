<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPerpus</title>
    <link rel="stylesheet" href="{{asset ('assets/css/datapengunjung.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Atur warna latar belakang dan warna teks secara global */
        body {
            background-color: #0C014F;
            color: white;
        }

        /* Gaya untuk sidebar */
        .sidebar {
            background-color: #0C014F;
            height: 105vh;
            border-right: 2px solid white;
        }

        /* Gaya untuk navbar */
        .navbar {
            background-color: #0C014F;
            border-bottom: 3px solid white;
            position: relative;
        }

        /* Gaya untuk konten utama */
        .main-content {
            border-left: 2px solid white;
        }

        /* Gaya untuk teks judul sidebar */
        .sidebar h4 {
            font-family: 'Inter', sans-serif;
            font-weight: medium;
            font-size: 20px;
        }

        /* Gaya untuk teks judul navbar */
        .navbar-brand span {
            font-family: 'Inter', sans-serif;
            font-weight: black;
            font-size: 23px;
        }

        /* Gaya untuk navbar card */
        .navbar-card {
            background-color: #5737B7;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 180px; /* Sesuaikan dengan lebar card */
            height: 36px; /* Sesuaikan dengan tinggi card */
            margin-left: 205px; /* Jarak antara card dan navbar */
        }

        /* Gaya untuk konten dalam navbar card */
        .navbar-card .card-body {
            padding: 0.31rem; /* Atur padding sesuai kebutuhan */
            text-align: left; /* Atur posisi teks menjadi kiri */
            margin-bottom: 10px;
            display: flex; /* Menggunakan flexbox */
            align-items: center; /* Menyamakan tinggi elemen */
        }

        /* Gaya untuk tautan data pengunjung */
        .data-pengunjung {
            color: white;
            text-decoration: none;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
        }

        /* Gaya untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Gaya untuk header kolom tabel */
        th,
        td {
            border: 1px solid #AE95D0;
            padding: 8px;
            text-align: center;
            background-color: #AE95D0;
        }

        /* Gaya untuk header kolom tabel */
        th {
            background-color: #1a194b;
        }

        /* Gaya untuk baris genap pada tabel */
        tr:nth-child(even) {
            background-color: #1a194b;
        }

        /* Gaya untuk tombol kembali */
        .button-kembali {
            background-color: #E4EAF8;
            margin-top: 6px;
            color: black;
        }

        .disabled {
            pointer-events: none;
            opacity: 0.5; /* Opsional: Mengurangi kecerahan untuk menunjukkan status "nonaktif" */
        }
    </style>
</head>

<body>
<?php
// Koneksi ke database (ganti dengan informasi koneksi sesuai dengan kebutuhan Anda)
$servername = "127.0.0.1:3306";
$username = "u161723999_SIPerpus";
$password = "P4ssw0rdP3pus";
$database = "u161723999_SIPerpus";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Inisialisasi array untuk menyimpan total kunjungan per bulan dengan nilai default 0
$total_kunjungan = array_fill(1, 12, 0);

// Query untuk mengambil total kunjungan per bulan dari tabel daftarkunjungan
$sql1 = "SELECT MONTH(created_at) as bulan, COUNT(*) as total_kunjungan FROM daftarkunjungan GROUP BY MONTH(created_at)";
$result1 = $conn->query($sql1);

// Cek apakah query berhasil dieksekusi
if ($result1->num_rows > 0) {
    // Mendapatkan data dari hasil query
    while($row = $result1->fetch_assoc()) {
        // Simpan total kunjungan ke dalam array asosiatif berdasarkan bulan
        $bulan = $row["bulan"];
        $total_kunjungan[$bulan] += $row["total_kunjungan"];
    }
}

// Query untuk mengambil total kunjungan per bulan dari tabel loginanggota
$sql2 = "SELECT MONTH(created_at) as bulan, COUNT(*) as total_kunjungan FROM loginanggota GROUP BY MONTH(created_at)";
$result2 = $conn->query($sql2);

// Cek apakah query berhasil dieksekusi
if ($result2->num_rows > 0) {
    // Mendapatkan data dari hasil query
    while($row = $result2->fetch_assoc()) {
        // Simpan total kunjungan ke dalam array asosiatif berdasarkan bulan
        $bulan = $row["bulan"];
        $total_kunjungan[$bulan] += $row["total_kunjungan"];
    }
}

// Menyimpan total kunjungan per bulan ke dalam variabel terpisah
$total_kunjungan_januari = $total_kunjungan[1]; // Januari
$total_kunjungan_februari = $total_kunjungan[2]; // Februari
$total_kunjungan_maret = $total_kunjungan[3];
$total_kunjungan_april = $total_kunjungan[4];
$total_kunjungan_mei = $total_kunjungan[5];
$total_kunjungan_juni = $total_kunjungan[6];
$total_kunjungan_juli = $total_kunjungan[7];
$total_kunjungan_agustus = $total_kunjungan[8];
$total_kunjungan_september = $total_kunjungan[9];
$total_kunjungan_oktober = $total_kunjungan[10];
$total_kunjungan_november = $total_kunjungan[11];
$total_kunjungan_desember = $total_kunjungan[12];

// Tutup koneksi database
$conn->close();
?>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" style="position: relative;">
            <img src="assets/img/logo.png" alt="" width="40" height="34"
                class="d-inline-block align-text-top">
            <span>SIPerpus</span>
        </a>
        <div class="card navbar-card">
            <div class="card-body">
                <a class="data-pengunjung">
                    Data Pengunjung
                    <img src="assets/img/datapengunjung.png" alt="Data Pengunjung"
                        style="width: 25px; height: 25px; margin-left: 10px;">
                </a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="profilepetugas" class="nav-link">
                        <span style="margin-right: 5px;">
                            <img src="assets/img/fotopetugas.jpg" alt="" width="24" height="24"
                                class="d-inline-block align-text-top">
                        </span>
                        Petugas
                    </a>
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
                        <th>Bulan</th>
                        <th>Total Kunjungan</th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td>Januari</td>
                        <td><?php echo $total_kunjungan_januari; ?></td>
                    </tr>
                    <tr>
                        <td>Februari</td>
                        <td><?php echo $total_kunjungan_februari; ?></td>
                    </tr>
                    <tr>
                        <td>Maret</td>
                        <td><?php echo $total_kunjungan_maret; ?></td>
                    </tr>
                   <tr>
                        <td>April</td>
                        <td><?php echo $total_kunjungan_april; ?></td>
                    </tr>
                    <tr>
                        <td>Mei</td>
                        <td><?php echo $total_kunjungan_mei; ?></td>
                    </tr>
                    <tr>
                        <td>Juni</td>
                        <td><?php echo $total_kunjungan_juni; ?></td>
                    </tr>
                   <tr>
                        <td>Juli</td>
                        <td><?php echo $total_kunjungan_juli; ?></td>
                    </tr>
                    <tr>
                        <td>Agustus</td>
                        <td><?php echo $total_kunjungan_agustus; ?></td>
                    </tr>
                    <tr>
                        <td>September</td>
                        <td><?php echo $total_kunjungan_september; ?></td>
                    </tr>
                    <tr>
                        <td>Oktober</td>
                        <td><?php echo $total_kunjungan_oktober; ?></td>
                    </tr>
                    <tr>
                        <td>November</td>
                        <td><?php echo $total_kunjungan_november; ?></td>
                    </tr>
                    <tr>
                        <td>Desember</td>
                        <td><?php echo $total_kunjungan_desember; ?></td>
                    </tr>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
<script type="text/javascript">
function redirectToDash() {
    // Mengarahkan pengguna ke halaman dash
    window.location.href = "dash";
}
</script>

</body>

</html>
