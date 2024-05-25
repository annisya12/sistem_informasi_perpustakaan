<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard Petugas</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/ready.css">
    <style>
        .row.m-3 {
            position: relative;
            height: 140px;
        }

        hr {
            margin: 0;
            height: 100%;
        }

        body {
            -webkit-backface-visibility: none; /* fix chrome bug */
        }
    </style>
</head>
<body class="section">
    <div class="wrapper">
        <div class="main-header bg-primary">
            <div class="logo-header">
                <a style="color: white;" class="logo">
                    <img class="Engineering41" style="width: 40px; height: 40px" src="assets/img/engineering.png" />
                    <span style="color: white;">SIPerpus</span>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown">
                            <a class="mt-1 profile-pic d-flex align-items-center" data-toggle="dropdown" href="{{ url('/profilepetugas') }}" aria-expanded="false">
                                <div class="mx-auto">
                                    <img src="assets/img/fotopetugas.jpg" alt="user-img" width="36" class="img-circle">
                                    <span style="color: white;">Petugas</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <div class="sidebar bg-primary text-white">
            <div class="scrollbar-inner sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item"> 
                        <a href="" style="background-color: #a27bd8;">
                            <img src="assets/img/keloladata.png" width="25" style="margin-right: 10px; margin-top: 20px;" alt="" srcset="">
                            <span style="color: white; margin-top:20px;">Kelola Data</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('/dashlaporan') }}">
                            <img src="assets/img/laporan.png" width="25" style="margin-right: 10px;" alt="" srcset="">
                            <span style="color: white;">Laporan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <img src="assets/img/log.png" width="25" style="margin-right: 5px; margin-left: 5px;">
                            <span style="color: white;">Keluar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <div class="content bg-info">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="background-color: #AE95D0; background-image: url('assets/img/BGbintang.png');">
                                <div class="card-body">
                                    <div class="media">
                                        <img src="assets/img/wlcmbckpertugas.png" class="align-self-center mr-3" alt="...">
                                        <div class="media-body text-start" style="color: #fff; font-weight: bold; margin: 2rem;">
                                            <h4 style="color: #fff; font-weight: bold;">Welcome Back, Petugas!</h4>
                                            <p>Membaca itu tidak membuat kita “menjadi bangsa kelas teri”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card" style="border-radius: 20px;">
                                <div class="card-body" id="bookContainer">
                                    <div class="row m-3" style="background-color: #5737B7; border-radius: 1rem; display: flex; align-items: center; justify-content: center;">
                                        <hr style="border: 3px solid white; height: 80px; margin-right: 10px;">
                                        <div class="col-9 text-dark">
                                            <a href="{{ url('/datapengunjung') }}">
                                                <span style="font-size: 1.6rem; font-weight: bold; color: black;">Data Pengunjung</span>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <img src="assets/img/datapengunjung.png" alt="" style="width: 5rem; margin: 2rem;">
                                        </div>
                                    </div>
                                    <div class="row m-3" style="background-color: #C47CB0; border-radius: 1rem; display: flex; align-items: center; justify-content: center;">
                                        <hr style="border: 3px solid white; height: 80px; margin-right: 10px;">
                                        <div class="col-9 text-dark">
                                            <a href="{{ url('/dataaktivitas') }}">
                                                <span style="font-size: 1.6rem; font-weight: bold; color: black;">Data Aktifitas</span>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <img src="assets/img/dataaktivitas.png" alt="" style="width: 5rem; margin: 2rem;">
                                        </div>
                                    </div>
                                    <div class="row m-3" style="background-color: #D0CADD; border-radius: 1rem; display: flex; align-items: center; justify-content: center;">
                                        <hr style="border: 3px solid white; height: 80px; margin-right: 10px;">
                                        <div class="col-9 text-dark">
                                            <a href="{{ url('/datamember') }}">
                                                <span style="font-size: 1.6rem; font-weight: bold; color: black;">Data Member</span>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <img src="assets/img/datamember.png" alt="" style="width: 5rem; margin: 2rem;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4 text-left">
                                <button class="btn btn-success" onclick="redirectToDash()">Ya</button>
                            </div>
                        </div>
                        <div class="w-100 text-center">
                            <img src="{{ asset('assets/img/logout.png') }}" width="70%" alt="Logout">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script type="text/javascript">
         function redirectToDash() {
        // Mengarahkan pengguna ke halaman dash
        window.location.href = "dash";
    }
    </script>
</body>
</html>
