<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #0C014F;
            color: white;
        }

        .sidebar {
            background-color: #0C014F;
            height: 100vh;
            border-right: 2px solid white;
            /* Border kanan sidebar */
        }

        .navbar {
            background-color: #0C014F;
            border-bottom: 3px solid white;
            /* Border bawah navbar */
        }

        .main-content {
            border-left: 2px solid white;
            /* Border kiri konten utama */
        }

        .sidebar h4 {
            font-family: 'Inter', sans-serif;
            font-weight: medium;
            font-size: 20px;
        }

        .navbar-brand span {
            font-family: 'Inter', sans-serif;
            font-weight: black;
            font-size: 23px;
        }

        /* Properti untuk melengkungkan tepi */
        .main-content>div {
            border-radius: 15px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-right: 20px; display: inline-block;">
                <img src="assets/img/SIPerpus.png" alt="" width="40" height="34"
                    class="d-inline-block align-text-top" style="vertical-align: middle;">
                <span style="vertical-align: middle;">SIPerpus</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profilepetugas') }}" style="margin-left: auto;">
                            <span style="margin-left: 5px;">
                                <img src="assets/img/fotopetugas.jpg" alt="" width="30" height="30"
                                    style="margin-right: 5px;" class="d-inline-block align-text-top">
                            </span>
                            <span>Petugas</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar">
                <a href="dashpetugas" class="mt-3"
                    style="display: block; text-decoration: none; color: inherit; padding: 10px;">
                    <img src="assets/img/kelola.png" alt="" width="24" height="24"
                        class="d-inline-block align-text-top">
                    Kelola Data
                </a>
                <a href="#" class="mt-3"
                    style="background-color: #a27bd8; display: block; text-decoration: none; color: inherit; padding: 10px;">
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
                <div style="margin-top: 20px; padding: 20px; background-color: #AE95D0; width: 80%; margin-left: 90px;">
                    <div class="card" style="background-color: #AE95D0; width: 100%; height: 100px; border: 0; display: flex; align-items: center;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; width: 100%;">
                            <img src="assets/img/report.png" alt="" width="100" height="100" class="d-inline-block align-text-top" style="margin-left: 50px;">
                            <div style="color: white; padding-top:20px; margin-right: 50px;">
                                <h3 style="margin: 0; font-weight:bold;">Welcome Back, Petugas!</h3>
                                <p style="margin: 0;">“Mari Berkolaborasi untuk Membangun Perpustakaan yang Lebih Baik”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20px; padding: 20px; background-color: white; width: 80%; margin-left: 90px; border-radius: 10px;">
                    <div class="card" style="background-color: white; width: 100%; height: 190px; border: 0; display: flex; align-items: center;">
                        <!-- Konten di dalam card berwarna putih -->
                        <div style="background-color: #5737B7; width: 90%; height: 60%; margin: auto; border-radius: 10px; display: flex; align-items: center; padding: 0 20px;">
                            <div class="garis" style="background-color: white; height: 60%; width: 3px;"></div>
                            <div style="display: flex; align-items: center; justify-content: flex-start;">
                               <a href="{{ url('/uploaddatapetugas') }}" style="text-decoration: none;">
                                 <div style="display: flex; align-items: center; justify-content: flex-start;">
                                    <h4 style="color: black; margin-left: 20px;">Rekap Laporan</h4>
                                </div>
                                </a>

                            </div>
                            <div style="display: flex; align-items: center; margin-left: 500px;">
                                <img src="assets/img/LaporanDataPetugas.png" alt="" style="width: 85px; height: 85px;">
                            </div>
                        </a>
                        </div>
                        </div>
                    </div>
                </div>
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
    <script>
        // Tambahkan event listener ke tombol
        document.getElementById('btnBack').addEventListener('click', function() {
            redirectToPreviousDashboard();
        });

        // Tambahkan event listener untuk setiap tautan
        var plusLinks = document.querySelectorAll('.plus-link');
        plusLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah perilaku default dari tautan
                var href = this.getAttribute('href');
                window.location.href = href;
            });
        });
    </script>
    
    <script type="text/javascript">
    function redirectToDash() {
        // Mengarahkan pengguna ke halaman dash
        window.location.href = "dash";
    }
</script>
</body>
</html>
