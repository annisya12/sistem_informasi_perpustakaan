<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bantuan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="" style="background-color: #e4eaf8">
    <nav class="navbar navbar-light" style="background-color: #0C014F;">
        <div class="container-fluid d-flex">
            <a class="navbar-brand">
                <img src="assets/img/logo.png" alt="" width="40" height="34"
                    class="d-inline-block align-text-top" />
                <span style="font-weight: bold; color: white;">SIPerpus</span>
            </a>
            <div class="justify-content-end">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/informasi')}}">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" style="background-color: #a27bd8;" href="{{url('/bantuan')}}">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/petugas')}}">Petugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" data-bs-toggle="modal"
                            data-bs-target="#loginModal">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

     <div class="row"
        style="
        padding-left: 100px;
        padding-top: 50px;
        padding-bottom: 50px;
        background-color: white;
        ">
        <div class="col-md-6">
            <img src="assets/img/logo.png" alt="" width="45" height="34" style="margin-top: -8px;"
                class="d-inline-block align-text-top" />
            <span class="" style="font-weight: 600; font-size: 25px">
                SIPerpus
            </span>
            <br />
            <h5
                style="
            font-size: 1.5em;
            width: 300px;
            display: inline-block;
            border-bottom: 4px solid black;
            margin-top: 30px;
            ">
                Kontak Kami
            </h5>
            <h5>Alamat</h5>
            <p>Jl. Kemangi No. 56 Jakarta</p>
            <h5>Telepon</h5>
            <p>081456658664</p>
            <h5>Email</h5>
            <p>siperpus@gmail.com</p>
        </div>

        <div class="col-md-6">
            <im src="" alt="" width="30" height="24"
                class="d-inline-block align-text-top" />
            <br />
            <h5
                style="
            font-size: 1.5em;
            width: 300px;
            display: inline-block;
            border-bottom: 4px solid black;
            margin-top: 30px;
            ">
                Jam Operasi Layanan
            </h5>
            <h5>Senin - Sabtu:</h5>
            <p>Buka : 08.00 - 15.00 WIB</p>
            <p>Istirahat : 12.00 - 13.00 WIB</p>
            <h6>Minggu Libur, Tanggal Merah Libur</h6>
            
            <div class="col-md-6">
            <im src="" alt="" width="30" height="24"
                class="d-inline-block align-text-top" />
            <br />
            <h5
                style="
            font-size: 1.5em;
            width: 300px;
            display: inline-block;
            border-bottom: 4px solid black;
            ">
               Collection
            </h5>
            
            <p>SIPerpus memiliki lebih dari 10.000 buku dalam berbagai bahasa dan
                format, termasuk buku fiksi, non-fiksi, anak-anak, dan referensi.
                SiPerpus juga menyediakan koleksi e-book yang dapat diakses dari mana saja dan kapan saja melalui web
                perpustakaan kami.
            </p>
        </div>
    </div>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><a href="{{url('/masukanggota')}}">Masuk Anggota</a></li>
                    <li><a href="{{url('/daftaranggota')}}">Daftar Anggota</a></li>
                    <li><a href="{{url('/daftarhadir')}}">Daftar Hadir</a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


{{--  --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
